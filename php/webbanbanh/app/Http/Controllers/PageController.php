<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use Illuminate\Http\Request;
use App\ProductType;
use App\Cart;
use Session;
use App\Customer;
use App\Bill;
use App\BillDetail;
use App\User;
use Hash;
use Auth;
use Illuminate\Pagination\Environment;
class PageController extends Controller
{
    //
    public function getIndex(){
    	$slide = Slide::all();
    	// return view('page.trangchu',['slide' => $slide]);
    	//cach hai
    	$new_product = Product::where('new',1)->paginate(4);
    	// dd($new_product);
        // $collection1 = Product::where('new',1)->paginate(4);

    	$sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(6);
    	return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));


    }
    // ex id type = 2
    public function getLoaiSp($type){
        $sp_theoloai = Product::where('id_type',$type)->get();
        // lấy tất cả sp cùng loại
        $sp_khac = Product::where('id_type','<>',$type)->paginate(3);
       // lấy tất cả sp không cùng id_type chuyền vào
        $loai = ProductType::all();
        // lấy hết tất cả loại sản phẩm
        $loai_sp = ProductType::where('id',$type)->first();
        // dd($loai_sp);

    	return view('page.loai_sanpham',compact('sp_theoloai','sp_khac','loai','loai_sp'));
    }
    public function getChitiet(Request $request){
        $sanpham = Product::where('id',$request->id)->first();
        $sp_tuongtu = Product::where('id_type',$sanpham->id_type)->paginate(6);
    	return view('page.chitiet_sanpham',compact('sanpham','sp_tuongtu'));
    }
    public function getLienHe(){
    	return view('page.lienhe');
    }
    public function getGioiThieu(){
        return view('page.gioithieu');
    }
    // them vao gio hang
    public function getAddToCart(Request $req,$id){
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->Session()->put('cart',$cart);
        return redirect()->back();
    }
    // xoa san pham trong gio hang
    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        // nếu số lượng = 0 thi xóa session cart
        if(count($cart->items) > 0){
            Session::put('cart',$cart);// sau khi remove thi phai put lai gio hang
        }
        else{
            Session::forget('cart');
        }
        
        
        return redirect()->back();
    }
    public function getCheckout(){
        return view('page.checkout');
    }
    public function postCheckout(Request $req){
        $cart = Session('cart');
        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->adress;
        $customer->phone_number = $req->phone_number;
        if($req->note =='') {
            $customer->note = 'null';
        }
        else {
            $customer->note = $req->note;
        }
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment;
        if($req->note =='') {
            $bill->note = 'null';
        }
        else {
            $bill->note = $req->note;
        }
        $bill->save();
        foreach($cart->items as $key => $value){
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = ($value['price']/$value['qty']);
            $bill_detail->save();
        }
        // loai bo session gio hang
        Session::forget('cart');
        return redirect()->back()->with('thongbao','dat hang thanh cong');
    }
    // het phan su ly thong tin dat hang
    public function getLogin(){
        return view('page.dangnhap');
    }
    public function getSignin(){
        return view('page.dangky');
    }
    public function postSignin(Request $request){
        $this->validate($request,
            [
                'email' => 'required|email|unique:users,email',
                'password' =>'required|min:6|max:20',
                'fullname' => 'required',
                're_password' => 'required|same:password'
            ],
            [
                'email.required' => 'vui lòng nhập địa chỉ email',
                'email.email' => 'không đúng định dạng email ex: exp@exp',
                'email.unique' => 'email này đã được sử dụng',
                'password.required' =>'vui lòng nhập mật khẩu',
                'password.min' => 'mật khẩu có độ dài từ 6 đến 20 ký tự',
                'password.max' => 'mật khẩu có độ dài từ 6 đến 20 ký tự',
                'fullname.required' => 'vui lòng nhập vào họ tên',
                're_password.required' => 'vui lòng nhập lại mật khẩu',
                're_password.same' => 'mật khẩu không giống nhau, vui lòng nhập lại'
            ]
        );
        $user = new User;
        $user->email = $request->email;
        $user->full_name = $request->fullname;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        // $user->remember_token = $request->_token;
        $user->save();
        return redirect()->back()->with('thongbao','đăng ký thành công');
    }
    public function postLogin(Request $request){
        $this->validate(
            $request,
            [
                'email' => 'required|email',
                'password' => 'required|min:6|max:20'
            ],
            [
                'email.required' => 'vui lòng nhập vào email',
                'email.email' => 'không đúng định dạng email',
                'password.required' => 'vui lòng nhập vào mật khẩu',
                'password.min' => 'mật khẩu ít nhất 6 ký tự',
                'password.max' => 'mật khẩu tối đa 20 ký tự'
            ]
        );
        $credentials = array('email' => $request->email, 'password' => $request->password);
        if(Auth::attempt($credentials))
        {
            return redirect()->back()->with(['flag'=>'success','message' => 'đăng nhập thành công']);
        }
        else
        {
            return redirect()->back()->with(['flag'=>'danger','message' => 'đăng nhập không thành công']);
        }
    }
    public function postLogOut(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }
    public function getSearch(Request $request){
        $product = Product::where('name' ,'like', '%'.$request->key.'%')->orWhere('unit_price','like',$request->key)->orWhere('promotion_price','like',$request->key)->get();
        return view('page.search',compact('product'));
    }
}   

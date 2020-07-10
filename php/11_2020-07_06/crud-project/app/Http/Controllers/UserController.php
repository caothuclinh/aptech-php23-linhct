<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use SoftDeletes;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::where('id','>',0)->paginate(5);
        return view('admin.show',['users' => $users]);
    }
    public function getNhanVien()
    {
        $users = User::where('cap_bac','<>','qt')->paginate(5);
        return view('admin.show',['users' => $users]);
    }
    public function getQuanTri()
        {
            $users = User::where('cap_bac','qt')->paginate(5);
            return view('admin.show_qt',['users' => $users]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = User::All();
        return view('admin.create',['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // tạo mới
    public function store(Request $request)
    {
        //
        $this->validate(
            $request,
            [
                'name' => 'required|unique:users,name|min:3|max:50',
                'email' => 'required|unique:users,email|email|min:3|max:50',
                'pass' => 'required|min:6|max:100'
            ],
            [
                // 'name.alpha' => 'chỉ được sử dụng ký tự alpha', 
                'name.required' => 'bạn chưa nhập tên',
                'name.unique' => 'tên đã tồn tại',
                'name.min' => 'ten nguoi dung phai tu 3 den 50 ky tu',
                'name.max' => 'ten nguoi dung phai tu 3 den 50 ky tu',

                'emai.required' => 'ban chua nhap emai',
                'emai.unique' => 'email da ton tai',
                'email.email' => 'vui long su dung dinh dang nhu exp@gmail',
                'email.min' => 'email phai tu 3 den 50 ky tu',
                'email.max' => 'email phai tu 3 den 50 ky tu',

                'pass.required' => 'ban chua nhap password',
                'pass.min' => 'password phai tu 5 den 100 ky tu',
                'pass.max' => 'password phai tu 5 den 100 ky tu',
                
            ]);
        $user = new User;
        $user->name = ucwords($request->name);
        $user->email = $request->email;
        $user->pass = bcrypt($request->pass);
        $user->save();
        return redirect('users/create')->with('section','thêm người dùng thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    // hiển thị chi tiết thông tin người dùng cụ thể
    public function show(User $user)
    {
        //
        $user = User::find($user);
        return view('admin.showUser', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    // sửa thong tin người dùng
    public function edit(User $user)
    {
        //
        // dd($user);
        $user = User::find($user);
        return view('admin.edit', ['user' =>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // $user = User::find($user);
        $this->validate(
            $request,
            [
                'name' => 'bail|required|unique:users,name|min:3|max:50',
                'email' => 'bail|required|unique:users,email|email|min:3|max:50',
                'pass' => 'bail|required|min:6|max:100'
            ],
            [
                // 'name.alpha' => ' tên chỉ được sử dụng ký tự alpha', 
                'name.required' => 'ban chua nhap ten',
                'name.unique' => 'ten da ton tai',
                'name.min' => 'ten nguoi dung phai tu 3 den 50 ky tu',
                'name.max' => 'ten nguoi dung phai tu 3 den 50 ky tu',

                'emai.required' => 'ban chua nhap emai',
                'emai.unique' => 'email da ton tai',
                'email.email' => 'vui long su dung dinh dang nhu exp@gmail',
                'email.min' => 'email phai tu 3 den 50 ky tu',
                'email.max' => 'email phai tu 3 den 50 ky tu',

                'pass.required' => 'ban chua nhap password',
                'pass.min' => 'password phai tu 5 den 100 ky tu',
                'pass.max' => 'password phai tu 5 den 100 ky tu',
                
            ]);
        // $user = new Use;

        $user->name = ucwords($request->name);
        $user->email = $request->email;
        $user->pass = bcrypt($request->pass);
        $user->save();
        return redirect('users/edit/'.$user->id)->with('section','ban da sua thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        User::destroy($user->id);
        return redirect()->action('UserController@index')->with('section','da xoa thanh cong');
    }
}

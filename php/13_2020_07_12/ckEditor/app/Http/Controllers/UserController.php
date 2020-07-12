<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
        $users = User::paginate(5);
        return view('users.show',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all();
        return view('users.create',['users' =>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate(
            $request,
            [
                'name' => 'required|unique:users,name|min:3|max:50'
            ],
            [
                'name.required' => 'vui long nhap ten',
                'name.unique' => 'ten da ton tai',
                'name.min' => 'ten phai tu 3 den 50 ky tu',
                'name.maxs' => 'ten phai tu 3 den 50 ky tu'
            ]);
        $user = new User;
        $user->name = ucwords($request->name);
        $user->email = $request->email;
        $user->pass = bcrypt($request->pass);
        $user->save();
        return redirect()->back()->with('thongbao','them nguoi dung thanh cong');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::find($id);
        return view('users.show_user',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        return view('users.edit',['user' =>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate(
            $request,
            [
                'name' => 'required|unique:users,name|min:3|max:50'
            ],
            [
                'name.required' => 'vui long nhap ten',
                'name.unique' => 'ten da ton tai',
                'name.min' => 'ten phai tu 3 den 50 ky tu',
                'name.maxs' => 'ten phai tu 3 den 50 ky tu'
            ]);
        $user = User::find($id);
        $user->name = ucwords($request->name);
        $user->email = $request->email;
        $user->pass = bcrypt($request->pass);
        $user->save();
        return redirect()->back()->with('thongbao','sua thanh cong');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user )
    {
        //
        User::destroy($user->id);
        return redirect()->back()->with('thongbao','xoa nguoi dung thanh cong');
    }
}

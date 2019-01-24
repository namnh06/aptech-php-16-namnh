<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // lay tat ca data trong table users
        $users = DB::table('users')->get();

        // chuyen bien $users qua view index voi ten bien la $users
        return view(
            'users.index',
            [
                'users' => $users,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // tra lai cho nguoi dung view co form dang ky
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $_GET & $_POST super global;
        // nhan du lieu tu nguoi dung thong qua bien $request va them data vao bang users
        DB::table('users')->insert([
            'name' => $request->ten,
            'email' => $request->email
        ]);
        // chuyen huong nguoi dung den trang index
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // nhan id tu nguoi dung va tim kiem du lieu dua tren id do
        $user = DB::table('users')->where('id', '=', $id)->get();
        // chuyen du lieu nguoi dung qua ben view de in ra
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // nhan id tu nguoi dung va tim kiem
        $user = DB::table('users')->where('id', '=', $id)->get();
        // chuyen du lieu nguoi dung qua ben view co form de nguoi dung chinh sua thong tin
        return view('users.edit', ['user' => $user]);
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
        // cap nhat thong tin nguoi dung bang gui len thong qua $request
        // https://laravel.com/docs/5.5/queries#updates
        DB::table('users')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        // chuyen huong nguoi dung den trang show voi id cua ho vua thay doi
        return redirect()->route('users.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // xoa nguoi dung dua tren id cua ho
        //https://laravel.com/docs/5.5/queries#deletes
        DB::table('users')->where('id', $id)->delete();

        // chuyen huong nguoi dung den trang index
        return redirect()->route('users.index');

    }
}
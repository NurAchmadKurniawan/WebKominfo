<?php

namespace App\Http\Controllers;

use App\DataUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataUserController extends Controller
{
  
    public function index()
    {
        $user = \App\User::all();
        return view('admin/datauser', compact('user'));
    }

    public function create()
    {
        //
        return view('admin/user');
    }

    public function store(Request $request)
    {
        //
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        // $user->password_biasa=$request->password->nullable();
        $user->password_confirmation=bcrypt($request->password_confirmation);
        $user->save();
        return redirect('/datauser');
    }
    public function show($id)
    {
        //
    }

    public function edituser($id)
    {
        //
         $user = \App\User::find($id);
         return view('admin/edituser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        //
        $user = \App\User::find($id);
        $user->update($request->all());
        return redirect('/datauser');
    }

    public function destroy($id)
    {
        //
        $user = \App\User::find($id);
        $user->delete($user);
        return redirect('datauser');
    }

}
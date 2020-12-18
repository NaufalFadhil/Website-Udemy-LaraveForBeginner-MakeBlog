<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Session;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function edit($id)
    {
        $users = User::find($id);

        return view('auth.change_password')
            ->with('users', $users);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:3|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect('user/' . Auth::user()->id . '/edit')
                ->withinput()
                ->witherrors($validator);
        }

        // CREATE CATEGORY
        $user = User::find($id);
        $user->fill([
            'password' => Hash::make($request->password)
        ])->save();

        Session::flash('user_update', 'Your Password has Changed');
        // $request->session()->flash('user_update', 'user is Update!');

        return redirect('user');
    }
}

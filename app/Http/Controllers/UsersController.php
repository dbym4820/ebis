<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UsersRequest;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function create(Request $request) {
        $user = new User();
        
        
        return view('create')->with('user', $user);
        //return redirect('/');
    }


    public function save(UsersRequest $request) { //登録処理
        $user = new User();
        if ($request->name) {
            $user->name = $request->name;
        }
        $user->password = Hash::make($request->password); //password_hashみたいなの
        $user->email = $request->mail;
        $user->body = $request->body;
        $user->save();
        return redirect('/');
    }

    public function delete(Request $request) { //削除処理
        $user = User::findOrFail($request->id);
        if (Hash::check($request->password , $user->password)) { //password_verifyみたいなの
            User::destroy($user->id);
            return redirect('/');
        }
            $error = 'The password is incorrect';
            return view('confirm', ['error' => $error])->with('user', $user);
    }

}

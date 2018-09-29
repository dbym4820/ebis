<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserpageController extends Controller
{
    public function index() {
        $users = User::latest()->get();
        return view('users', ['users' => $users]);
    }

    public function confirm(User $user) {
        return view('confirm')->with('user', $user);
    }
}

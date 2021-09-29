<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function profile(){
        $id = Auth::id();
        $users = User::find($id);
        return view('auth.profile')->with([
            'user' => $users
        ]);
    }
}

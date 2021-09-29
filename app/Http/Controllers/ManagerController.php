<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ManagerController extends Controller
{
    public function listuser(){
        $user = User::where('status','sending')->get();
        return view('manager.listuser')->with([
            'user' => $user
        ]);
    }
}

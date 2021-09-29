<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if (auth()->check() && Auth::user()->role->namaRule == 'Admin'){
            if(Auth::user()->status == 'active'){
                return Redirect::route('dasboard');
            }else{
                return view ('auth.login');
            }
        // jika non admin
        }elseif (auth()->check() && Auth::user()->role->namaRule == 'Kemas'){
            if(Auth::user()->status == 'active'){
                return Redirect::route('DasboardKemas');
            }else{
                return view ('auth.login');
            }
        }
    }
}

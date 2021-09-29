<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function dasboard(){
        $user = User::where('status','sending')->get();
        return view('dasboard')->with([
            'user' => $user
        ]);
    }

    public function DasboardKemas(){
        return view('DasboardKemas');
    }
}

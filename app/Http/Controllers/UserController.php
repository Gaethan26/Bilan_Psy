<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Authenticated
{
    public function create() {
        return view('create-account');
    }

    public function store() {
        $user = User::create(request(['firstname', 'lastname', 'email', 'phone', 'username', 'password']));
        if($user){
            return redirect('create-account-success');
        }
    }

    public function login(Request $request) {
        $user = User::where('email', '=', $request->email)->where('password', '=', $request->password)->first();

        if($user){
            return redirect('dashboard');
        }
        else{
            return back();
        }
    }
}
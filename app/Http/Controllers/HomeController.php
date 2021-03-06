<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Roles;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $role = Roles::find($user->roles_id)['role']; // i tried to use rellation here, but i`v got error all the time
        
        return view('index',[
            'user' => $user,
            'role' => $role,
        ]);
    }
}

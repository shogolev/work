<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roles;
use App\User;
use Auth;

class ErrorsController extends Controller
{
    /**
     * 
     */
    public function index() {
        $user = Auth::user();
        $role = Roles::find($user->roles_id)['role'];

        return view('errors.404',[
            'user' => $user,
            'role' => $role,
        ]);
    }
}

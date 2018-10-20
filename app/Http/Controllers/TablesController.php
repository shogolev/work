<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roles;
use App\User;
use Auth;

class TablesController extends Controller
{
    public function index() {
        $user = Auth::user();
        $role = Roles::find($user->roles_id)['role'];

        return view('tables',[
            'user' => $user,
            'role' => $role,
        ]);
    }
}

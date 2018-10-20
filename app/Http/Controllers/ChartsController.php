<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Roles;

class ChartsController extends Controller
{
    /**
     * Show the application charts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user = Auth::user();
        $role = Roles::find($user->roles_id)['role'];

        return view('charts', [
            'user' => $user,
            'role' => $role,
        ]);
    }
}

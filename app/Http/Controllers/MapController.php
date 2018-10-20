<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Roles;

class MapController extends Controller
{
    /**
     * Show the application blank page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() { //here i wanted to make last task (about map in google api) but i dont have enough time :(
        $user = Auth::user();
        $role = Roles::find($user->roles_id)['role'];

        return view('blank',[
            'user' => $user,
            'role' => $role,
        ]);
    }
    
}

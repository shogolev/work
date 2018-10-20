<?php

namespace App\Http\Middleware;

use Closure;

class RolesPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(isset($request->role)) {
            $path = $request->path(); //current page
            $role = $request->role; //users role
            $ok = 0; //counter to return request

            switch($role) {
                case 'super-admin' :
                    $ok = 1;
                break;
                case 'admin' :
                    if($path == 'charts' || $path == 'blank' || $path == '404') {
                        $ok = 1;
                    }
                break;
                case 'manager' :
                    if($path == 'tables' || $path == '404') {
                        $ok = 1;
                    }
                break;
                case 'user' :
                    if($path == 'home' || $path == '404') {
                        $ok = 1;
                    }
                break;
                default :
                    return redirect()->to('404');
                break;
            }

            if($ok == 1) {
                return $next($request);
            } else {
                return back()->with('message', 'You don`t have permission to access this page');
            }
        } else 
        {
            return back()->with('message', 'You don`t have permission to access this page');
        }
    }
}

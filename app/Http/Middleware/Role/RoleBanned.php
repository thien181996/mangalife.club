<?php

namespace App\Http\Middleware\Role;

use App\RoleUser;
use Closure;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class RoleBanned
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
        $user = RoleUser::join('roles','role_users.role_id','roles.id')->where('user_id',Auth::id())->select('roles.role_rank')->first()->role_rank;

        if($user != 4)
        {
            return redirect(url()->previous());
        }

        return $next($request);
    }
}

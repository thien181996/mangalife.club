<?php

namespace App\Http\Middleware\Role;

use App\Http\Controllers\lib;
use App\RoleUser;
use Closure;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class RoleAdmin
{
    public function __construct(lib $lib)
    {
        $this->lib = $lib;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $access = $this->lib->moduleAccess();
//        dd($access);
//        $user = RoleUser::join('roles','role_users.role_id','roles.id')->where('user_id',Auth::id())->select('roles.role_rank')->first()->role_rank;

        if(!$access)
        {
            return redirect(url()->previous());
        }

        return $next($request);
    }
}

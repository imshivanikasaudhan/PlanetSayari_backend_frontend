<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAuthenticationAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        
        $userId = $request->attributes->get('user_id');
        
        info($userId);
        return $next($request);
        // app()->instance('auth_user_email,'');
        // app()->instance('auth_user_email',"");

        

        // if (app('auth_user_email') != null &&  app('auth_user_email')  != "") {

        //     $admin = Admin::where('email', app('auth_user_email'))->first();
        //     info(app('auth_user_email'));

        //     info('inside middleware');
        //     info($admin);
        //     info($request->all());
        //     if ($admin) {
        //         return redirect('admin-dashbaord');
        //     }
        // } else {
        //     info('inside else');
        //     return redirect('ps-admin');
        // }
        // return $next($request);
    }
}

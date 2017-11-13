<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
class login_students
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
        
          if (Auth::guard('login_students')->check()) {
            return redirect('/index');
        }  
        else{
            return view('admin.login');
        }  
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Models\Settings;

use Auth;
class Kyc
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
        $set=Settings::find(1);
        if($set->kyc_restriction==1){
            if(Auth::guard('user')->user()->kyc_status == 1)
            {
                return $next($request);
            }else{
                return redirect()->route('user.no-kyc');
            }
        }else{
            return $next($request);
        }
    }
}

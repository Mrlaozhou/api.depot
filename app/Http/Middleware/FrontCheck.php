<?php

namespace App\Http\Middleware;

use App\Extentions\Check\RequestCheck;
use App\Extentions\Check\SignCheck;
use Closure;

class FrontCheck
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
        $requestCheck               =   new RequestCheck();

        $requestCheck->setNext( new SignCheck() )
            ->setNext( new SignCheck() );

        $requestCheck->start( $request );

        return $next($request);
    }
}

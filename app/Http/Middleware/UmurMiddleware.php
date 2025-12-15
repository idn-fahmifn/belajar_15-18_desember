<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UmurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $data = $request->session()->get('umur');
        if ($data >= 18) {
            return $next($request); 
            //mengizinkan untuk mengunjungi route yang dituju
        }

        return redirect()->route('umur.form')
        ->with('fail', 'Umur belum cukup');

    }
}

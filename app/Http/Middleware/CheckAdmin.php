<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next)
    {
        if(auth()->user() && auth()->user()->type == 'admin') {
            return $next($request);
        }

        return redirect()->route('index')->with('error', 'You do not have permission to create a product.');
        // if(auth()->user() && auth()->user()->type == 'admin') {
        //     // return $next($request);
        //     return redirect()->route('index')->with('error', 'You do not have permission to create a product.');
        // }
        // elseif(auth()->user() && auth()->user()->type == 'user') {
        //     return redirect()->route('viewproducts')->with('Login Successful');
        // }

    }
    // public function handle(Request $request, Closure $next)
    // {
        
        // $type = auth()->user() && auth()->user()->type == 'admin';
        //     if($type == 'admin') {
        //         return redirect('/')->with('success', 'login Succesful');
        //     }
        //     else {
        //         return redirect('/users/view')->with('success', 'login Succesful');
        //     }
//     }
// }
// if(auth()->user() && auth()->user()->type == 'admin') {
//     return $next($request);
}

// return redirect()->route('index')->with('error', 'You do not have permission to create a product.');
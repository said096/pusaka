<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth; // Ini fungsinya buat apa ??

class RedirectIfAuthenticated
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
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
        if ($this->auth->check()) {
            return redirect('/home');
            /* Disini aku masih bingung cara membagi halamannya
            switch (Auth::user()->level) {
                case 'client':
                    return redirect()->route('client.pages.home');
                break;
                case 'member':
                    return redirect()->route('client.pages.home');
                break;
                case 'root':
                    return redirect()->route('admin.pages.dashboard');
                break;
                case 'admin':
                    return redirect()->route('admin.pages.dashboard');
                break;
                case 'writer':
                    return redirect()->route('admin.pages.dashboard');
                break;
                default:
                    Auth::logout();
                    return redirect()->route('signin');
                break;
            }
            */
        }

        return $next($request);
    }
}

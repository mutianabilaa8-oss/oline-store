<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected function authenticated($request, $user)
    {
        if ($user->role === 'admin') {
            return redirect('/admin');
        }

        return redirect('/');
    }

    /**
     * Tidak perlu middleware manual di Laravel 13 + UI
     */
}

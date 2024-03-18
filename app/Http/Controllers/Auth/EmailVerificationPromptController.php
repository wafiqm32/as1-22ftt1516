<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Providers\RouteServiceProvider;
=======
>>>>>>> 7cc5bf7 (done change laravel logo)
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->user()->hasVerifiedEmail()
<<<<<<< HEAD
                    ? redirect()->intended(RouteServiceProvider::HOME)
=======
                    ? redirect()->intended(route('dashboard', absolute: false))
>>>>>>> 7cc5bf7 (done change laravel logo)
                    : view('auth.verify-email');
    }
}

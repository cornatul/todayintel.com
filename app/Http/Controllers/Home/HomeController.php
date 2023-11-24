<?php

declare(strict_types=1);

namespace App\Http\Controllers\Home;

use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function showHomePage(): View
    {
        return view('pages.home');
    }
}

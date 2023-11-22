<?php
declare(strict_types=1);

namespace Cornatul\Social\Http;

use Cornatul\Social\Contracts\ShareContract;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/**
 * Class SocialController
 * @package Cornatul\Social\Http
 */
final class ShareController extends Controller
{
    final public function share(int $account): Application|Factory|View|\Illuminate\Foundation\Application
    {
        return view('social::share',
        	compact('account')
        );
    }


    final public function process(ShareContract $contract, Request $request): RedirectResponse
    {
        //todo implementation
        return redirect()->route('social.index');
    }
}

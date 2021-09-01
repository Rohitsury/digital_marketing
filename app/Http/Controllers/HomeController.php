<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        switch (Auth::user()->type) {
            case 'ADMIN':
                return redirect()->route('admin.dashboard.index');
                break;

            case 'STAFF':
                return redirect()->route('staff.dashboard.index');
                break;

            case 'CLIENT':
                return redirect()->route('client.dashboard.index');
                break;

            default:
                # code...
                return view('home');
                break;
        }
    }
}

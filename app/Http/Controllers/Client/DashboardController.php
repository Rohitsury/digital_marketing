<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Client;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ads = Ad::whereClientId(Auth::user()->id)->get();
        return view('client.dashboard.index', compact('ads'));
    }
}

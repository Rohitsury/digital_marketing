<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ads = Ad::all();
        return view('staff.dashboard.index', compact('ads'));
    }
}

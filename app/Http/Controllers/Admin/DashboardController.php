<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $staff = User::whereType('STAFF')->get();
        $ads = 10;
        return view('admin.dashboard.index', compact('clients', 'staff', 'ads'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user && isset($user->role) && intval($user->role) === 0) {
            return view('dashboard.admin');
        }

        return view('dashboard.user');
    }
}

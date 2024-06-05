<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $tab = 'Dashboard guru';
        return view('guru.dashboard', [
            'tab' => $tab
        ]);
    }
}

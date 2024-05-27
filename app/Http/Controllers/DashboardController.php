<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $showadmin = auth()->user()->isAdmin(); 
        return view('pages.dashboard', compact('showadmin'));
    }
}

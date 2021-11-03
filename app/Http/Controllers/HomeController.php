<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class HomeController extends Controller
{
    public function index(){
        $role = Auth::user()->role;
        if ($role) {
            return view('dashboard');
        }
    }
}

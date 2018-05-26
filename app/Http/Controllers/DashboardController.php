<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AdminSection;

class DashboardController extends Controller
{
    public function index()
    {
        return AdminSection::view(view('dashboard', ['last' => \Auth::user()->last_entry]), '');
    }
}

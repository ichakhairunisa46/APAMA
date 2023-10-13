<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

date_default_timezone_set("Asia/Makassar");

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
}

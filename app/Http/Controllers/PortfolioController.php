<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $demos = Demo::paginate(20);
        return view('Portfolio.index')->with('demos', $demos);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioDetailsController extends Controller
{
    public function index()
    {
        return view("portfolio-details", [
            "title" => "Portfolio Details"
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\EmployeesChart;

class HomeController extends Controller
{
    public function index(EmployeesChart $chart)
    {
        $pageTitle = 'Home';
        return view('home', [
            'pageTitle' => $pageTitle,
            'chart' => $chart->build()
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        return view('pages.work');
    }

    public function detail()
    {
        return view('pages.work-details');
    }
}

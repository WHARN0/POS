<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellingsController extends Controller
{
    public function index()
    {
        return view('sellings.index');
    }
}
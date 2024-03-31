<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function showHome()
    {
        return view('pages.home');
    }
}

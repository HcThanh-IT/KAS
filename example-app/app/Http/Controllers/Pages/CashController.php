<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\CashModel;
use Illuminate\Http\Request;



class CashController extends Controller
{
    public function showCashIn()
    {
        return view('pages.cashin');
    }
    
}

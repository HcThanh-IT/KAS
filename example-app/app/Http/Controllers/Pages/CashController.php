<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\CashModel;
use Illuminate\Http\Request;



class CashController extends Controller
{
    public function showCashIn()
    {
        $this->loadNCC();
        return view('pages.cashin');
    }
    public function showCashInList()
    {
        return view('pages.cashinlist');
    }
    public function loadNCC(){
        $suppliers = CashModel::select('MaNCC', 'TenNCC')->get();
        return view('pages.cashin', ['suppliers' => $suppliers]);
    }
    
}

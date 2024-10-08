<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class TaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('super');
    }
    public function taxState()
    {
        return view('back.tax.state.list');
    }
    public function taxGeneral()
    {
        return view('back.tax.general.list');
    }
}

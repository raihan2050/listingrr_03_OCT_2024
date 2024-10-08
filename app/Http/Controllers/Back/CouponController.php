<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('super');
    }
    public function list()
    {
        return view('back.coupons.list');
    }
}

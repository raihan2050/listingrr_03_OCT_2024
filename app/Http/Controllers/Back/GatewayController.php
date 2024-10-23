<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\PaymentSetting;
use Illuminate\Support\Facades\Artisan;

class GatewayController extends Controller
{
    public function __construct()
    {
        $this->middleware('super');
    }
    public function list()
    {
        $paymentSettings = PaymentSetting::get();
        return view('back.gateway.list', compact('paymentSettings'));
    }
}

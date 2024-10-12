<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class GatewayController extends Controller
{
    public function __construct()
    {
        $this->middleware('super');
    }
    public function list()
    {
        return view('back.gateway.list');
    }
}

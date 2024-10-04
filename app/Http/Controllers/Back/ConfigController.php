<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class ConfigController extends Controller
{
    public function __construct()
    {
        $this->middleware('super');
    }
    public function migrate()
    {
        Artisan::call('migrate');
        return redirect()->back()->with('alert_message', [
            'status' => 'success',
            'title' => 'DB Migration',
            'msg' => 'Database migrated successfully.',
        ]);
    }

    public function clear()
    {
        Artisan::call('optimize:clear');
        return redirect()->back()->with('alert_message', [
            'status' => 'success',
            'title' => 'Optimization',
            'msg' => 'All caches cleared successfully.',
        ]);
    }
}

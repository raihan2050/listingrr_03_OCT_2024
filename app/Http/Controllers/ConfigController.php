<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class ConfigController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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

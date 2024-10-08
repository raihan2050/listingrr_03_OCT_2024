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
        // Cache the configuration
        // Artisan::call('config:cache');

        // Cache the routes
        // Artisan::call('route:cache');

        Artisan::call('view:cache');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');

        return redirect()->back()->with('alert_message', [
            'status' => 'success',
            'title' => 'Optimization',
            'msg' => 'All caches cleared successfully.',
        ]);
    }
}

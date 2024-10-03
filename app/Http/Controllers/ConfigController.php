<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class ConfigController extends Controller
{
    public function migrate()
    {
        Artisan::call('migrate');
        return redirect()->back()->with('status', 'Database migrated successfully.');
    }

    public function clear()
    {
        Artisan::call('optimize:clear');
        return redirect()->back()->with('status', 'All caches cleared successfully.');
    }

    public function down()
    {
        Artisan::call('down');
        return redirect()->back()->with('status', 'Application is now in maintenance mode.');
    }

    public function up()
    {
        Artisan::call('up');
        return redirect()->back()->with('status', 'Application is now live.');
    }
}

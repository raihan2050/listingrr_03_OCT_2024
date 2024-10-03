<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Artisan;

class MaintenanceController extends Controller
{
    public function enable()
    {
        Artisan::call('down', [
            '--message' => 'The site is under maintenance.',
            '--retry' => 60,
        ]);

        return redirect()->back()->with('status', 'Maintenance mode enabled.');
    }

    public function disable()
    {
        Artisan::call('up');

        return redirect()->back()->with('status', 'Maintenance mode disabled.');
    }
}

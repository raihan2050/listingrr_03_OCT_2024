<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class AdminMaintenanceController extends Controller
{
    public function enableMaintenance()
    {
        // Check if the user is an admin
        if (auth()->guard('admin')->check()) {
            Artisan::call('down'); // Enable maintenance mode
            return redirect()->back()->with('status', 'Maintenance mode enabled.');
        }

        return redirect()->back()->withErrors('Unauthorized action.');
    }

    public function disableMaintenance()
    {
        // Check if the user is an admin
        if (auth()->guard('admin')->check()) {
            Artisan::call('up'); // Disable maintenance mode
            return redirect()->back()->with('status', 'Maintenance mode disabled.');
        }

        return redirect()->back()->withErrors('Unauthorized action.');
    }
}

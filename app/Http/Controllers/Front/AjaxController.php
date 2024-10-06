<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AjaxController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $im = Auth::guard('web')->user();
        switch ($request->action) {
            case 'switch_dark_light':
                    $uid = $im->id;
                    $mode = ($request->mode == "light")? 0 : 1;
                    User::where('id', $uid)->update([
                        'dark_mode' => $mode
                    ]);
                    $result = [
                        'type' => 'success',
                        'mode' => $request->mode,
                    ];
                    return response()->json($result);
                break;

            default:
                # code...
                break;
        }
    }
}

<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;

class AjaxController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('super');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $im = Auth::guard('admin')->user();
        switch ($request->action) {
            case 'load_coupon_create_edit_form':
                $couponId = $request->coupon_id;
                $formTitle = "Create Coupon";
                $formBtn = "Create Now";
                if($couponId > 0){
                    $formTitle = "Update Coupon";
                    $formBtn = "Update Now";
                }
                $formBody = view('back.coupons.modal_coupon_form_element')->render();
                $result = [
                    'type' => 'success',
                    'form_title' => $formTitle,
                    'form_btn' => $formBtn,
                    'form_body' => $formBody,
                ];
                return response()->json($result);
                break;
            case 'switch_dark_light':
                    $uid = $im->id;
                    $mode = ($request->mode == "light")? 0 : 1;
                    Admin::where('id', $uid)->update([
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

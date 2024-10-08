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
            case 'load_currency_create_edit_form':
                $currencyId = $request->currency_id;
                $formTitle = "Create Currency";
                $formBtn = "Create Now";
                if($currencyId > 0){
                    $formTitle = "Update Currency";
                    $formBtn = "Update Now";
                }
                $formBody = view('back.currency.modal_currency_form_element')->render();
                $result = [
                    'type' => 'success',
                    'form_title' => $formTitle,
                    'form_btn' => $formBtn,
                    'form_body' => $formBody,
                ];
                return response()->json($result);
                break;
            case 'load_tax_state_create_edit_form':
                $taxStateId = $request->tax_state_id;
                $formTitle = "Create State Tax";
                $formBtn = "Create Now";
                if($taxStateId > 0){
                    $formTitle = "Update State Tax";
                    $formBtn = "Update Now";
                }
                $formBody = view('back.tax.state.modal_txt_state_form_element')->render();
                $result = [
                    'type' => 'success',
                    'form_title' => $formTitle,
                    'form_btn' => $formBtn,
                    'form_body' => $formBody,
                ];
                return response()->json($result);
                break;
            case 'load_tax_general_create_edit_form':
                $taxGeneralId = $request->tax_general_id;
                $formTitle = "Create General Tax";
                $formBtn = "Create Now";
                if($taxGeneralId > 0){
                    $formTitle = "Update General Tax";
                    $formBtn = "Update Now";
                }
                $formBody = view('back.tax.general.modal_txt_general_form_element')->render();
                $result = [
                    'type' => 'success',
                    'form_title' => $formTitle,
                    'form_btn' => $formBtn,
                    'form_body' => $formBody,
                ];
                return response()->json($result);
                break;
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

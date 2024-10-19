<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Setting;

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
            case 'save_update_data':
                $targetForm = $request->target_form;
                $targetMethod = $targetForm . 'Input';
                if (method_exists($this, $targetMethod)) {
                    $result = $this->$targetMethod($request);
                } else {
                    $result = [
                        'type' => 'error',
                        'msg' => __('super.method_not_exists')
                    ];
                }
                return response()->json($result);
                break;
            case 'load_currency_create_edit_form':
                $currencyId = $request->currency_id;
                $formTitle = __('super.payc_curr_create_currency_tax');
                $formBtn = __('super.payc_curr_create_now');
                if($currencyId > 0){
                    $formTitle = __('super.payc_curr_update_currency_tax');
                    $formBtn = __('super.payc_curr_update_now');
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
                $formTitle = __('super.payc_statet_create_state_tax');
                $formBtn = __('super.payc_statet_create_now');
                if($taxStateId > 0){
                    $formTitle = __('super.payc_statet_update_state_tax');
                    $formBtn = __('super.payc_statet_update_now');
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
                $formTitle = __('super.payc_gt_create_general_tax');
                $formBtn = __('super.payc_gt_create_now');
                if($taxGeneralId > 0){
                    $formTitle = __('super.payc_gt_update_general_tax');
                    $formBtn = __('super.payc_gt_update_now');
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

    private function basicInfoFormInput($request) {
        $result = [
            'type' => 'error',
            'msg' => __('super.something_wrong')
        ];

        $filteredData = $request->except(['action', 'target_form']);
        $uniqueId = 1;

        try {
            $setting = Setting::updateOrCreate(
                ['id' => $uniqueId],
                $filteredData
            );

            if ($setting->wasRecentlyCreated) {
                $result = [
                    'type' => 'success',
                    'msg' => __('super.basic_information')." ".__('super.setting_created'),
                ];
            } else {
                $result = [
                    'type' => 'success',
                    'msg' => __('super.basic_information')." ".__('super.setting_update'),
                ];
            }

            return $result;
        } catch (\Exception $e) {
            return [
                'type' => 'error',
                'msg' => __('super.operation_failed'),
                'error' => $e->getMessage(),
            ];
        }
    }
}

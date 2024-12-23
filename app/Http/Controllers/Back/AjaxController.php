<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Currency;
use App\Models\PaymentSetting;
use App\Models\Setting;
use Yajra\DataTables\Facades\DataTables;

use function PHPSTORM_META\map;

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
            case 'delete_currency_status':
                $currencyId = $request->id;
                Currency::where('id', $currencyId)->delete();
                $result = [
                    'type' => 'success',
                    'msg' => __('super.successfully_deleted')
                ];
                return response()->json($result);
                break;
            case 'update_currency_status':
                $currencyId = $request->id;
                $is_default = $request->is_default;
                Currency::where('id', $currencyId)->update([
                    'is_default' => $is_default
                ]);

                $current_status = __('super.enabled');
                $class_name = "btn-primary";
                if($is_default == 0){
                    $current_status = __('super.disabled');
                    $class_name = "btn-secondary";
                }
                $result = [
                    'type' => 'success',
                    'msg' => __('super.method_not_exists'),
                    'current_status' => $current_status,
                    'class_name' => $class_name
                ];
                return response()->json($result);
                break;
            case 'load_currencies':
                return $this->loadCurrencies($request);
                break;
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

                $currency = false;
                if($currencyId > 0){
                    $currency = Currency::find($currencyId);
                    if(!$currency){
                        return response()->json([
                            'type' => 'error',
                            'msg' => __('super.payc_curr_currency')." ".__('super.not_found'),
                        ]);
                    }
                }

                $formBody = view('back.currency.modal_currency_form_element', compact('currency'))->render();
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
    private function loadCurrencies($request) {
        $currencies = Currency::orderBy('id', 'DESC')->get();
        return DataTables::of($currencies)
        ->addColumn('payc_curr_country', function ($currency) {
            return $currency->country;
        })
        ->addColumn('payc_curr_currency_name', function ($currency) {
            return $currency->currency;
        })
        ->addColumn('payc_curr_currency_code', function ($currency) {
            return $currency->code;
        })
        ->addColumn('payc_curr_currency_sign', function ($currency) {
            return $currency->symbol;
        })
        ->addColumn('payc_curr_thousand_separator', function ($currency) {
            return $currency->thousand_separator;
        })
        ->addColumn('payc_curr_decimal_separator', function ($currency) {
            return $currency->decimal_separator;
        })
        ->addColumn('payc_curr_default', function ($currency) {
            $satusList = '';
            $enable = __('super.enable');
            $enabled = __('super.enabled');
            $disable = __('super.disable');
            $disabled = __('super.disabled');
            $satusList .= '
                <ul class="dropdown-menu" style="" data-currency_id="'.$currency->id.'">
                    <li>
                        <a class="dropdown-item currencyStatus"
                                href="javascript:void(0);"
                                data-is_default="1"
                                data-currency_id="'.$currency->id.'">'.$enable.'</a>
                    </li>
                    <li>
                        <a class="dropdown-item currencyStatus"
                                href="javascript:void(0);"
                                data-is_default="0"
                                data-currency_id="'.$currency->id.'">'.$disable.'</a>
                    </li>
                </ul>
            ';
            $currentStatus = "";
            if($currency->is_default == 1){
                $currentStatus = '
                    <button type="button"
                            class="currencyCurrentStatus_'.$currency->id.' btn btn-sm btn-primary dropdown-toggle rounded-pill"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                        '.$enabled.'
                    </button>
                ';
            } else {
                $currentStatus = '
                    <button type="button"
                        class="currencyCurrentStatus_'.$currency->id.' btn btn-sm btn-secondary dropdown-toggle rounded-pill"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        '.$disabled.'
                    </button>
                ';
            }
            $status = '';
            $status .= '<div class="btn-group">';
            $status .= $satusList;
            $status .= $currentStatus;
            $status .= '</div>';
            return $status;
        })
        ->addColumn('action', function ($currency) {
            $editBtn = '';
            $editBtn .= '
                <a class="modalCurrencyFormBtn btn btn-primary btn-wave waves-effect waves-light"
                    data-bs-effect="effect-scale"
                    data-bs-toggle="modal"
                    data-currency_id="'.$currency->id.'"
                    href="#modalCurrencyForm">
            ';
            $editBtn .= '
                <i class="ri-pencil-line"></i>
            ';
            $editBtn .= '
                </a>
            ';

            $deleteBtn = '';
            $deleteBtn .= '
                <button type="button"
                        class="currencyDelete deleteCurrent_'.$currency->id.' btn btn-danger btn-wave waves-effect waves-light"
                        data-currency_id="'.$currency->id.'"
                        >
                    <i class="ri-delete-bin-6-line"></i>
                </button>
            ';

            return $editBtn . $deleteBtn;
        })
        ->rawColumns([
            'payc_curr_default',
            'action',
        ])
        ->make(true);
    }
    private function basicInfoFormInput($request) {
        $filteredData = $request->except(['action', 'target_form']);
        $uniqueId = 1;
        $msg = __('super.basic_information');
        return $this->updateInsertSettings($msg, $uniqueId, $filteredData);
    }
    private function logoMediaLogoFormInput($request) {
        $file_field_names = [
            'logo_main_light',
            'logo_main_dark',
            'logo_sm_light',
            'logo_sm_dark'
        ];
        $setting = Setting::first();
        $uploadedFiles = uploadFile($request, $file_field_names, $setting);

        $filteredData = $uploadedFiles;
        $uniqueId = 1;
        $msg = __('super.logo_other_media');

        return $this->updateInsertSettings($msg, $uniqueId, $filteredData);
    }
    private function logoMediaFaviconFormInput($request) {
        $file_field_names = [
            'favicon'
        ];
        $setting = Setting::first();
        $uploadedFiles = uploadFile($request, $file_field_names, $setting);

        $filteredData = $uploadedFiles;
        $uniqueId = 1;
        $msg = __('super.logo_other_media');

        return $this->updateInsertSettings($msg, $uniqueId, $filteredData);
    }
    private function logoMediaLoaderFormInput($request) {
        $file_field_names = [
            'loader'
        ];
        $setting = Setting::first();
        $uploadedFiles = uploadFile($request, $file_field_names, $setting);

        $uploadedFiles['is_loader'] = $request->is_loader;
        $filteredData = $uploadedFiles;
        $uniqueId = 1;
        $msg = __('super.logo_other_media');

        return $this->updateInsertSettings($msg, $uniqueId, $filteredData);
    }

    private function seoFormInput($request) {
        $keywordsArray = json_decode($request->meta_keywords, true);
        $meta_keywords = array_map(function($item) {
            return $item['value'];
        }, $keywordsArray);
        $request->meta_keywords = implode(',', $meta_keywords);

        $filteredData = $request->except(['action', 'target_form']);
        $uniqueId = 1;
        $msg = __('super.search_engine_optimization');

        return $this->updateInsertSettings($msg, $uniqueId, $filteredData);
    }
    private function socialLoginFBFormInput($request){
        $filteredData = $request->except(['action', 'target_form']);
        $uniqueId = 1;
        $msg = __('super.social_login_only');
        return $this->updateInsertSettings($msg, $uniqueId, $filteredData);
    }
    private function socialLoginGFormInput($request){
        $filteredData = $request->except(['action', 'target_form']);
        $uniqueId = 1;
        $msg = __('super.social_login_only');
        return $this->updateInsertSettings($msg, $uniqueId, $filteredData);
    }
    private function emailSettingsFormInput($request){
        $filteredData = $request->except(['action', 'target_form']);
        $uniqueId = 1;
        $msg = __('super.email_settings_only');
        return $this->updateInsertSettings($msg, $uniqueId, $filteredData);
    }
    private function smsSettingsTwilioFormInput($request){
        $filteredData = $request->except(['action', 'target_form']);
        $uniqueId = 1;
        $msg = __('super.sms_settings');
        return $this->updateInsertSettings($msg, $uniqueId, $filteredData);
    }
    private function apiIntegrationFormInput($request){
        $filteredData = $request->except(['action', 'target_form']);
        $uniqueId = 1;
        $msg = __('super.api_integration');
        return $this->updateInsertSettings($msg, $uniqueId, $filteredData);
    }
    private function cookiesAlertFormInput($request){
        $filteredData = $request->except(['action', 'target_form']);
        $uniqueId = 1;
        $msg = __('super.cookies_alert');
        return $this->updateInsertSettings($msg, $uniqueId, $filteredData);
    }

    private function updateInsertSettings($msg, $uniqueId, $filteredData){
        try {
            $setting = Setting::updateOrCreate(
                ['id' => $uniqueId],
                $filteredData
            );

            if ($setting->wasRecentlyCreated) {
                $result = [
                    'type' => 'success',
                    'msg' => $msg." ".__('super.setting_created'),
                ];
            } else {
                $result = [
                    'type' => 'success',
                    'msg' => $msg." ".__('super.setting_update'),
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

    // Payment Settings
    private function TabCodFormInput($request) {
        $uniqueKeyword = 'cod';
        $msg = __('super.payc_cod_full');
        return $this->initPaymentSettings($request, $msg, $uniqueKeyword);
    }
    private function TabStripeFormInput($request) {
        $uniqueKeyword = 'stripe';
        $msg = __('super.payc_stripe');
        return $this->initPaymentSettings($request, $msg, $uniqueKeyword);
    }
    private function TabPayPalFormInput($request) {
        $uniqueKeyword = 'paypal';
        $msg = __('super.payc_paypal');
        return $this->initPaymentSettings($request, $msg, $uniqueKeyword);
    }
    private function TabMollieFormInput($request) {
        $uniqueKeyword = 'mollie';
        $msg = __('super.payc_mollie');
        return $this->initPaymentSettings($request, $msg, $uniqueKeyword);
    }
    private function TabPaytmFormInput($request) {
        $uniqueKeyword = 'paytm';
        $msg = __('super.payc_paytm');
        return $this->initPaymentSettings($request, $msg, $uniqueKeyword);
    }
    private function TabRazorpayFormInput($request) {
        $uniqueKeyword = 'razorpay';
        $msg = __('super.payc_razorpay');
        return $this->initPaymentSettings($request, $msg, $uniqueKeyword);
    }
    private function TabSSLCommerzFormInput($request) {
        $uniqueKeyword = 'sslcommerz';
        $msg = __('super.payc_ssl_commerz');
        return $this->initPaymentSettings($request, $msg, $uniqueKeyword);
    }
    private function TabMercadopagoFormInput($request) {
        $uniqueKeyword = 'mercadopago';
        $msg = __('super.payc_mercadopago');
        return $this->initPaymentSettings($request, $msg, $uniqueKeyword);
    }
    private function TabAuthorizeNetFormInput($request) {
        $uniqueKeyword = 'authorize';
        $msg = __('super.payc_authorize_net');
        return $this->initPaymentSettings($request, $msg, $uniqueKeyword);
    }
    private function TabPaystackFormInput($request) {
        $uniqueKeyword = 'paystack';
        $msg = __('super.payc_paystack');
        return $this->initPaymentSettings($request, $msg, $uniqueKeyword);
    }
    private function TabFlutterwaveFormInput($request) {
        $uniqueKeyword = 'flutterwave';
        $msg = __('super.payc_flutterwave');
        return $this->initPaymentSettings($request, $msg, $uniqueKeyword);
    }
    private function TabBankTransferFormInput($request) {
        $uniqueKeyword = 'bank';
        $msg = __('super.payc_bank_transfer');
        return $this->initPaymentSettings($request, $msg, $uniqueKeyword);
    }
    private function initPaymentSettings($request, $msg, $uniqueKeyword) {
        $filteredData = $request->except(['action', 'target_form']);

        $file_field_names = [
            'logo_light',
            'logo_dark'
        ];
        $paymentSetting = PaymentSetting::where('unique_keyword', $uniqueKeyword)->first();
        $uploadedFiles = uploadFile($request, $file_field_names, $paymentSetting);

        $filteredData = $request->except(['action', 'target_form', 'logo_light', 'logo_dark']);
        $filteredData = array_merge($filteredData, $uploadedFiles);

        return $this->updatePaymentSettings($msg, $uniqueKeyword, $filteredData);
    }
    private function updatePaymentSettings($msg, $uniqueKeyword, $filteredData){
        try {
            $setting = PaymentSetting::updateOrCreate(
                ['unique_keyword' => $uniqueKeyword],
                $filteredData
            );

            if ($setting->wasRecentlyCreated) {
                $result = [
                    'type' => 'success',
                    'msg' => $msg." ".__('super.payc_setting_created'),
                ];
            } else {
                $result = [
                    'type' => 'success',
                    'msg' => $msg." ".__('super.payc_setting_update'),
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

    private function modalCurrencyFormInput($request) {
        $uniqueId = $request->id;
        $filteredData = $request->except(['id', 'action', 'target_form']);
        $msg = __('super.payc_curr_currency');
        $model = Currency::query();
        return $this->updateInsertCommon($model, $msg, $uniqueId, $filteredData);
    }

    private function updateInsertCommon($model, $msg, $uniqueId, $filteredData) {
        try {
            $targetModel = $model->updateOrCreate(
                ['id' => $uniqueId],
                $filteredData
            );

            if ($targetModel->wasRecentlyCreated) {
                $result = [
                    'type' => 'success',
                    'msg' => $msg." ".__('super.setting_created'),
                ];
            } else {
                $result = [
                    'type' => 'success',
                    'msg' => $msg." ".__('super.setting_update'),
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

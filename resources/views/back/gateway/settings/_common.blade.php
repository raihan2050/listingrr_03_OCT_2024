<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <label for="gatewayStatus{{ $gateway['identity'] }}" class="form-label">@lang('super.payc_gateway_status'):</label>
    <div class="mb-4 d-flex">
        <div class="custom-toggle-switch d-flex align-items-center">
            <input id="gatewayStatus{{ $gateway['identity'] }}"
                    type="checkbox"
                    checked="">
            <label for="gatewayStatus{{ $gateway['identity'] }}"
                    class="label-primary"></label>
        </div>
        <label class="cursor-pointer ms-3" for="gatewayStatus{{ $gateway['identity'] }}">{{ sprintf(__('super.payc_gateway_status_help'), $gateway['title']) }}</label>
    </div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <label for="gatewayStatus{{ $gateway['identity'] }}Title" class="form-label">@lang('super.payc_gateway_name'):</label>
    <input type="text"
            class="form-control"
            id="gatewayStatus{{ $gateway['identity'] }}Title"
            placeholder="@lang('super.payc_gateway_enter_name')">
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <div class="mt-3">
        <label for="gatewayLogo{{ $gateway['identity'] }}" class="form-label">@lang('super.payc_gateway_logo_light')</label>
        <input class="form-control" type="file" id="gatewayLogo{{ $gateway['identity'] }}" style="display: none;">
        <div class="border cursor-pointer d-flex justify-items-center" style="width: 303px; height: 132px; padding: 4px;">
            <div class="d-flex justify-items-center" style="width:293px; height: 122px;">
                <span style="
                    font-size: 16px;
                    line-height: 0px;
                    margin: 40px auto;
                    padding: 0;
                    text-align: center;
                    display: block;
                    font-weight: bold;
                ">@lang('super.payc_gateway_select_logo')</span>
            </div>
        </div>
        <span>@lang('super.payc_gateway_logo_help')</span>
    </div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <div class="mt-3">
        <label for="gatewayLogoDark{{ $gateway['identity'] }}" class="form-label">@lang('super.payc_gateway_logo_dark')</label>
        <input class="form-control" type="file" id="gatewayLogoDark{{ $gateway['identity'] }}" style="display: none;">
        <div class="border cursor-pointer d-flex justify-items-center" style="width: 303px; height: 132px; padding: 4px;">
            <div class="d-flex justify-items-center" style="width:293px; height: 122px;">
                <span style="
                    font-size: 16px;
                    line-height: 0px;
                    margin: 40px auto;
                    padding: 0;
                    text-align: center;
                    display: block;
                    font-weight: bold;
                ">@lang('super.payc_gateway_select_logo')</span>
            </div>
        </div>
        <span>@lang('super.payc_gateway_logo_help')</span>
    </div>
</div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
    <div class="mt-3">
        <label for="gatewayDescription{{ $gateway['identity'] }}" class="form-label">@lang('super.payc_gateway_description')</label>
        @if ($gateway['identity'] == 'TabBankTransfer')
            <div id="gatewayDescription{{ $gateway['identity'] }}"></div>
        @else
            <textarea class="form-control" id="gatewayDescription{{ $gateway['identity'] }}" rows="3"></textarea>
        @endif
    </div>
</div>

<label for="gatewaySendbox{{ $gateway['identity'] }}" class="form-label">@lang('super.payc_gateway_sendbox'):</label>
<div class="mb-4 d-flex">
    <div class="custom-toggle-switch d-flex align-items-center">
        <input id="gatewaySendbox{{ $gateway['identity'] }}"
                type="checkbox"
                checked="">
        <label for="gatewaySendbox{{ $gateway['identity'] }}"
                class="label-primary"></label>
    </div>
    <label class="cursor-pointer ms-3" for="gatewaySendbox{{ $gateway['identity'] }}">{{ sprintf(__('super.payc_gateway_sendbox_help'), $gateway['title']) }}</label>
</div>

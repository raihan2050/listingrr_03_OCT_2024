<label for="gatewaySendbox{{ $gateway->identity }}" class="form-label">@lang('super.payc_gateway_sendbox'):</label>
<div class="mb-4 d-flex">
    @php
        $tmpGatewayIdentity = $gateway->identity;
        $inputSwitchForm = [
            'label' => sprintf(__('super.payc_gateway_sendbox_help'), $gateway->title),
            'name' => 'information[check_sandbox]',
            'class' => 'isSendbox'.$tmpGatewayIdentity
        ];
        $inputSwitchForm['open_class'] = (isset($information['check_sandbox']) && $information['check_sandbox'] == 1)? 'on' : '';
        $currentValue = isset($information['check_sandbox'])? $information['check_sandbox'] : 1;
    @endphp
    {!! inputSwitchHtml($currentValue, $inputSwitchForm) !!}
</div>

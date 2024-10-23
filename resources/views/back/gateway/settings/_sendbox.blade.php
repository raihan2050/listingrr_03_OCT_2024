<label for="gatewaySendbox{{ $gateway['identity'] }}" class="form-label">@lang('super.payc_gateway_sendbox'):</label>
<div class="mb-4 d-flex">
    @php
        $tmpGatewayIdentity = $gateway['identity'];
        $inputSwitchForm = [
            'label' => sprintf(__('super.payc_gateway_sendbox_help'), $gateway['title']),
            'name' => 'check_sandbox['.$tmpGatewayIdentity.']',
            'class' => 'isSendbox'.$tmpGatewayIdentity
        ];
        $inputSwitchForm['open_class'] = (isset($gatewaySetting['check_sandbox']) && $gatewaySetting['check_sandbox'] == 1)? 'on' : '';
        $currentValue = isset($gatewaySetting['check_sandbox'])? $gatewaySetting['check_sandbox'] : 1;
    @endphp
    {!! inputSwitchHtml($currentValue, $inputSwitchForm) !!}
</div>

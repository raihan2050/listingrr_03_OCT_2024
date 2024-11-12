<div class="tab-content mt-2 mt-xl-0">
    @foreach ($gatewayList as $gateway)
        @if (!isset($gateway->unique_keyword))
            @continue
        @endif
        <div class="tab-pane text-muted @if ($gateway->tab_status == 1) active show @endif"
            id="{{ $gateway->href }}"
            role="tabpanel">
                @php
                $targetLeftTabPulse = "noTab";
                $pulseClass = $gateway->identity.'Pulse';
                $targetForm = $gateway->identity.'Form';
                $btnDetails = [
                    'btn_class' => 'btn btn-primary-gradient label-btn label-end mt-3 '.$pulseClass.' submitForm',
                    'targetForm' => $targetForm,
                    'target_left_tab_pulse' => $targetLeftTabPulse,
                    'lavel' => __('super.payc_gateway_save'),
                ];
                $gatewaySetting = isset($gatewayInformation[$gateway->unique_keyword])? $gatewayInformation[$gateway->unique_keyword] : [];
                @endphp
                <form data-target_pulse="{{ $pulseClass }}"
                    data-target_left_tab_pulse="{{ $targetLeftTabPulse }}"
                    class="{{ $targetForm }}">
                        @include('back.gateway.settings.'.$gateway->href)

                        @include('back.gateway.settings._button')
                </form>
        </div>
    @endforeach
</div>

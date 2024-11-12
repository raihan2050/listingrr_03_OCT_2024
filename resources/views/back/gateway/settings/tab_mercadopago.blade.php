<div class="row">
    @include('back.gateway.settings._common')

    @php
        $information = $gateway->information;
    @endphp

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="mt-4">
            @include('back.gateway.settings._sendbox')
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayPublicKey{{ $gateway->identity }}" class="form-label">{{ sprintf(__('super.payc_gateway_public_key'), $gateway->title) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayPublicKey{{ $gateway->identity }}"
                    name="information[public_key]"
                    data-is_required="1"
                    @isset($information['public_key'])
                        value="{{ $information['public_key'] }}"
                    @endisset
                    placeholder="{{ sprintf(__('super.payc_gateway_public_key'), $gateway->title) }}">
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayToken{{ $gateway->identity }}" class="form-label">{{ sprintf(__('super.payc_gateway_Token'), $gateway->title) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayToken{{ $gateway->identity }}"
                    name="information[token]"
                    data-is_required="1"
                    @isset($information['token'])
                        value="{{ $information['token'] }}"
                    @endisset
                    placeholder="{{ sprintf(__('super.payc_gateway_Token'), $gateway->title) }}">
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
    </div>
</div>

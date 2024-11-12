<div class="row">
    @include('back.gateway.settings._common')

    @php
        $information = $gateway->information;
    @endphp

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
            <label for="gatewaySecretKey{{ $gateway->identity }}" class="form-label">{{ sprintf(__('super.payc_gateway_secret_key'), $gateway->title) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewaySecretKey{{ $gateway->identity }}"
                    name="information[secret_key]"
                    data-is_required="1"
                    @isset($information['secret_key'])
                        value="{{ $information['secret_key'] }}"
                    @endisset
                    placeholder="{{ sprintf(__('super.payc_gateway_secret_key'), $gateway->title) }}">
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayText{{ $gateway->identity }}" class="form-label">{{ sprintf(__('super.payc_gateway_text'), $gateway->title) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayText{{ $gateway->identity }}"
                    name="information[text]"
                    data-is_required="1"
                    @isset($information['text'])
                        value="{{ $information['text'] }}"
                    @endisset
                    placeholder="{{ sprintf(__('super.payc_gateway_text'), $gateway->title) }}">
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
    </div>
</div>

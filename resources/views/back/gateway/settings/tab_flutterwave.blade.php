<div class="row">
    @include('back.gateway.settings._common')

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayPublicKey{{ $gateway['identity'] }}" class="form-label">{{ sprintf(__('super.payc_gateway_public_key'), $gateway['title']) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayPublicKey{{ $gateway['identity'] }}"
                    placeholder="{{ sprintf(__('super.payc_gateway_public_key'), $gateway['title']) }}">
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewaySecretKey{{ $gateway['identity'] }}" class="form-label">{{ sprintf(__('super.payc_gateway_secret_key'), $gateway['title']) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewaySecretKey{{ $gateway['identity'] }}"
                    placeholder="{{ sprintf(__('super.payc_gateway_secret_key'), $gateway['title']) }}">
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayText{{ $gateway['identity'] }}" class="form-label">{{ sprintf(__('super.payc_gateway_text'), $gateway['title']) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayText{{ $gateway['identity'] }}"
                    placeholder="{{ sprintf(__('super.payc_gateway_text'), $gateway['title']) }}">
        </div>
    </div>
</div>

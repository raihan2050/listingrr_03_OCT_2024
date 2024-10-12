<div class="row">
    @include('back.gateway.settings._common')

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayKey{{ $gateway['identity'] }}" class="form-label">{{ sprintf(__('super.payc_gateway_key'), $gateway['title']) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayKey{{ $gateway['identity'] }}"
                    placeholder="{{ sprintf(__('super.payc_gateway_key'), $gateway['title']) }}">
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayEmail{{ $gateway['identity'] }}" class="form-label">{{ sprintf(__('super.payc_gateway_email'), $gateway['title']) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayEmail{{ $gateway['identity'] }}"
                    placeholder="{{ sprintf(__('super.payc_gateway_email'), $gateway['title']) }}">
        </div>
    </div>
</div>

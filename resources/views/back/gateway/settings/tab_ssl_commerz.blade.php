<div class="row">
    @include('back.gateway.settings._common')

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="mt-4">
            @include('back.gateway.settings._sendbox')
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayStoreId{{ $gateway['identity'] }}" class="form-label">{{ sprintf(__('super.payc_gateway_store_id'), $gateway['title']) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayStoreId{{ $gateway['identity'] }}"
                    placeholder="{{ sprintf(__('super.payc_gateway_store_id'), $gateway['title']) }}">
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayStoreSecret{{ $gateway['identity'] }}" class="form-label">{{ sprintf(__('super.payc_gateway_store_secret'), $gateway['title']) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayStoreSecret{{ $gateway['identity'] }}"
                    placeholder="{{ sprintf(__('super.payc_gateway_store_secret'), $gateway['title']) }}">
        </div>
    </div>
</div>

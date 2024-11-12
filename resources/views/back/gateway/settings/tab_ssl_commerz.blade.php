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
            <label for="gatewayStoreId{{ $gateway->identity }}" class="form-label">{{ sprintf(__('super.payc_gateway_store_id'), $gateway->title) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayStoreId{{ $gateway->identity }}"
                    name="information[store_id]"
                    data-is_required="1"
                    @isset($information['store_id'])
                        value="{{ $information['store_id'] }}"
                    @endisset
                    placeholder="{{ sprintf(__('super.payc_gateway_store_id'), $gateway->title) }}">
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayStoreSecret{{ $gateway->identity }}" class="form-label">{{ sprintf(__('super.payc_gateway_store_secret'), $gateway->title) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayStoreSecret{{ $gateway->identity }}"
                    name="information[store_password]"
                    data-is_required="1"
                    @isset($information['store_password'])
                        value="{{ $information['store_password'] }}"
                    @endisset
                    placeholder="{{ sprintf(__('super.payc_gateway_store_secret'), $gateway->title) }}">
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
    </div>
</div>

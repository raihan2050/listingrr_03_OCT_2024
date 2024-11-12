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
            <label for="gatewayClientId{{ $gateway->identity }}" class="form-label">{{ sprintf(__('super.payc_gateway_client_id'), $gateway->title) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayClientId{{ $gateway->identity }}"
                    name="information[client_id]"
                    data-is_required="1"
                    @isset($information['client_id'])
                        value="{{ $information['client_id'] }}"
                    @endisset
                    placeholder="{{ sprintf(__('super.payc_gateway_client_id'), $gateway->title) }}">
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayClientSecret{{ $gateway->identity }}" class="form-label">{{ sprintf(__('super.payc_gateway_client_secret'), $gateway->title) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayClientSecret{{ $gateway->identity }}"
                    name="information[client_secret]"
                    data-is_required="1"
                    @isset($information['client_secret'])
                        value="{{ $information['client_secret'] }}"
                    @endisset
                    placeholder="{{ sprintf(__('super.payc_gateway_client_secret'), $gateway->title) }}">
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
    </div>
</div>

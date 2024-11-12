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
            <label for="gatewayKey{{ $gateway->identity }}" class="form-label">{{ sprintf(__('super.payc_gateway_key'), $gateway->title) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayKey{{ $gateway->identity }}"
                    name="information[key]"
                    data-is_required="1"
                    @isset($information['key'])
                        value="{{ $information['key'] }}"
                    @endisset
                    placeholder="{{ sprintf(__('super.payc_gateway_key'), $gateway->title) }}">
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewaySecret{{ $gateway->identity }}" class="form-label">{{ sprintf(__('super.payc_gateway_secret'), $gateway->title) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewaySecret{{ $gateway->identity }}"
                    name="information[secret]"
                    data-is_required="1"
                    @isset($information['secret'])
                        value="{{ $information['secret'] }}"
                    @endisset
                    placeholder="{{ sprintf(__('super.payc_gateway_secret'), $gateway->title) }}">
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
    </div>
</div>

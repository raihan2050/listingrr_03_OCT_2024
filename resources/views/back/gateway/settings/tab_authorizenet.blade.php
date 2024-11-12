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
            <label for="gatewayLoginId{{ $gateway->identity }}" class="form-label">{{ sprintf(__('super.payc_gateway_login_id'), $gateway->title) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayLoginId{{ $gateway->identity }}"
                    name="information[login_id]"
                    data-is_required="1"
                    @isset($information['login_id'])
                        value="{{ $information['login_id'] }}"
                    @endisset
                    placeholder="{{ sprintf(__('super.payc_gateway_login_id'), $gateway->title) }}">
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayTxnKey{{ $gateway->identity }}" class="form-label">{{ sprintf(__('super.payc_gateway_txn_key'), $gateway->title) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayTxnKey{{ $gateway->identity }}"
                    name="information[txn_key]"
                    data-is_required="1"
                    @isset($information['txn_key'])
                        value="{{ $information['txn_key'] }}"
                    @endisset
                    placeholder="{{ sprintf(__('super.payc_gateway_txn_key'), $gateway->title) }}">
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
    </div>
</div>

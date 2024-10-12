<div class="row">
    @include('back.gateway.settings._common')

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="mt-4">
            @include('back.gateway.settings._sendbox')
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayLoginId{{ $gateway['identity'] }}" class="form-label">{{ sprintf(__('super.payc_gateway_login_id'), $gateway['title']) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayLoginId{{ $gateway['identity'] }}"
                    placeholder="{{ sprintf(__('super.payc_gateway_login_id'), $gateway['title']) }}">
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayTxnKey{{ $gateway['identity'] }}" class="form-label">{{ sprintf(__('super.payc_gateway_txn_key'), $gateway['title']) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayTxnKey{{ $gateway['identity'] }}"
                    placeholder="{{ sprintf(__('super.payc_gateway_txn_key'), $gateway['title']) }}">
        </div>
    </div>
</div>

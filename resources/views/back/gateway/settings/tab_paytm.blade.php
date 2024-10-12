<div class="row">
    @include('back.gateway.settings._common')

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="mt-4">
            @include('back.gateway.settings._sendbox')
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayMercent{{ $gateway['identity'] }}" class="form-label">{{ sprintf(__('super.payc_gateway_mercent'), $gateway['title']) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayMercent{{ $gateway['identity'] }}"
                    placeholder="{{ sprintf(__('super.payc_gateway_mercent'), $gateway['title']) }}">
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayClientSecret{{ $gateway['identity'] }}" class="form-label">{{ sprintf(__('super.payc_gateway_client_secret'), $gateway['title']) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayClientSecret{{ $gateway['identity'] }}"
                    placeholder="{{ sprintf(__('super.payc_gateway_client_secret'), $gateway['title']) }}">
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayWebsite{{ $gateway['identity'] }}" class="form-label">{{ sprintf(__('super.payc_gateway_website'), $gateway['title']) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayWebsite{{ $gateway['identity'] }}"
                    placeholder="{{ sprintf(__('super.payc_gateway_website'), $gateway['title']) }}">
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="mt-3">
            <label for="gatewayIndustry{{ $gateway['identity'] }}" class="form-label">{{ sprintf(__('super.payc_gateway_industry'), $gateway['title']) }}:</label>
            <input type="text"
                    class="form-control"
                    id="gatewayIndustry{{ $gateway['identity'] }}"
                    placeholder="{{ sprintf(__('super.payc_gateway_industry'), $gateway['title']) }}">
        </div>
    </div>
</div>

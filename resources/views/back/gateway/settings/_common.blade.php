<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <label for="gatewayStatus{{ $gateway->identity }}" class="form-label">@lang('super.payc_gateway_status'):</label>
    <div class="mb-4 d-flex">
        <div class="custom-toggle-switch d-flex align-items-center">
            <input type="hidden" name="status" value="disable">
            <input id="gatewayStatus{{ $gateway->identity }}"
                    type="checkbox"
                    name="status"
                    value="enable"
                    @if ($gateway->status == "enable")
                        checked
                    @elseif ($gateway->status == "disable")

                    @else
                        checked
                    @endif
                    >
            <label for="gatewayStatus{{ $gateway->identity }}"
                    class="label-primary"></label>
        </div>
        <label class="cursor-pointer ms-3" for="gatewayStatus{{ $gateway->identity }}">{{ sprintf(__('super.payc_gateway_status_help'), $gateway->title) }}</label>
    </div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <label for="gatewayStatus{{ $gateway->identity }}Title" class="form-label">@lang('super.payc_gateway_name'):</label>
    <input type="text"
            class="form-control"
            id="gatewayStatus{{ $gateway->identity }}Title"
            autocomplete="off"
            name="name"
            data-is_required="1"
            @isset($gateway->name)
                value="{{ $gateway->name }}"
            @endisset
            placeholder="@lang('super.payc_gateway_enter_name')">
    <span class="error-message" style="color: red; display: none;"></span>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <div class="mt-3">
        @php
            $inputFileDetails = [
                'file_id' => 'gatewayLogo'.$gateway->identity,
                'field_label' => __('super.payc_gateway_logo_light'),
                'name' => 'logo_light',
                'width_parent' => 303,
                'width' => 293,
                'height_parent' => 132,
                'height' => 122,
                'parent_bg' => 'bg-light',
                'img_size_help' => __('super.payc_gateway_logo_help'),
                'preview_bg_txt' => __('super.payc_gateway_select_logo'),
                'no_img_css' => "
                    font-size: 16px;
                    line-height: 0px;
                    margin: 40px auto;
                    padding: 0;
                    text-align: center;
                    display: block;
                    font-weight: bold;
                    ",
            ];
        @endphp
        {!! getImgInputPreviewHtml($gateway, $inputFileDetails) !!}
    </div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <div class="mt-3">
        @php
            $inputFileDetails = [
                'file_id' => 'gatewayLogoDark'.$gateway->identity,
                'field_label' => __('super.payc_gateway_logo_dark'),
                'name' => 'logo_dark',
                'width_parent' => 303,
                'width' => 293,
                'height_parent' => 132,
                'height' => 122,
                'parent_bg' => 'bg-dark',
                'img_size_help' => __('super.payc_gateway_logo_help'),
                'preview_bg_txt' => __('super.payc_gateway_select_logo'),
                'no_img_css' => "
                    font-size: 16px;
                    line-height: 0px;
                    margin: 40px auto;
                    padding: 0;
                    text-align: center;
                    display: block;
                    font-weight: bold;
                    ",
            ];
        @endphp
        {!! getImgInputPreviewHtml($gateway, $inputFileDetails) !!}
    </div>
</div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
    <div class="mt-3">
        <label for="gatewayDescription{{ $gateway->identity }}" class="form-label">@lang('super.payc_gateway_description')</label>
        @php
            $tmpDesc = "";
            if(isset($gateway->description)){
                $tmpDesc = $gateway->description;
            }
        @endphp
        {{-- @if ($gateway->identity == 'TabBankTransfer')
            <div id="gatewayDescription{{ $gateway->identity }}">{!! $tmpDesc !!}</div>
            <span class="error-message" style="color: red; display: none;"></span>
        @else --}}
            <textarea class="form-control"
                        id="gatewayDescription{{ $gateway->identity }}"
                        rows="3"
                        name="description"
                        autocomplete="off"
                        name="description"
                        data-is_required="1"
                        >{!! $tmpDesc !!}</textarea>
            <span class="error-message" style="color: red; display: none;"></span>
        {{-- @endif --}}
    </div>
</div>

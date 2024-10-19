<div class="row gy-5">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="faviconUploader" class="form-label">@lang('super.favicon_icon')</label>
            <input class="form-control"
                    type="file"
                    id="faviconUploader"
                    name="favicon"
                    style="display: none;">
            <div class="border cursor-pointer d-flex justify-items-center" style="width: 50px; height: 50px; padding: 4px;">
                <div class="d-flex justify-items-center" style="width: 40px; height: 40px;">
                    <span style="
                            font-size: 9px;
                            line-height: 15px;
                            margin: 7px 0;
                            padding: 0;
                            text-align: center;
                            display: block;
                            font-weight: bold;
                        ">@lang('super.select_favicon')</span>
                    {{-- <img src="{{ asset('build/assets/images/brand/favicon.ico') }}"
                        style="width: 40px; height: 40px;"> --}}
                </div>
            </div>
            <span>@lang('super.favicon_w_h')</span>
        </div>
    </div>
    <div class="col-md-6"></div>
</div>

<div class="row gy-3">
    <div class="col-md-4">
        <div class="mb-3">
            <label for="loaderUploader" class="form-label">@lang('super.loader_image')</label>
            <input class="form-control"
                    type="file"
                    id="loaderUploader"
                    name="loader"
                    style="display: none;">
            <div class="border cursor-pointer d-flex justify-items-center" style="width: 80px; height: 80px; padding: 4px;">
                <div class="d-flex justify-items-center" style="width: 70px; height: 70px;">
                    <span style="
                            font-size: 9px;
                            line-height: 15px;
                            margin: 7px auto;
                            padding: 0;
                            text-align: center;
                            display: block;
                            font-weight: bold;
                        ">@lang('super.select_loader')</span>
                    {{-- <img src="{{ asset('build/assets/images/svgs/loader.svg') }}"
                        style="width: 70px; height: 70px;"> --}}
                </div>
            </div>
        </div>
    </div>
    @php
        $is_loader = 0;
        $is_loader_class = '';
        if(isset($setting->is_loader)){
            $is_loader = ($setting->is_loader == 1)? 1 : 0;
            $is_loader_class = ($setting->is_loader == 1)? 'on' : '';
        }
    @endphp
    <div class="col-md-4">
        <div class="mb-3">
            <input type="hidden" name="is_loader" class="siteLoaderStatus"
                value="{{ $is_loader }}"
                >
            <label for="siteLoaderStatus">@lang('super.loader_status')</label>
            <div class="toggle switchToggleOne mb-3 {{ $is_loader_class }}"
                    data-target_class="siteLoaderStatus"
                    id="siteLoaderStatus">
                <span></span>
            </div>
        </div>
    </div>

    <div class="col-md-4"></div>
</div>

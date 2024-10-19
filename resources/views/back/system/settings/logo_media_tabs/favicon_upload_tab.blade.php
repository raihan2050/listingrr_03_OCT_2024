<div class="row gy-5">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="faviconUploader" class="form-label">@lang('super.favicon_icon')</label>
            <input class="form-control imgUploaderInput"
                    type="file"
                    id="faviconUploader"
                    name="favicon"
                    data-target_preview="faviconUploaderPreview"
                    style="display: none;">
            <div class="border cursor-pointer d-flex justify-items-center clickToUpload"
                data-target_file_input="faviconUploader"
                style="width: 50px; height: 50px; padding: 4px;">
                <div class="d-flex justify-items-center"
                    id="faviconUploaderPreview"
                    style="width: 40px; height: 40px;">
                    @php
                        $logo_media_img = "";
                        if(isset($setting->favicon)){
                            $logo_media_img = asset('storage/'.$setting->favicon);
                        }
                    @endphp
                    @if($logo_media_img == "")
                        <span style="
                                font-size: 9px;
                                line-height: 15px;
                                margin: 7px 0;
                                padding: 0;
                                text-align: center;
                                display: block;
                                font-weight: bold;
                            ">@lang('super.select_favicon')</span>
                    @endif
                    <img src="{{ $logo_media_img }}" style="width: 40px; height: 40px; @if($logo_media_img == "") display:none; @endif">
                </div>
            </div>
            <span>@lang('super.favicon_w_h')</span>
        </div>
    </div>
    <div class="col-md-6"></div>
</div>

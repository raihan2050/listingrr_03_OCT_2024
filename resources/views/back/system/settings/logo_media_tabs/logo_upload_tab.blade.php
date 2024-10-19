<div class="row gy-5">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="mainLogoLight" class="form-label">@lang('super.main_logo_light')</label>
            <input class="form-control imgUploaderInput"
                    type="file"
                    id="mainLogoLight"
                    name="logo_main_light"
                    data-target_preview="mainLogoLightPreview"
                    style="display: none;">
            <div class="border cursor-pointer d-flex justify-items-center clickToUpload"
                    data-target_file_input="mainLogoLight"
                    style="width: 146px; height: 50px; padding: 4px;">
                <div class="d-flex justify-items-center"
                        id="mainLogoLightPreview"
                        style="width: 136px; height: 40px;">
                    @php
                        $logo_media_img = "";
                        if(isset($setting->logo_main_light)){
                            $logo_media_img = asset('storage/'.$setting->logo_main_light);
                        }
                    @endphp
                    @if($logo_media_img == "")
                        <span style="
                            font-size: 16px;
                            line-height: 0px;
                            margin: 21px auto;
                            padding: 0;
                            text-align: center;
                            display: block;
                            font-weight: bold;
                        ">@lang('super.select_logo')</span>
                    @endif
                    <img src="{{ $logo_media_img }}" style="width: 136px; height: 40px; @if($logo_media_img == "") display:none; @endif">
                </div>
            </div>
            <span>@lang('super.main_logo_w_h')</span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="mainLogoDark" class="form-label">@lang('super.main_logo_dark')</label>
            <input class="form-control imgUploaderInput"
                    type="file"
                    id="mainLogoDark"
                    name="logo_main_dark"
                    data-target_preview="mainLogoDarkPreview"
                    style="display: none;">
            <div class="border cursor-pointer bg-dark d-flex justify-items-center clickToUpload"
                data-target_file_input="mainLogoDark"
                style="width: 146px; height: 50px; padding: 4px;">
                <div class="d-flex justify-items-center"
                        id="mainLogoDarkPreview"
                        style="width: 136px; height: 40px;">
                    @php
                        $logo_media_img = "";
                        if(isset($setting->logo_main_dark)){
                            $logo_media_img = asset('storage/'.$setting->logo_main_dark);
                        }
                    @endphp
                    @if($logo_media_img == "")
                        <span style="
                            font-size: 16px;
                            line-height: 0px;
                            margin: 21px auto;
                            padding: 0;
                            text-align: center;
                            display: block;
                            font-weight: bold;
                            color: #ffffff;
                        ">@lang('super.select_logo')</span>
                    @endif
                    <img src="{{ $logo_media_img }}" style="width: 136px; height: 40px; @if($logo_media_img == "") display:none; @endif">
                </div>
            </div>
            <span>@lang('super.main_logo_w_h')</span>
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
            <label for="smallLogoLight" class="form-label">@lang('super.small_logo_light')</label>
            <input class="form-control imgUploaderInput"
                    type="file"
                    id="smallLogoLight"
                    name="logo_sm_light"
                    data-target_preview="smallLogoLightPreview"
                    style="display: none;">
            <div class="border cursor-pointer d-flex justify-items-center clickToUpload"
                data-target_file_input="smallLogoLight"
                style="width: 50px; height: 50px; padding: 4px;">
                <div class="d-flex justify-items-center"
                    id="smallLogoLightPreview"
                    style="width: 40px; height: 40px;">
                    @php
                        $logo_media_img = "";
                        if(isset($setting->logo_sm_light)){
                            $logo_media_img = asset('storage/'.$setting->logo_sm_light);
                        }
                    @endphp
                    @if($logo_media_img == "")
                        <span style="
                            font-size: 10px;
                            line-height: 15px;
                            margin: 7px auto;
                            padding: 0;
                            text-align: center;
                            display: block;
                            font-weight: bold;
                        ">@lang('super.select_logo')</span>
                    @endif
                    <img src="{{ $logo_media_img }}" style="width: 40px; height: 40px; @if($logo_media_img == "") display:none; @endif">
                </div>
            </div>
            <span>@lang('super.small_logo_w_h')</span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="smallLogoDark" class="form-label">@lang('super.small_logo_dark')</label>
            <input class="form-control imgUploaderInput"
                    type="file"
                    id="smallLogoDark"
                    name="logo_sm_dark"
                    data-target_preview="smallLogoDarkPreview"
                    style="display: none;">
            <div class="border cursor-pointer bg-dark d-flex justify-items-center clickToUpload"
                data-target_file_input="smallLogoDark"
                style="width: 50px; height: 50px; padding: 4px;">
                <div class="d-flex justify-items-center"
                    id="smallLogoDarkPreview"
                    style="width: 40px; height: 40px;">
                    @php
                        $logo_media_img = "";
                        if(isset($setting->logo_sm_dark)){
                            $logo_media_img = asset('storage/'.$setting->logo_sm_dark);
                        }
                    @endphp
                    @if($logo_media_img == "")
                        <span style="
                            font-size: 10px;
                            line-height: 15px;
                            margin: 7px auto;
                            padding: 0;
                            text-align: center;
                            display: block;
                            font-weight: bold;
                            color: #ffffff;
                        ">@lang('super.select_logo')</span>
                    @endif
                    <img src="{{ $logo_media_img }}" style="width: 40px; height: 40px; @if($logo_media_img == "") display:none; @endif">
                </div>
            </div>
            <span>@lang('super.small_logo_w_h')</span>
        </div>
    </div>
</div>

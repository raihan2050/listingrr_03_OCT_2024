<div class="row gy-5">
    <div class="col-md-6">
        <div class="mb-3">
            @php
                $inputFileDetails = [
                    'file_id' => 'mainLogoLight',
                    'field_label' => __('super.main_logo_light'),
                    'name' => 'logo_main_light',
                    'width_parent' => 146,
                    'width' => 136,
                    'height_parent' => 50,
                    'height' => 40,
                    'parent_bg' => 'bg-light',
                    'img_size_help' => __('super.main_logo_w_h'),
                    'no_img_css' => "
                            font-size: 16px;
                            line-height: 0px;
                            margin: 21px auto;
                            padding: 0;
                            text-align: center;
                            display: block;
                            font-weight: bold;
                        ",
                ];
            @endphp
            {!! getImgInputPreviewHtml($setting, $inputFileDetails) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            @php
                $inputFileDetails = [
                    'file_id' => 'mainLogoDark',
                    'field_label' => __('super.main_logo_dark'),
                    'name' => 'logo_main_dark',
                    'width_parent' => 146,
                    'width' => 136,
                    'height_parent' => 50,
                    'height' => 40,
                    'parent_bg' => 'bg-dark',
                    'img_size_help' => __('super.main_logo_w_h'),
                    'no_img_css' => "
                            font-size: 16px;
                            line-height: 0px;
                            margin: 21px auto;
                            padding: 0;
                            text-align: center;
                            display: block;
                            font-weight: bold;
                            color: #ffffff;
                        ",
                ];
            @endphp
            {!! getImgInputPreviewHtml($setting, $inputFileDetails) !!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
            @php
                $inputFileDetails = [
                    'file_id' => 'smallLogoLight',
                    'field_label' => __('super.small_logo_light'),
                    'name' => 'logo_sm_light',
                    'width_parent' => 50,
                    'width' => 40,
                    'height_parent' => 50,
                    'height' => 40,
                    'parent_bg' => 'bg-light',
                    'img_size_help' => __('super.small_logo_w_h'),
                    'no_img_css' => "
                            font-size: 10px;
                            line-height: 15px;
                            margin: 7px auto;
                            padding: 0;
                            text-align: center;
                            display: block;
                            font-weight: bold;
                        ",
                ];
            @endphp
            {!! getImgInputPreviewHtml($setting, $inputFileDetails) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            @php
                $inputFileDetails = [
                    'file_id' => 'smallLogoDark',
                    'field_label' => __('super.small_logo_dark'),
                    'name' => 'logo_sm_dark',
                    'width_parent' => 50,
                    'width' => 40,
                    'height_parent' => 50,
                    'height' => 40,
                    'parent_bg' => 'bg-dark',
                    'img_size_help' => __('super.small_logo_w_h'),
                    'no_img_css' => "
                            font-size: 10px;
                            line-height: 15px;
                            margin: 7px auto;
                            padding: 0;
                            text-align: center;
                            display: block;
                            font-weight: bold;
                            color: #ffffff;
                        ",
                ];
            @endphp
            {!! getImgInputPreviewHtml($setting, $inputFileDetails) !!}
        </div>
    </div>
</div>

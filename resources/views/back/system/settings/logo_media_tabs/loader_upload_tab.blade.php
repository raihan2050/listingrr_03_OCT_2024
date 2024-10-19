<div class="row gy-3">
    <div class="col-md-4">
        <div class="mb-3">
            @php
                $inputFileDetails = [
                    'file_id' => 'loaderUploader',
                    'field_label' => __('super.loader_image'),
                    'name' => 'loader',
                    'width_parent' => 80,
                    'width' => 70,
                    'height_parent' => 80,
                    'height' => 70,
                    'parent_bg' => 'bg-light',
                    'img_size_help' => '',
                    'preview_bg_txt' => __('super.select_loader'),
                    'no_img_css' => "
                            font-size: 9px;
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
            @php
                $inputSwitchForm = [
                    'label' => __('super.loader_status'),
                    'name' => 'is_loader',
                    'class' => 'siteLoaderStatus'
                ];
            @endphp
            {!! inputSwitchHtml($setting, $inputSwitchForm) !!}
        </div>
    </div>

    <div class="col-md-4"></div>
</div>

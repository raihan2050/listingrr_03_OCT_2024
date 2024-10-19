<div class="row gy-5">
    <div class="col-md-6">
        <div class="mb-3">
            @php
                $inputFileDetails = [
                    'file_id' => 'faviconUploader',
                    'field_label' => __('super.favicon_icon'),
                    'name' => 'favicon',
                    'width_parent' => 50,
                    'width' => 40,
                    'height_parent' => 50,
                    'height' => 40,
                    'parent_bg' => 'bg-light',
                    'img_size_help' => __('super.favicon_w_h'),
                    'preview_bg_txt' => __('super.select_favicon'),
                    'no_img_css' => "
                            font-size: 9px;
                            line-height: 15px;
                            margin: 7px 0;
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
    <div class="col-md-6"></div>
</div>

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

if (!function_exists('inputSwitchHtml')) {
    function inputSwitchHtml($row, $inputFileDetails) {
        $name = $inputFileDetails['name'];
        $class_name = $inputFileDetails['class'];
        $label_title = $inputFileDetails['label'];
        $current_value = 0;
        $open_class = '';
        if(isset($row->$name)){
            $current_value = ($row->$name == 1)? 1 : 0;
            $open_class = ($row->$name == 1)? 'on' : '';
        } else {
            $current_value = $row;
            $open_class = isset($inputFileDetails['open_class'])? $inputFileDetails['open_class'] : '';
        }
        return '
            <input type="hidden"
                    name="'.$name.'"
                    class="'.$class_name.'"
                    value="'.$current_value.'"
                >
            <label for="'.$class_name.'"
                    class="form-label">'.$label_title.'
            </label>
            <div class="toggle switchToggleOne mb-3 '.$open_class.'"
                data-target_class="'.$class_name.'"
                id="'.$class_name.'">
                <span></span>
            </div>
        ';
    }
}

if (!function_exists('getImgInputPreviewHtml')) {
    function getImgInputPreviewHtml($row, $inputFileDetails) {
        return '
            <label for="' . htmlspecialchars($inputFileDetails['file_id']) . '" class="form-label">' . htmlspecialchars($inputFileDetails['field_label']) . '</label>
            <input class="form-control imgUploaderInput"
                type="file"
                id="' . htmlspecialchars($inputFileDetails['file_id']) . '"
                name="' . htmlspecialchars($inputFileDetails['name']) . '"
                data-target_preview="' . htmlspecialchars($inputFileDetails['file_id']) . 'Preview"
                style="display: none;">
            <div class="border cursor-pointer d-flex justify-items-center '.$inputFileDetails['parent_bg'].' clickToUpload"
                data-target_file_input="' . htmlspecialchars($inputFileDetails['file_id']) . '"
                style="width: ' . (int)$inputFileDetails['width_parent'] . 'px; height: ' . (int)$inputFileDetails['height_parent'] . 'px; padding: 4px;">
                <div class="d-flex justify-items-center"
                    id="' . htmlspecialchars($inputFileDetails['file_id']) . 'Preview"
                    style="width: ' . (int)$inputFileDetails['width'] . 'px; height: ' . (int)$inputFileDetails['height'] . 'px;">
                    ' . (isset($row->{$inputFileDetails['name']}) ? '
                        <img src="' . asset('storage/' . $row->{$inputFileDetails['name']}) . '"
                            style="width: ' . (int)$inputFileDetails['width'] . 'px; height: ' . (int)$inputFileDetails['height'] . 'px;">
                    ' : '
                        <span style="' . htmlspecialchars($inputFileDetails['no_img_css']) . '">' . $inputFileDetails['preview_bg_txt'] . '</span>
                        <img src=""
                            style="width: ' . (int)$inputFileDetails['width'] . 'px; height: ' . (int)$inputFileDetails['height'] . 'px; display: none;">
                    ') . '
                </div>
            </div>
            <span>' . $inputFileDetails['img_size_help'] . '</span>
        ';
    }
}

if (!function_exists('getCurrentLang')) {
    function getCurrentLang()
    {
        return Config::get('app.locale');
    }
}

if (!function_exists('isSuperAdmin')) {
    function isSuperAdmin()
    {
        $adminUser = Auth::guard('admin')->user();
        return $adminUser && $adminUser->is_admin === 1;
    }
}

if (!function_exists('getSuperUser')) {
    static $superUserDetails = null;

    function getSuperUser()
    {
        global $superUserDetails;

        if ($superUserDetails === null) {
            $superUserDetails = Auth::guard('admin')->user();
        }

        return $superUserDetails;
    }
}

if (!function_exists('getUserDetails')) {
    static $userDetails = null;

    function getUserDetails()
    {
        global $userDetails;

        if ($userDetails === null) {
            $userDetails = Auth::user();
        }

        return $userDetails;
    }
}

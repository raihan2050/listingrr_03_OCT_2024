<button type="button" class="{{ $btnDetails['btn_class'] }}"
    data-targetForm="{{ $btnDetails['targetForm'] }}"
    data-target_left_tab_pulse="{{ $btnDetails['target_left_tab_pulse'] }}">
    {{ $btnDetails['lavel'] }}
    <span class="btnSubmitIcon">
        <i class="ri-save-line label-btn-icon ms-2"></i>
    </span>
    <span class="label-btn-icon ms-2 btnSubmitLoader" style="display: none;">
        <span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span>
    </span>
</button>

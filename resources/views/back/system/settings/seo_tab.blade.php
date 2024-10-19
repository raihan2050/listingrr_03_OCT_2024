<form data-target_pulse="seoPulse" class="seoForm">
    <div class="row gy-4">
        <div class="col-12">
            <label for="metaKeywords">@lang('super.site_meta_keywords')</label>
            <input type="hidden"
                    class="form-control"
                    id="metaKeywords"
                    data-is_required="1"
                    name="meta_keywords"
                    @isset($setting->meta_keywords)
                        value="{{ $setting->meta_keywords }}"
                    @endisset
                    placeholder="@lang('super.site_meta_keywords_help')">
            <span class="error-message" style="color: red; display: none;"></span>
        </div>
        @php
            $meta_description = "";
            if(isset($setting->meta_description)) {
                $meta_description = $setting->meta_description;
            }
        @endphp
        <div class="col-12">
            <label for="metaDescription">@lang('super.site_meta_description')</label>
            <textarea id="metaDescription"
                class="form-control"
                rows="4"
                data-is_required="1"
                name="meta_description"
                placeholder="@lang('super.site_meta_description')"
                aria-label="@lang('super.site_meta_description')">{!! $meta_description !!}</textarea>
            <span class="error-message" style="color: red; display: none;"></span>
        </div>

        <div class="col-12 mt-5 text-align-right">
            <button type="button"
                    class="btn btn-primary-gradient label-btn label-end mt-3 seoPulse submitForm"
                    data-targetForm="seoForm">
                @lang('super.save_site_meta_description')
                <span class="btnSubmitIcon">
                    <i class="ri-save-line label-btn-icon ms-2"></i>
                </span>
                <span class="label-btn-icon ms-2 btnSubmitLoader" style="display: none;">
                    <span class="spinner-grow spinner-grow-sm align-middle" role="status" aria-hidden="true"></span>
                </span>
            </button>
        </div>
    </div>
</form>

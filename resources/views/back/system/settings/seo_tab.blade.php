<form data-target_pulse="seoPulse">
    <div class="row gy-4">
        <div class="col-12">
            <label for="metaKeywords">@lang('super.site_meta_keywords')</label>
            <input type="hidden"
                    class="form-control"
                    id="metaKeywords"
                    placeholder="@lang('super.site_meta_keywords_help')">
        </div>

        <div class="col-12">
            <label for="metaDescription">@lang('super.site_meta_description')</label>
            <textarea id="metaDescription"
                class="form-control"
                rows="4"
                placeholder="@lang('super.site_meta_description')"
                aria-label="@lang('super.site_meta_description')"></textarea>
        </div>

        <div class="col-12 mt-5 text-align-right">
            <button type="button" class="btn btn-primary-gradient label-btn label-end mt-3 seoPulse">
                @lang('super.save_site_meta_description') <i class="ri-save-line label-btn-icon ms-2"></i>
            </button>
        </div>
    </div>
</form>

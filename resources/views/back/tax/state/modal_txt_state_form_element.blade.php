<div class="row gy-4">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <label for="taxStateTitle" class="form-label">@lang('super.payc_statet_tax_title'):</label>
        <input type="text"
                class="form-control"
                id="taxStateTitle"
                placeholder="@lang('super.payc_statet_tax_title')">
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <label for="taxStateDiscountAmount" class="form-label">@lang('super.payc_statet_discount_amount'):</label>
        <div class="input-group mb-3">
            <select class="form-control" id="">
                <option value="">@lang('super.payc_statet_percentage_(%)')</option>
                <option value="">@lang('super.payc_statet_fixed_amount')</option>
            </select>
            <input type="number" class="form-control" aria-label="@lang('super.payc_statet_discount_amount')">
        </div>
    </div>
 </div>

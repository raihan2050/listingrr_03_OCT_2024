<div class="row gy-4">
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        <label for="couponTitle" class="form-label">Coupon Title:</label>
        <input type="text"
                class="form-control"
                id="couponTitle"
                placeholder="Coupon Title">
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        <label for="couponCode" class="form-label">Coupon Code:</label>
        <input type="text"
                class="form-control"
                id="couponCode"
                placeholder="Coupon Code">
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        <label for="couponMaxTime" class="form-label">Number Of Times:</label>
        <input type="number"
                class="form-control"
                id="couponMaxTime"
                placeholder="Number Of Times">
    </div>
    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12">
        <label for="couponMultiTime" class="form-label">User can use multiple times:</label>
        <select name="couponMultiTime" class="form-control">
            <option value="1" selected="">Yes</option>
            <option value="0">No</option>
        </select>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        <label for="couponValidateTill" class="form-label">Validate<br>Till:</label>
        <input type="text"
                class="form-control"
                id="couponValidateTill"
                placeholder="Validate Till">
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div id="applicableForLavel">
            <div>Applicable for user who register between:</div>
            <div id="validateTillResult">03/20/2024 to 04/19/2024(31 Days)</div>
        </div>
        <select name="new_customer" id="applicableFor" class="form-control">
            <option value="1" selected="">Only New Customer</option>
            <option value="2">All Customer</option>
            <option value="3">Target Customer</option>
        </select>
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <label for="couponShortDescription" class="form-label">Short description about this coupon code:</label>
        <textarea id="couponShortDescription"
                    class="form-control"
                    rows="4"
                    placeholder="Short description about this coupon code"
                    aria-label="Short description about this coupon code"></textarea>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        <label for="couponDiscountAmount" class="form-label">Discount Amount:</label>
        <div class="input-group mb-3">
            <select class="form-control" id="">
                <option value="">Percentage (%)</option>
                <option value="">Fixed Amount</option>
            </select>
            <input type="number" class="form-control" aria-label="Text input with dropdown button">
        </div>
    </div>
 </div>

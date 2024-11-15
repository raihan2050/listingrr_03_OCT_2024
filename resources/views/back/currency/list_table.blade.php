@if ($table_part == "head")
    <tr>
        <th class="sorting">@lang('super.payc_curr_country')</th>
        <th class="sorting">@lang('super.payc_curr_currency_name')</th>
        <th class="sorting">@lang('super.payc_curr_currency_code')</th>
        <th class="sorting">@lang('super.payc_curr_currency_sign')</th>
        <th class="sorting">@lang('super.payc_curr_thousand_separator')</th>
        <th class="sorting">@lang('super.payc_curr_decimal_separator')</th>
        <th class="sorting">@lang('super.payc_curr_default')</th>
        <th class="sorting">@lang('super.payc_curr_action')</th>
    </tr>
@elseif ($table_part == "body")

@endif

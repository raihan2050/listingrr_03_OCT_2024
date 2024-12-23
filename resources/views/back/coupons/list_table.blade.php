@if ($table_part == "head")
    <tr>
        <th class="sorting sorting_asc"
            aria-sort="ascending">
            @lang('super.payc_coupon_title')
        </th>
        <th class="sorting">@lang('super.payc_coupon_objects')</th>
        <th class="sorting">@lang('super.payc_coupon_discount_validity')</th>
        <th class="sorting">@lang('super.payc_coupon_status')</th>
        <th class="sorting">@lang('super.payc_coupon_action')</th>
    </tr>
@elseif ($table_part == "body")
    @for ($i = 1; $i < 20; $i++)
        <tr>
            <td>
                <div>Coupon {{ $i }}</div>
                <div>
                    <span class="btn btn-sm btn-secondary-gradient btn-wave waves-effect waves-light">EID2024</span>
                </div>
            </td>
            <td>
                <div>Plan 1{{ $i }}</div>
                <div>Plan 2{{ $i }}</div>
            </td>
            <td>
                <div>From : 03/20/2024</div>
                <div>To : 04/19/2024</div>
                <div>Discount : {{ $i }}%</div>
                <div>Max Use : {{ $i }} times</div>
                <div class="badge bg-secondary">Expired</div>
            </td>
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle rounded-pill" data-bs-toggle="dropdown" aria-expanded="false">
                        Enabled
                    </button>
                    <ul class="dropdown-menu" style="">
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);">Enabled</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);">Disable</a>
                        </li>
                    </ul>
                </div>
            </td>
            <td>
                <a class="modaldCouponFormBtn btn btn-primary btn-wave waves-effect waves-light"
                    data-bs-effect="effect-scale"
                    data-bs-toggle="modal"
                    data-coupon_id="{{ $i }}"
                    href="#modaldCouponForm">
                    <i class="ri-pencil-line"></i>
                </a>
                <button type="button" class="btn btn-danger btn-wave waves-effect waves-light">
                    <i class="ri-delete-bin-6-line"></i>
                </button>
            </td>
        </tr>
    @endfor
@endif

@if ($table_part == "head")
    <tr>
        <th class="sorting sorting_asc"
            aria-sort="ascending">
            @lang('super.payc_gt_title')
        </th>
        <th class="sorting">@lang('super.payc_gt_tax')</th>
        <th class="sorting">@lang('super.payc_gt_status')</th>
        <th class="sorting">@lang('super.payc_gt_action')</th>
    </tr>
@elseif ($table_part == "body")
    @for ($i = 1; $i < 20; $i++)
        <tr>
            <td>
                TaxGeneral {{ $i }}
            </td>
            <td>
                {{ $i }}%
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
                <a class="modalTaxGeneralFormBtn btn btn-primary btn-wave waves-effect waves-light"
                    data-bs-effect="effect-scale"
                    data-bs-toggle="modal"
                    data-tax_general_id="{{ $i }}"
                    href="#modalTaxGeneralForm">
                    <i class="ri-pencil-line"></i>
                </a>
                <button type="button" class="btn btn-danger btn-wave waves-effect waves-light">
                    <i class="ri-delete-bin-6-line"></i>
                </button>
            </td>
        </tr>
    @endfor
@endif

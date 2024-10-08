@if ($table_part == "head")
    <tr>
        <th class="sorting sorting_asc"
            aria-sort="ascending">
            Title
        </th>
        <th class="sorting">Objects</th>
        <th class="sorting">Discount Validity</th>
        <th class="sorting">Status</th>
        <th class="sorting">Action</th>
    </tr>
@elseif ($table_part == "body")
    @for ($i = 1; $i < 20; $i++)
        <tr>
            <td>
                <div>TaxState {{ $i }}</div>
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
                <a class="modalTaxStateFormBtn btn btn-primary btn-wave waves-effect waves-light"
                    data-bs-effect="effect-scale"
                    data-bs-toggle="modal"
                    data-tax_state_id="{{ $i }}"
                    href="#modalTaxStateForm">
                    <i class="ri-pencil-line"></i>
                </a>
                <button type="button" class="btn btn-danger btn-wave waves-effect waves-light">
                    <i class="ri-delete-bin-6-line"></i>
                </button>
            </td>
        </tr>
    @endfor
@endif

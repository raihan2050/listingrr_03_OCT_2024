@if ($table_part == "head")
    <tr>
        <th class="sorting sorting_asc"
            aria-sort="ascending">
            Name
        </th>
        <th class="sorting">Sign</th>
        <th class="sorting">Value</th>
        <th class="sorting">Default</th>
        <th class="sorting">Action</th>
    </tr>
@elseif ($table_part == "body")
    @for ($i = 1; $i < 20; $i++)
        <tr>
            <td>
                Currency {{ $i }}
            </td>
            <td>
                Cur {{ $i }}
            </td>
            <td>
                {{ $i }}{{ $i }}{{ $i }}
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
                <a class="modalCurrencyFormBtn btn btn-primary btn-wave waves-effect waves-light"
                    data-bs-effect="effect-scale"
                    data-bs-toggle="modal"
                    data-currency_id="{{ $i }}"
                    href="#modalCurrencyForm">
                    <i class="ri-pencil-line"></i>
                </a>
                <button type="button" class="btn btn-danger btn-wave waves-effect waves-light">
                    <i class="ri-delete-bin-6-line"></i>
                </button>
            </td>
        </tr>
    @endfor
@endif

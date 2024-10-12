<nav class="nav nav-tabs flex-column nav-style-5" role="tablist">
    @foreach ($gatewayList as $gateway)
    <a class="nav-link px-1 py-2 @if ($gateway['status'] == 1) active @endif"
        data-bs-toggle="tab"
        role="tab"
        aria-current="page"
        href="#{{ $gateway['href'] }}"
        @if ($gateway['status'] == 1)
            aria-selected="true"
        @else
            aria-selected="false"
        @endif>
        {{-- <i class="{{ $gateway['icon'] }} me-2 align-middle d-inline-block"></i> --}}
        {{ $gateway['title'] }}
    </a>
    @endforeach
</nav>

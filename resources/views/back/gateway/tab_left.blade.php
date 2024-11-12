<nav class="nav nav-tabs flex-column nav-style-5" role="tablist">
    @foreach ($gatewayList as $identity => $gateway)
    <a class="
            nav-link
            px-1
            py-2
            d-flex
            {{ $gateway->identity }}Spinner
            disablePuls
            {{ $gateway->identity }}Pulse
            justify-content-between
            align-items-center
            @if ($gateway->tab_status == 1) active @endif
        "
        data-bs-toggle="tab"
        role="tab"
        aria-current="page"
        href="#{{ $gateway->href }}"
        @if ($gateway->tab_status == 1)
            aria-selected="true"
        @else
            aria-selected="false"
        @endif>
        {{ $gateway->title }}
        <span class="spinnerAnim spinner-grow spinner-grow-sm align-middle" style="display: none;" role="status" aria-hidden="true"></span>
    </a>
    @endforeach
</nav>

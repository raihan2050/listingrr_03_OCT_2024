<div class="tab-content mt-2 mt-xl-0">
    @foreach ($gatewayList as $gateway)
        <div class="tab-pane text-muted @if ($gateway['status'] == 1) active show @endif"
            id="{{ $gateway['href'] }}"
            role="tabpanel">
            @include('back.gateway.settings.'.$gateway['href'])
        </div>
    @endforeach
    <div class="row">
        @include('back.gateway.settings.button')
    </div>
</div>

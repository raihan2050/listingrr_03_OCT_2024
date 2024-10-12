@if ($gateway['title'] == 'COD')
    @php $gateway['title'] = 'Cash On Delivery'; @endphp
@endif
<div class="row">
    @include('back.gateway.settings.common')
</div>

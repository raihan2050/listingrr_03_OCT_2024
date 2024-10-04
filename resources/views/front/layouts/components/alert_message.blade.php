@if(session('alert_message'))
<div class="position-fixed bottom-50 end-0 p-3">
    <div id="alertMessage"
            class="toast fade hide"
            role="alert"
            aria-live="assertive"
            aria-atomic="true">
        <div class="toast-header">
            @if (isset(session('alert_message')['status']))
                {{-- success / error / alert --}}
                <img src="{{asset('build/assets/images/alert/'.session('alert_message')['status'].'.png')}}"
                    class="rounded me-2"
                    alt="{{ session('alert_message')['status'] }}"
                    height="18">
            @endif
            @if (isset(session('alert_message')['title']))
                <strong class="me-auto">{{ session('alert_message')['title'] }}</strong>
            @endif
            @if (isset(session('alert_message')['time']))
                {{-- 11 mins ago --}}
                <small>{{ session('alert_message')['time'] }}</small>
            @endif
            <button aria-label="Close" class="btn-close fs-15" data-bs-dismiss="toast"></button>
        </div>
        <div class="toast-body">
            {{ session('alert_message')['msg'] }}
        </div>
    </div>
</div>
@endif

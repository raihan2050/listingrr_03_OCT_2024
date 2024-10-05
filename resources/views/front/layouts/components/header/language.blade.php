<div class="header-element country-selector">
    <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
        @php
            $localeFlagMap = [
                'bn' => 'bd.svg',
                'en' => 'us.svg',
            ];

            $flag = isset($localeFlagMap[Config::get('app.locale')])
                    ? $localeFlagMap[Config::get('app.locale')]
                    : 'us.svg';
        @endphp
        <img src="{{ asset('build/assets/images/flags/' . $flag) }}" alt="img" class="rounded-circle header-link-icon">
    </a>
    <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" style="">
        <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ route('switch.language', 'en') }}">
                <span class="avatar avatar-xs lh-1 me-2">
                    <img src="{{asset('build/assets/images/flags/us.svg')}}" alt="img">
                </span>
                @lang('global.english')
            </a>
        </li>
        <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ route('switch.language', 'bn') }}">
                <span class="avatar avatar-xs lh-1 me-2">
                    <img src="{{asset('build/assets/images/flags/bd.svg')}}" alt="img">
                </span>
                @lang('global.bangla')
            </a>
        </li>
        {{-- <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span class="avatar avatar-xs lh-1 me-2"> <img src="{{asset('build/assets/images/flag-images/spain_flag.jpg')}}" alt="img"> </span> English </a> </li>
        <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span class="avatar avatar-xs lh-1 me-2"> <img src="{{asset('build/assets/images/flag-images/french_flag.jpg')}}" alt="img"> </span> French </a> </li>
        <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span class="avatar avatar-xs lh-1 me-2"> <img src="{{asset('build/assets/images/flag-images/germany_flag.jpg')}}" alt="img"> </span> German </a> </li>
        <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span class="avatar avatar-xs lh-1 me-2"> <img src="{{asset('build/assets/images/flag-images/italy_flag.jpg')}}" alt="img"> </span> Italian </a> </li>
        <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span class="avatar avatar-xs lh-1 me-2"> <img src="{{asset('build/assets/images/flag-images/russia_flag.jpg')}}" alt="img"> </span> Russian </a> </li> --}}
    </ul>
</div>

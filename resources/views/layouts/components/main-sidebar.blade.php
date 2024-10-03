
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{url('index')}}">
                <img src="{{asset('build/assets/images/brand/logo.png')}}"
                        class="header-brand-img main-logo"
                        alt="Sparic logo">
                <img src="{{asset('build/assets/images/brand/logo-light.png')}}"
                        class="header-brand-img darklogo"
                        alt="Sparic logo">
                <img src="{{asset('build/assets/images/brand/icon.png')}}"
                        class="header-brand-img icon-logo"
                        alt="Sparic logo">
                <img src="{{asset('build/assets/images/brand/icon2.png')}}"
                        class="header-brand-img icon-logo2"
                        alt="Sparic logo">
            </a>
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg"
                        fill="#7b8191"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu">
                <li class="slide">
                    <a class="side-menu__item has-link" href="{{ route('dashboard') }}">
                        <i class="side-menu__icon ri-home-4-line"></i>
                        <span class="side-menu__label">Home</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="{{ route('dashboard') }}">
                        <i class="side-menu__icon ri-store-line"></i>
                        <span class="side-menu__label">Business Profile</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="{{ route('dashboard') }}">
                        <i class="side-menu__icon ri-map-pin-line"></i>
                        <span class="side-menu__label">Listings</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="{{ route('dashboard') }}">
                        <i class="side-menu__icon ri-checkbox-circle-line"></i>
                        <span class="side-menu__label">Check-ins</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="{{ route('dashboard') }}">
                        <i class="side-menu__icon ri-mail-star-line"></i>
                        <span class="side-menu__label">Reputation</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="{{ route('dashboard') }}">
                        <i class="side-menu__icon ri-group-line"></i>
                        <span class="side-menu__label">Social Media</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="{{ route('dashboard') }}">
                        <i class="side-menu__icon ri-sparkling-line"></i>
                        <span class="side-menu__label">AI Tools</span>
                    </a>
                </li>
            </ul>
            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg"
                        fill="#7b8191"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>

<ul class="main-menu" style="display: block; margin-left: 0px; margin-right: 0px;">
    <li class="slide">
        <a href="index.html" class="side-menu__item">
            <i class="side-menu__icon ri-home-4-line"></i>
            <span class="side-menu__label">@lang('super.dashboard')</span>
        </a>
    </li>
    <li class="
            slide
            has-sub
            @if (request()->routeIs('super.payment_config.coupon.list') || request()->routeIs('super.payment_config.*'))
                active
                open
            @endif
        ">
        <a href="javascript:void(0);" class="side-menu__item">
            <i class="ri-secure-payment-line side-menu__icon"></i>
            <span class="side-menu__label">@lang('super.payment_config')</span>
            <i class="fe fe-chevron-right side-menu__angle"></i>
        </a>
        <ul class="slide-menu child1" data-popper-placement="bottom">
            <li class="
                slide
                @if (request()->routeIs('super.payment_config.coupon.list'))
                    active
                @endif
                ">
                <a href="{{ route('super.payment_config.coupon.list') }}" class="
                    side-menu__item
                    @if (request()->routeIs('super.payment_config.coupon.list'))
                        active
                    @endif
                    ">@lang('super.coupon_manager')</a>
            </li>
            <li class="
                slide
                @if (request()->routeIs('super.payment_config.txt.regular'))
                    active
                @endif
                ">
                <a href="{{ route('super.payment_config.txt.regular') }}" class="
                    side-menu__item
                    @if (request()->routeIs('super.payment_config.txt.regular'))
                        active
                    @endif
                    ">@lang('super.general_tax')</a>
            </li>
            <li class="
                slide
                @if (request()->routeIs('super.payment_config.txt.state'))
                    active
                @endif
                ">
                <a href="{{ route('super.payment_config.txt.state') }}" class="
                    side-menu__item
                    @if (request()->routeIs('super.payment_config.txt.state'))
                        active
                    @endif
                    ">@lang('super.state_tax')</a>
            </li>
            <li class="
                slide
                @if (request()->routeIs('super.payment_config.currency.list'))
                    active
                @endif
                ">
                <a href="{{ route('super.payment_config.currency.list') }}" class="
                    side-menu__item
                    @if (request()->routeIs('super.payment_config.currency.list'))
                        active
                    @endif
                    ">@lang('super.currency_manager')</a>
            </li>
            <li class="
                slide
                @if (request()->routeIs('super.payment_config.gateway.list'))
                    active
                @endif
                ">
                <a href="{{ route('super.payment_config.gateway.list') }}" class="
                    side-menu__item
                    @if (request()->routeIs('super.payment_config.gateway.list'))
                        active
                    @endif
                    ">@lang('super.payment_gateway')</a>
            </li>
        </ul>
    </li>
    <li class="slide__category"><span class="category-name">@lang('super.manage_site')</span></li>
    <li class="slide">
        <a class="side-menu__item has-link" href="{{ route('super.system.settings') }}">
            <i class="side-menu__icon ri-settings-3-line"></i>
            <span class="side-menu__label">@lang('super.system_settings')</span>
        </a>
    </li>
    @if (app()->isDownForMaintenance())
        <li class="slide">
            <a class="side-menu__item has-link" href="{{ route('super.maintenance.off') }}">
                <i class="side-menu__icon ri-cloud-off-line"></i>
                <span class="side-menu__label">@lang('super.maintenance_off')</span>
            </a>
        </li>
    @else
        <li class="slide">
            <a class="side-menu__item has-link" href="{{ route('super.maintenance.on') }}">
                <i class="side-menu__icon ri-cloud-line"></i>
                <span class="side-menu__label">@lang('super.maintenance_on')</span>
            </a>
        </li>
    @endif
    <li class="slide">
        <a class="side-menu__item has-link" href="{{ route('super.clear') }}">
            <i class="side-menu__icon mdi mdi-broom"></i>
            <span class="side-menu__label">@lang('super.cache_clear')</span>
        </a>
    </li>
</ul>

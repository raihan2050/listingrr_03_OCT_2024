<ul class="main-menu" style="display: block; margin-left: 0px; margin-right: 0px;">
    <li class="slide">
        <a href="index.html" class="side-menu__item">
            <i class="side-menu__icon ri-home-4-line"></i>
            <span class="side-menu__label">@lang('super.dashboard')</span>
        </a>
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
</ul>

<ul class="side-menu">
    <li class="slide">
        <a class="side-menu__item has-link" href="{{ route('super.dashboard') }}">
            <i class="side-menu__icon ri-home-4-line"></i>
            <span class="side-menu__label">Dashboard</span>
        </a>
    </li>
    <li class="sub-category">
        <h3>Manage Site</h3>
    </li>
    @if (app()->isDownForMaintenance())
        <li class="slide">
            <a class="side-menu__item has-link" href="{{ route('super.maintenance.off') }}">
                <i class="side-menu__icon ri-cloud-off-line"></i>
                <span class="side-menu__label">Maintenance Off</span>
            </a>
        </li>
    @else
        <li class="slide">
            <a class="side-menu__item has-link" href="{{ route('super.maintenance.on') }}">
                <i class="side-menu__icon ri-cloud-line"></i>
                <span class="side-menu__label">Maintenance On</span>
            </a>
        </li>
    @endif
</ul>

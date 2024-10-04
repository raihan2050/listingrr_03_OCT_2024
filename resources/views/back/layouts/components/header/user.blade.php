<div class="header-element">
    <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
        <div class="d-flex align-items-center">
            <div class="me-sm-2 me-0">
                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img" width="32" height="32" class="rounded-circle">
            </div>
            <div class="d-sm-block d-none">
                <p class="fw-semibold mb-0 lh-1">Alison</p>
                <span class="op-7 fw-normal d-block fs-12">Administrator</span>
            </div>
        </div>
    </a>
    <ul class="main-header-dropdown dropdown-menu overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile" style="">
        @if (Auth::guard('admin')->check())
        <li><a class="dropdown-item d-flex" href="profile.html"><i class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
        <li><a class="dropdown-item d-flex" href="mail.html"><i class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox <span class="badge bg-success ms-auto">3</span></a></li>
        <li><a class="dropdown-item d-flex" href="mail-settings.html"><i class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings</a></li>
        <li><a class="dropdown-item d-flex" href="chat.html"><i class="ti ti-headset fs-18 me-2 op-7"></i>Support</a></li>
        <li>
            <form id="logout-form" action="{{ route('super.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a class="dropdown-item d-flex"
                href="#"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="ti ti-logout fs-18 me-2 op-7"></i>Log Out
            </a>
        </li>
        @endif
    </ul>
</div>

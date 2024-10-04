<div class="header-element header-message-dropdown">
    <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="notificationDropdown" aria-expanded="false">
        <i class="ri-chat-1-line header-link-icon"></i>
        <span class="badge bg-danger rounded-pill header-icon-badge pulse-round pulse-danger">4</span>
    </a>
    <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
        <div class="p-3">
            <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 fs-17 fw-semibold">You have 4 Messages</p>
            </div>
        </div>
        <div class="dropdown-divider"></div>
        <ul class="list-unstyled mb-0" id="header-message-scroll">
            <li class="dropdown-item">
                <div class="d-flex align-items-start">
                    <div class="pe-2">
                        <span class="avatar avatar-md bg-primary-transparent avatar-rounded">
                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                        </span>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                        <div class="d-flex flex-column justify-content-between">
                            <a href="chat.html">
                                <p class=" mb-0 fw-semibold fs-14 text-dark">Madeleine</p>
                                <p class="fs-11 mb-0">Just completed <span class="text-info">Project</span></p>
                            </a>
                        </div>
                        <span class="fs-10 text-muted">2min ago</span>
                    </div>
                </div>
            </li>
            <li class="dropdown-item">
                <div class="d-flex align-items-start">
                    <div class="pe-2">
                        <span class="avatar avatar-md bg-success-transparent avatar-rounded">
                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                        </span>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                        <div class="d-flex flex-column justify-content-between">
                            <a href="chat.html">
                                <p class=" mb-0 fw-semibold fs-14 text-dark">Olivia</p>
                                <p class="fs-11 mb-0">Added a file into <span class="text-info">Project Name</span></p>
                            </a>
                        </div>
                        <span class="fs-10 text-muted">1 hour ago</span>
                    </div>
                </div>
            </li>
            <li class="dropdown-item">
                <div class="d-flex align-items-start">
                    <div class="pe-2">
                        <span class="avatar avatar-md bg-warning-transparent avatar-rounded">
                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                        </span>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                        <div class="d-flex flex-column justify-content-between">
                            <a href="chat.html">
                                <p class=" mb-0 fw-semibold fs-14 text-dark">Sanderson</p>
                                <p class="fs-11 mb-0">Assigned 9 Upcoming <span class="text-info">Projects</span></p>
                            </a>
                        </div>
                        <span class="fs-10 text-muted">1 days ago</span>
                    </div>
                </div>
            </li>
            <li class="dropdown-item">
                <div class="d-flex align-items-start">
                    <div class="pe-2">
                        <span class="avatar avatar-md bg-info-transparent avatar-rounded">
                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                        </span>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                    <div class="d-flex flex-column justify-content-between">
                    <a href="chat.html">
                    <p class=" mb-0 fw-semibold fs-14 text-dark">Madeleine</p>
                    <p class="fs-11 mb-0">Just completed <span class="text-info">Project</span></p>
                    </a>
                    </div>
                    <span class="fs-10 text-muted">2min ago</span>
                    </div>
                </div>
            </li>
        </ul>
        <div class="p-3 empty-header-item1 border-top">
            <div class="d-grid"> <a href="chat.html" class="btn btn-primary">View All</a> </div>
        </div>
        <div class="p-5 empty-item1 d-none">
            <div class="text-center">
                <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent"> <i class="ri-notification-off-line fs-2"></i> </span>
                <h6 class="fw-semibold mt-3">No New Notifications</h6>
            </div>
        </div>
    </div>
</div>

<header class="app-header">
    <div class="main-header-container container-fluid">
        <div class="header-content-left">
            <div class="header-element">
                @include('front.layouts.components.header.horizontal-logo')
            </div>
            <div class="header-element">
                <a aria-label="Hide Sidebar"
                    class="
                        sidemenu-toggle
                        header-link
                        animated-arrow
                        hor-toggle
                        horizontal-navtoggle"
                    data-bs-toggle="sidebar"
                    href="javascript:void(0);">
                    <span></span>
                </a>
                <div class="main-header-center header-link search-bar-styles">
                    {{-- <input type="text" class="form-control" id="typehead" placeholder="Search for results..." autocomplete="off"> <button type="button" aria-label="button" class="btn pe-1"><i class="fe fe-search" aria-hidden="true"></i></button> --}}
                </div>
            </div>
        </div>
        <div class="header-content-right">
            {{-- <div class="header-element header-search d-lg-none d-block ">
                <a aria-label="anchor" href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <i class="bx bx-search-alt-2 header-link-icon"></i>
                </a>
            </div> --}}
            @include('front.layouts.components.header.language')
            @include('front.layouts.components.header.dark_light')
            @include('front.layouts.components.header.cart')
            @include('front.layouts.components.header.notifications')
            @include('front.layouts.components.header.message')
            @include('front.layouts.components.header.fscreen')
            @include('front.layouts.components.header.user')
        </div>
    </div>
</header>

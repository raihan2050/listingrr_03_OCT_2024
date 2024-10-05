<aside class="app-sidebar sticky" id="sidebar">
    <div class="main-sidebar-header">
        <a href="#" class="header-logo">
            <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
            <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="toggle-logo">
            <img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">
            <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="toggle-dark">
            <img src="{{asset('build/assets/images/brand-logos/desktop-white.png')}}" alt="logo" class="desktop-white">
            <img src="{{asset('build/assets/images/brand-logos/toggle-white.png')}}" alt="logo" class="toggle-white">
        </a>
    </div>
    <!-- End::main-sidebar-header --> <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll" data-simplebar="init">
       <div class="lsimplebar-wrapper" style="margin: 0px 0px -80px;">
          <div class="lsimplebar-height-auto-observer-wrapper">
             <div class="lsimplebar-height-auto-observer"></div>
          </div>
          <div class="lsimplebar-mask">
             <div class="lsimplebar-offset" style="right: 0px; bottom: 0px;">
                <div class="lsimplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                   <div class="lsimplebar-content" style="padding: 0px 0px 80px;">
                      <!-- Start::nav -->
                      <nav class="main-menu-container nav nav-pills flex-column sub-open open active">
                         <div class="slide-left active d-none" id="slide-left">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                               <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                            </svg>
                         </div>
                        @if (isSuperAdmin())
                            @include('front.layouts.components.main-sidebar_admin')
                        @else
                            @include('front.layouts.components.main-sidebar_user')
                        @endif
                         <div class="slide-right d-none" id="slide-right">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                               <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                            </svg>
                         </div>
                      </nav>
                      <!-- End::nav -->
                   </div>
                </div>
             </div>
          </div>
          <div class="lsimplebar-placeholder" style="width: auto; height: 1478px;"></div>
       </div>
       <div class="lsimplebar-track lsimplebar-horizontal" style="visibility: hidden;">
          <div class="lsimplebar-scrollbar" style="width: 0px; display: none;"></div>
       </div>
       <div class="lsimplebar-track lsimplebar-vertical" style="visibility: visible;">
          <div class="lsimplebar-scrollbar" style="height: 604px; display: block; transform: translate3d(0px, 0px, 0px);"></div>
       </div>
    </div>
    <!-- End::main-sidebar -->
 </aside>

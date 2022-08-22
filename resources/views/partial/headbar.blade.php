<div class="top-header">
    <div class="header-bar d-flex justify-content-between border-bottom">
        <div class="d-flex align-items-center">
            <a href="#" class="logo-icon me-3">
                <img src="{{ asset('layout/assets/images/logo-icon.png') }}" height="30" class="small" alt="">
                <span class="big">
                    <img src="{{ asset('layout/assets/images/logo-dark.png') }}" height="24" class="logo-light-mode" alt="">
                    <img src="{{ asset('layout/assets/images/logo-light.png') }}" height="24" class="logo-dark-mode" alt="">
                </span>
            </a>
            <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
            </a>
            <div class="search-bar p-0 d-none d-md-block ms-2">
                <div id="search" class="menu-search mb-0">
                    <form role="search" method="get" id="searchform" class="searchform">
                        <div>
                            <input type="text" class="form-control border rounded" name="s" id="s" placeholder="Search Keywords...">
                            <input type="submit" id="searchsubmit" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- <ul class="list-unstyled mb-0">
            <li class="list-inline-item mb-0">
                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <div class="btn btn-icon btn-soft-light"><i class="ti ti-settings"></i></div>
                </a>
            </li> --}}

            

            <li class="list-inline-item mb-0 ms-1">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="btn btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('layout/assets/images/client/05.jpg') }}" class="avatar avatar-ex-small rounded" alt=""></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                        <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="/login">
                            {{-- <img src="assets/images/client/05.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt=""> --}}
                            <div class="flex-1 ms-2">
                                @guest
                               <a href="/login" class="d-block">Anda Belum Login</a>
                               @endguest
                                @auth
                                <span class="d-block">{{ Auth::user()->name }}</span>
                               
                                    
                                @endauth
                               
                                
                            </div>
                        </a>
                        @auth
                            
                        
                        <a class="dropdown-item text-dark" href="index.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-home"></i></span> Dashboard</a>
                        <a class="dropdown-item text-dark" href="profile.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span> Profile</a>
                        <a class="dropdown-item text-dark" href="email.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-mail"></i></span> Email</a>
                        <div class="dropdown-divider border-top"></div>
                        <a class="dropdown-item text-dark" href="lock-screen.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-lock"></i></span> Lockscreen</a>
                        <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           <span class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span> {{ __('Logout') }}</a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        @endauth
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
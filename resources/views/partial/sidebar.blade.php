<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="index.html">
                <img src="{{ ('layout/assets/images/logo-dark.png') }}" height="24" class="logo-light-mode" alt="">
                <img src="{{ asset('layout/assets/images/logo-light.png') }}" height="24" class="logo-dark-mode" alt="">
                <span class="sidebar-colored">
                    <img src="{{ asset('layout/assets/images/logo-light.png') }}" height="24" alt="">
                </span>
            </a>
        </div>
@auth  
        <ul class="sidebar-menu">
            @auth
                @if (Auth::check() && Auth::user()->name == "Admin")
            <li><a href="/admin/index"><i class="ti ti-home me-2"></i>Dashboard Admin</a></li> 
            @else
            <li><a href="/user/index"><i class="ti ti-home me-2"></i>Dashboard User</a></li> 
            @endif
            @endauth
            @auth
                @if (Auth::check() && Auth::user()->name == "Admin")
            <li><a href="/admin/indextransaksi"><i class="ti ti-shopping-cart me-2"></i>Transaksi Admin</a></li> 
            @else
            <li><a href="/user/indextransaksi"><i class="ti ti-shopping-cart me-2"></i>Transaksi User</a></li> 
            @endif
            @endauth
            {{-- @auth
            @if (Auth::check() && Auth::user()->name == "Admin")
            <li><a href="/user/indextransaksi"><i class="ti ti-user me-2"></i>Menu User</a></li> 
            @else
            @endif
            @endauth --}}
    @endauth
    @guest
    <ul class="sidebar-menu">
        <li><a href="/login"><i class="ti ti-home me-2"></i>Login</a></li>
        {{-- <li class="sidebar-dropdown">
            <a href="javascript:void(0)"><i class="ti ti-browser me-2"></i>Layouts</a>
            <div class="sidebar-submenu">
                <ul>
                    <li><a href="index-dark.html">Dark Dashboard</a></li>
                    <li><a href="index-rtl.html">RTL Dashboard</a></li>
                    <li><a href="index-rtl-dark.html">Dark RTL Dashboard</a></li>
                    <li><a href="index-sidebar-light.html">Light Sidebar</a></li>
                    <li><a href="index-sidebar-colored.html">Colored Sidebar</a></li>
                </ul>
            </div>
        </li> --}}
    @endguest
   </nav>
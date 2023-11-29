@include ('components.aside')
<!--  Main wrapper -->
<div class="body-wrapper">
    <!--  Header Start -->
    <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item d-block d-xl-none">
                    <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                        <i class="ti ti-bell-ringing"></i>
                        <div class="notification bg-primary rounded-circle"></div>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link ">
                        @if (Auth::user())
                            <p>Hello, {{ Auth::user()->username }}</p>
                        @endif
                    </a>
                </li> --}}

            </ul>
            <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                    <a href="https://www.planetsayari.com/Sayari-Lite-Paper.pdf" target="_blank"
                        class="btn btn-primary">Lite Paper</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            @if (Auth::user()->image == null)
                                <img src="backend/assets/images/profile/user-1.jpg"
                                    alt="@if (Auth::user()->user_type == 0) Broker @else Investor @endif" width="35"
                                    height="35" class="rounded-circle">
                            @else
                                <img src="backend\assets\images\profile\{{ Auth::user()->image }}"
                                    alt="@if (Auth::user()->user_type == 0) Broker @else Investor @endif" width="35"
                                    height="35" class="rounded-circle">
                            @endif                            
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                            <div class="message-body">
                                <a href="{{ route('user-profile') }}"
                                    class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-user fs-6"></i>
                                    <p class="mb-0 fs-3">My Profile</p>
                                </a>
                                <a href="{{ asset('deal-status') }}"
                                    class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-status-change"></i>
                                    <p class="mb-0 fs-3">Deal Status</p>
                                </a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</button>
                                    {{-- <a href="{{route('logout')}}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a> --}}
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--  Header End -->


@include ('head')
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{asset('/admin-dashboard')}}" class="text-nowrap logo-img">
            <img src="backend/assets/images/logos/logo_hori.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{asset('../admin-dashboard')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">User Data</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{asset('../admin-investor-data')}}" aria-expanded="false">
                <span>
                <i class="ti ti-clipboard-data"></i>
                </span>
                <span class="hide-menu">Investor Data</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{asset('../admin-broker-data')}}" aria-expanded="false">
                <span>
                <i class="ti ti-file-database"></i>
                </span>
                <span class="hide-menu">Broker Data</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">User Request</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{asset('../investor-request-view')}}" aria-expanded="false">
                <span>
                <i class="ti ti-report"></i>
                </span>
                <span class="hide-menu">Investor Request</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{asset('../broker-request-view')}}" aria-expanded="false">
                <span>
                <i class="ti ti-report"></i>
                </span>
                <span class="hide-menu">Broker Request</span>
              </a>
            </li>
            
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Help Queries</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{asset('../admin-user-query')}}" aria-expanded="false">
                <span>
                <i class="ti ti-message-plus"></i>
                </span>
                <span class="hide-menu">User Dashboard Queries</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{asset('../admin-website-contact')}}" aria-expanded="false">
                <span>
                <i class="ti ti-messages"></i>
                </span>
                <span class="hide-menu">Website Queries</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/ps-admin" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
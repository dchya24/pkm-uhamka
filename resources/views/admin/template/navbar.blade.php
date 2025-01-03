<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
  <div class="container-xxl">
    <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
      <a href="{{ route('admin.dashboard') }}" class="app-brand-link gap-2">
        <img src="{{ url('assets/img/Logo/uhamka.png') }}" alt class="w-px-40 h-auto rounded-circle" />
        <span class="app-brand-text demo menu-text fw-bold">PKM UHAMKA</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
        <i class="mdi mdi-close align-middle"></i>
      </a>
    </div>

    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="mdi mdi-menu mdi-24px"></i>
      </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="/Admin/ManajemenAkun/A_Akunadmin.html" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="{{ url('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="/Admin/ManajemenAkun/A_Akunadmin.html">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="{{ url('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-medium d-block">{{Auth::guard('admin')->user()->name}}</span>
                    <small class="text-muted">Administrator</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="{{route('admin.manajemen-akun.administrator')}}">
                <i class="mdi mdi-account-outline me-2"></i>
                <span class="align-middle">Akun Saya</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#" onclick="document.forms['admin-logout'].submit()">
                <i class="mdi mdi-logout me-2"></i>
                <span class="align-middle">Keluar</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ User -->
      </ul>
    </div>

    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
      <input
        type="text"
        class="form-control search-input border-0"
        placeholder="Search..."
        aria-label="Search..." />
      <i class="mdi mdi-close search-toggler cursor-pointer"></i>
    </div>
  </div>
</nav>
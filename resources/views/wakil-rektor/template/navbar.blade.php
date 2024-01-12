        <!-- Navbar -->

        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="container-xxl">
            <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
              <a href="{{route('wakil-rektor.dashboard')}}" class="app-brand-link gap-2">
                <img src="../../assets/img/Logo/uhamka.png" alt class="w-px-40 h-auto rounded-circle" />
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
                <!-- Notification -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1">
                  <a
                    class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class="mdi mdi-bell-outline mdi-24px"></i>
                    <span
                      class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end py-0">
                    <li class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h6 class="mb-0 me-auto">Informasi</h6>
                      </div>
                    </li>
                    <li class="dropdown-notifications-list scrollable-container">
                      <ul class="list-group list-group-flush">
                        @forelse(session()->get('session_informasi') as $informasi)
                          <li class="list-group-item list-group-item-action dropdown-notifications-item">
                            <a href="{{route('wakil-rektor.informasi')}}">
                              <div class="d-flex gap-2">
                                <div class="flex-shrink-0">
                                  <div class="avatar me-1">
                                    <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                  </div>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                  <h6 class="mb-1 text-truncate">{{$informasi->judul}}</h6>
                                  <small class="text-truncate text-body">
                                    {!! $informasi->description !!}
                                  </small>
                                </div>
                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                  <small class="text-muted">
                                    @if($informasi->created_at)
                                      {{$informasi->created_at->diffforHumans()}}
                                    @endif
                                  </small>
                                </div>
                              </div>
                            </a>
                          </li>
                        @empty
                          <li class="list-group-item list-group-item-action dropdown-notifications-item">
                            <h6 class="mb-1 text-truncate">Tidak ada Informasi</h6>
                          </li>
                        @endif
                      </ul>
                    </li>
                    <li class="dropdown-menu-footer border-top p-2">
                      <a href="{{route('wakil-rektor.informasi')}}" class="btn btn-primary d-flex justify-content-center">
                        Lihat Semua Informasi
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="M_Akunsaya.html" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="M_Akunsaya.html">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block">{{Auth::guard('admin')->user()->nama}}</span>
                            <small class="text-muted">Wakil Rektor</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route("mahasiswa.profile") }}">
                        <i class="mdi mdi-account-outline me-2"></i>
                        <span class="align-middle">Akun Saya</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#" onclick="document.forms['wakil-rektor-logout'].submit()">
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
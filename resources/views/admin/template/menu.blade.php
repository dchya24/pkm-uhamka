<!-- Menu -->
<div class="pb-5">
  <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100">
      <ul class="menu-inner">
        <!-- Dashboards -->
        <li class="menu-item @if(Request::is('administrator/dashboard')) active @endif">
          <a class="menu-link" href="{{ route('admin.dashboard') }}">
            <i class="menu-icon tf-icons mdi mdi-home"></i>
            Beranda
          </a>
        </li>

        <!-- Manajemen Proposal -->
        <li class="menu-item @if(Request::is('administrator/manajemen-proposal/*')) active @endif">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons mdi mdi-file-table-box-multiple-outline"></i>
            <div>Manajemen Proposal</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item @if(Request::is('administrator/manajemen-proposal/proposal')) active @endif">
              <a href="{{ route('admin.manajemen-proposal.proposal') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-file-swap-outline"></i>
                <div>Semua Proposal</div>
              </a>
            </li>
            <li class="menu-item @if(Request::is('administrator/manajemen-proposal/penilai-substansi')) active @endif">
              <a href="{{ route('admin.manajemen-proposal.penilai-substansi') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-clipboard-account"></i>
                <div>Tambah penilai substansi</div>
              </a>
            </li>
            <li class="menu-item @if(Request::is('administrator/manajemen-proposal/penilai-administrasi')) active @endif">
              <a href="{{ route('admin.manajemen-proposal.penilai-administrasi') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-note-multiple-outline"></i>
                <div>Tambah penilai administrasi</div>
              </a>
            </li>
            <li class="menu-item @if(Request::is('administrator/manajemen-proposal/peninjau')) active @endif">
              <a href="{{ route('admin.manajemen-proposal.peninjau') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-comment-account"></i>
                <div>Tambah peninjau</div>
              </a>
            </li>
            <li class="menu-item @if(Request::is('administrator/manajemen-proposal/wakil-rektor')) active @endif">
              <a href="{{ route('admin.manajemen-proposal.wakil-rektor') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-account-star"></i>
                <div>Tambah Wakil Rektor</div>
              </a>
            </li>
          </ul>
        </li>

        <!-- Manajemen Akun -->
        <li class="menu-item @if(Request::is('administrator/manajemen-akun/*')) active @endif">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons mdi mdi-shield-account"></i>
            <div>Manajemen Akun</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item @if(Request::is('administrator/manajemen-akun/administrator')) active @endif">
              <a href="{{route('admin.manajemen-akun.administrator')}}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-account-cog"></i>
                <div>Administrator</div>
              </a>
            </li>
            <li class="menu-item @if(Request::is('administrator/manajemen-akun/ketua-kelompok')) active @endif">
              <a href="{{route('admin.manajemen-akun.ketua-kelompok')}}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-account-key"></i>
                <div>Ketua Kelompok</div>
              </a>
            </li>
            <li class="menu-item @if(Request::is('administrator/manajemen-akun/penilai')) active @endif">
              <a href="{{route('admin.manajemen-akun.penilai')}}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-account-group"></i>
                <div>Akun Penilai</div>
              </a>
            </li>
            <li class="menu-item @if(Request::is('administrator/manajemen-akun/peninjau')) active @endif">
              <a href="{{route('admin.manajemen-akun.peninjau')}}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-account-check"></i>
                <div>Peninjau</div>
              </a>
            </li>
            <li class="menu-item @if(Request::is('administrator/manajemen-akun/*wakil-rektor')) active @endif">
              <a href="{{route('admin.manajemen-akun.wakil-rektor')}}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-account-convert"></i>
                <div>Wakil Rektor</div>
              </a>
            </li>
          </ul>
        </li>

        <!--Manajemen Informasi -->
        <li class="menu-item @if(Request::is('administrator/informasi')) active @endif">
          <a href="{{ route('admin.informasi') }}" class="menu-link">
            <i class="menu-icon tf-icons mdi mdi-card-account-details-outline"></i>
            <div>Manajemen Informasi</div>
          </a>
        </li>

        <!-- Manajemen Data -->
        <li class="menu-item">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons mdi mdi-folder-account"></i>
            <div>Manajemen Data</div>
          </a>

          <ul class="menu-sub">

            <li class="menu-item">
              <a href="{{ route('admin.skema-pkm.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-file-eye"></i>
                <div>Data Jenis PKM</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="{{ route('admin.sertifikat') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-certificate-outline"></i>
                <div>Tambah Sertifikat</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-database"></i>
                <div>Data Sistem PKM</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('admin.data-mahasiswa') }}" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                    <div >Data Mahasiswa (PKM)</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('admin.data-dosen') }}" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                    <div >Data Dosen (PKM)</div>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </li>

        <!-- Manajemen Halaman -->
        <li class="menu-item @if(Request::is('administrator/akses-halaman')) active @endif">
          <a href="{{ route('admin.akses-halaman') }}" class="menu-link">
            <i class="menu-icon tf-icons mdi mdi-lock-open-alert"></i>
            <div>Manajemen Halaman</div>
          </a>
        </li>
        <!-- Keluar -->
        <li class="menu-item">
          <a href="#" onclick="document.forms['admin-logout'].submit()" class="menu-link">
            <i class="menu-icon tf-icons mdi mdi-chart-donut"></i>
            <div>Keluar</div>
          </a>
        </li>
      </ul>
    </div>
  </aside>
</div>
<!-- / Menu -->
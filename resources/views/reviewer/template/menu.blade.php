<!-- Menu -->
<div class="pb-5">
  <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100">
      <ul class="menu-inner">
        <!-- Dashboards -->
        <li class="menu-item @if(Request::is('peninjau/dashboard')) active @endif">
          <a class="menu-link" href="{{route('reviewer.dashboard')}}">
            <i class="menu-icon tf-icons mdi mdi-notebook-outline"></i>
            Beranda
          </a>
        </li>

        <!-- Informasi -->
        <li class="menu-item @if(Request::is('peninjau/informasi')) active @endif">
          <a class="menu-link" href="{{route('reviewer.informasi')}}">
            <i class="menu-icon tf-icons mdi mdi-email-outline"></i>
            <div>Informasi</div>
          </a>
        </li>

        <!-- Penilaian Proposal -->
        <li class="menu-item @if(Request::is('peninjau/penilaian-proposal') || Request::is('peninjau/penilaian-proposal/*')) active @endif">
          <a href="{{route('reviewer.penilaian-proposal')}}" class="menu-link">
            <i class="menu-icon tf-icons mdi mdi-checkbox-marked-outline"></i>
            <div>Penilaian Proposal</div>
          </a>
        </li>

        <!-- Tentang Akun -->
        <li class="menu-item @if(Request::is('peninjau/profile')) active @endif">
          <a href="{{route('reviewer.profile')}}" class="menu-link">
            <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
            <div>Akun Saya</div>
          </a>
        </li>

        <!-- Keluar -->
        <li class="menu-item">
          <a href="#" onclick="document.forms['reviewer-logout'].submit()" class="menu-link">
            <i class="menu-icon tf-icons mdi mdi-chart-donut"></i>
            <div>Keluar</div>
          </a>
        </li>
      </ul>
    </div>
  </aside>
</div>
<!-- / Menu -->
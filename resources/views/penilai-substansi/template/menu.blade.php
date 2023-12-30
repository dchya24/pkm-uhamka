<!-- Menu -->
<div class="pb-5">
  <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100">
      <ul class="menu-inner">
        <!-- Dashboards -->
        <li class="menu-item active">
          <a class="menu-link" href="{{route('penilai-substansi.dashboard')}}">
            <i class="menu-icon tf-icons mdi mdi-notebook-outline"></i>
            Beranda
          </a>
        </li>

        <!-- Informasi -->
        <li class="menu-item">
          <a class="menu-link" href="{{route('penilai-substansi.informasi')}}">
            <i class="menu-icon tf-icons mdi mdi-email-outline"></i>
            <div>Informasi</div>
          </a>
        </li>

        <!-- Penilaian Proposal -->
        <li class="menu-item">
          <a href="{{route('penilai-substansi.penilaian-proposal')}}" class="menu-link">
            <i class="menu-icon tf-icons mdi mdi-checkbox-marked-outline"></i>
            <div>Penilaian Proposal</div>
          </a>
        </li>

        <!-- Tentang Akun -->
        <li class="menu-item">
          <a href="{{route('penilai-substansi.profile')}}" class="menu-link">
            <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
            <div>Akun Saya</div>
          </a>
        </li>

        <!-- Keluar -->
        <li class="menu-item">
          <a href="#" onclick="document.forms['penilai-logout'].submit()" class="menu-link">
            <i class="menu-icon tf-icons mdi mdi-chart-donut"></i>
            <div>Keluar</div>
          </a>
        </li>
      </ul>
    </div>
  </aside>
</div>
<!-- / Menu -->
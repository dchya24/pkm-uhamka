<!-- Menu -->
<div class="pb-5">
  <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100">
      <ul class="menu-inner">
        <!-- Dashboards -->
        <li class="menu-item @if(Request::is('mahasiswa/dashboard')) active @endif">
          <a href="{{ route("mahasiswa.dashboard") }}" class="menu-link">
            <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
            <div>Beranda</div>
          </a>
        </li>

        <!-- Informasi -->
        <li class="menu-item @if(Request::is('mahasiswa/informasi')) active @endif">
          <a class="menu-link" href="{{ route("mahasiswa.informasi") }}">
            <i class="menu-icon tf-icons mdi mdi-email-outline"></i>
            <div>Informasi</div>
          </a>
        </li>

        <!--Usulan -->
        <li class="menu-item @if(Request::is('mahasiswa/usulan') || Request::is('mahasiswa/kirim-usulan')) active @endif">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons mdi mdi-file-table-box-multiple-outline"></i>
            <div>Usulan PKM</div>
          </a>
          <ul class="menu-sub">
            @if($aksesHalaman)
              <li class="menu-item @if(Request::is('mahasiswa/kirim-usulan')) active @endif">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons mdi mdi-file-swap-outline"></i>
                  <div>Kirim usulan</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="{{ route("mahasiswa.kirim-usulan") }}" class="menu-link">
                        <i class="menu-icon tf-icons mdi mdi-file-swap-outline"></i>
                        <div>{{$aksesHalaman->usulan}}</div>
                      </a>
                    </li>
                </ul>
              </li>
            @endif
            <li class="menu-item @if(Request::is('mahasiswa/usulan')) active @endif">
              <a href="{{ route("mahasiswa.usulan") }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-clipboard-account"></i>
                <div>Usulan anda</div>
              </a>
            </li>
          </ul>
        </li>

        <!-- Sertifikat PKM -->
        <li class="menu-item @if(Request::is('mahasiswa/sertifikat')) active @endif">
          <a href="{{ route("mahasiswa.sertifikat") }}" class="menu-link">
            <i class="menu-icon tf-icons mdi mdi-card-account-details-outline"></i>
            <div>Sertifikat PKM</div>
          </a>
        </li>

        <!-- Tentang Akun -->
        <li class="menu-item @if(Request::is('mahasiswa/profile')) active @endif">
          <a href="{{ route("mahasiswa.profile") }}" class="menu-link">
            <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
            <div>Akun Saya</div>
          </a>
        </li>

        <!-- FAQ -->
        <li class="menu-item @if(Request::is('mahasiswa/faq')) active @endif">
          <a href="{{ route("mahasiswa.faq") }}" class="menu-link">
            <i class="menu-icon tf-icons mdi mdi-comment-question-outline"></i>
            <div>FAQ</div>
          </a>
        </li>

        <!-- Keluar -->
        <li class="menu-item">
          <form action="{{ route("mahasiswa.logout") }}" method="POST" name="mahasiswa-logout" class="d-none">
            @csrf
          </form>
          <a href="#" class="menu-link" onclick="document.forms['mahasiswa-logout'].submit()"> 
            <i class="menu-icon tf-icons mdi mdi-chart-donut"></i>
            <div>Keluar</div>
          </a>
        </li>
      </ul>
    </div>
  </aside>
</div>
<!-- / Menu -->
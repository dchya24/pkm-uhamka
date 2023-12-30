@extends('template.layout')
@section("title", "Masuk Peninjau/Penilai")

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
@endsection
    <!-- Content -->
		@section('body')
    
    <div class="position-relative">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Login -->
          <div class="card p-2">
            <!-- Logo -->
            <div class="app-brand justify-content-center mt-5">
              <a href="{{route('login')}}" class="d-flex align-items-center gap-2">
                <span class="app-brand-logo demo">
                  <img src="{{ asset('assets/img/Logo/uhamka.png') }}" alt="Girl in a jacket" width="40" height="40" />
                </span>
                <span class="app-brand-text demo text-heading fw-bold">PKM UHAMKA</span>
              </a>
            </div>
            <!-- /Logo -->

            <div class="card-body mt-2">
              <h4 class="mb-2">Halo, para penilai dan peninjau! 👋</h4>
              <p class="mb-4">Silahhkan masuk ke akun mu</p>

              <form id="formAuthentication" class="mb-3" action="{{ route('login.penilai.attempt')}}" method="POST">
                <div class="mb-3">
                    <div class="form-floating form-floating-outline">
                        <select
                        id="select2Basic"
                        class="select2 form-select form-select-lg"
                        data-allow-clear="true"
                        name="login_type">
                        <option value="penilai">Penilai Substansi / Administrasi</option>
                        <option value="peninjau">Peninjau</option>
                        </select>
                        <label for="select">Masuk sebagai</label>
                    </div>
                </div>
                <div class="form-floating form-floating-outline mb-3">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Masukan NIDN/username kamu"
                    name="username"
                    autofocus />
                  <label for="a_username">NIDN/Username</label>
                </div>
                <div class="mb-3">
                  <div class="form-password-toggle">
                    <div class="input-group input-group-merge">
                      <div class="form-floating form-floating-outline">
                        <input
                          type="password"
                          id="password-mahasiswa"
                          class="form-control"
                          name="password"
                          placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                          aria-describedby="password" />
                        <label for="password">Password</label>
                      </div>
                      <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  @csrf
                  <button class="btn btn-primary d-grid w-100" type="submit">
                    Masuk 
                  </button>            
                </div>
              </form>
              
            </div>
          </div>
          <!-- /Login -->
          <img
            alt="mask"
            src="{{ asset('assets/img/illustrations/auth-basic-login-mask-light.png') }}"
            class="authentication-image d-none d-lg-block"
            data-app-light-img="illustrations/auth-basic-login-mask-light.png"
            data-app-dark-img="illustrations/auth-basic-login-mask-dark.png" />
        </div>
      </div>
    </div>

		@endsection
    <!-- / Content -->


    @section('script')
        <script src="{{ asset('assets/js/pages-auth.js') }}"></script>
    @endsection
	</body>
</html>

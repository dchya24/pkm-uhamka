@extends('template.layout')
@section("title", "Buat Password")

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
@endsection
    <!-- Content -->
		@section('body')
    
    <div class="position-relative">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Create Password -->
          <div class="card p-2">
            <!-- Logo -->
            <div class="app-brand justify-content-center mt-5">
              <a href="{{route('login.index')}}" class="d-flex align-items-center gap-2">
                <span class="app-brand-logo demo">
                  <img src="{{asset('assets/img/Logo/uhamka.png')}}" alt="Girl in a jacket" width="40" height="40" />
                </span>
                <span class="app-brand-text demo text-heading fw-bold">PKM UHAMKA</span>
              </a>
            </div>
            <!-- /Logo -->

            <div class="card-body mt-2">
              <h4 class="mb-2">Kamu adalah mahasiswa aktif</h4>
              <p class="mb-4">{{$mahasiswa->nama}} / {{$mahasiswa->fakultas}} / {{$mahasiswa->prodi}}</p>

              <form id="formAuthentication" class="mb-3" action="{{ route('register.create-account')}}" method="POST">
                
                <div class="mb-3 form-password-toggle">
                  <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                      <label for="password">Password</label>
                    </div>
                    <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                  </div>
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                      <input
                        type="password"
                        id="confirm-password"
                        class="form-control"
                        name="confirm_password"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                      <label for="confirm-password">Konfirmasi Password</label>
                    </div>
                    <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                    @csrf
                    <input type="hidden" name="nim" value="{{$mahasiswa->nim}}">
                    <input type="hidden" name="token" value="{{$token}}">
                    <button class="btn btn-primary d-grid w-100" type="submit">Daftar</button>                  
                </div>
              </form>
            </div>
          </div>
          <!-- Create Password  -->
          <img
            alt="mask"
            src="{{asset('assets/img/illustrations/auth-basic-login-mask-light.png')}}"
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

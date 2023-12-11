@extends('template.layout')
@section("title", "Sukses Daftar")

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
              <a href="" class="d-flex align-items-center gap-2">
                <span class="app-brand-logo demo">
                  <img src="{{asset('assets/img/Logo/uhamka.png')}}" alt="Girl in a jacket" width="40" height="40" />
                </span>
                <span class="app-brand-text demo text-heading fw-bold">PKM UHAMKA</span>
              </a>
            </div>
            <!-- /Logo -->

            <!-- Verify Email -->
            <div class="card-body mt-2">
              <h4 class="mb-2">Pendaftaran Berhasil !</h4>
              <p class="text-start mb-2">
                Akun ini bersifat privasi, dimohon ingat username dan password yang sudah dibuat !
              </p>
              <a class="btn btn-primary w-100 my-3" href="{{route('login.mahasiswa')}}"> Lanjutkan, Masuk ? </a>
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

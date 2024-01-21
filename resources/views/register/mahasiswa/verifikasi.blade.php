@extends('template.layout')
@section("title", "Verifikasi Data")

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
@endsection
<!-- Content -->
@section('body')

<div class="position-relative">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner py-4">
      @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Oops!</strong> {{session()->get('error')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <!-- Login -->
      <div class="card p-2">
        <!-- Logo -->
        <div class="app-brand justify-content-center mt-5">
          <a href="{{route('login')}}" class="d-flex align-items-center gap-2">
            <span class="app-brand-logo demo">
              <img src="{{asset('assets/img/Logo/uhamka.png')}}" alt="Girl in a jacket" width="40" height="40" />
            </span>
            <span class="app-brand-text demo text-heading fw-bold">PKM UHAMKA</span>
          </a>
        </div>
        <!-- /Logo -->

        <div class="card-body mt-2">
          <h4 class="mb-2">Pendaftaran akun PKM UHAMKA👋</h4>
          <p class="mb-4">Silahhkan masukan Nomor induk mahasiswa mu untuk verifikasi!</p>

          <form id="formAuthentication" class="mb-3" action="{{route('register.verify-nim')}}" method="POST">
            <div class="form-floating form-floating-outline mb-3">
              <input
                type="number"
                class="form-control"
                placeholder="Masukan NIM kamu"
                name="nim"
                autofocus required />
              <label for="a_username">Nomor Induk Mahasiswa</label>
            </div>
            @csrf
          </form>

          <div class="mb-3">
            <button 
              class="btn btn-primary d-grid w-100" 
              type="button" 
              onclick="submit(event)">
              Verifikasi data
            </button>                  
          </div>
          <div class="divider my-4">
            <div class="divider-text">Media Sosial Kami</div>
          </div>

          <div class="d-flex justify-content-center gap-2">
            <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-facebook">
              <i class="tf-icons mdi mdi-24px mdi-facebook"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-twitter">
              <i class="tf-icons mdi mdi-24px mdi-twitter"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-github">
              <i class="tf-icons mdi mdi-24px mdi-github"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-google-plus">
              <i class="tf-icons mdi mdi-24px mdi-google"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- /Login -->
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
    @if(Session::has('error'))
      <script>
        // Swal.fire({
        //   icon: 'error',
        //   title: 'Oops...',
        //   text: '{{Session::get('error')}}',
        //   showCancelButton: false,
        // })
      </script>
    @endif
    <script>
      function submit(e){
        e.preventDefault();
        e.target.disabled = true;

        if(document.getElementById('formAuthentication').checkValidity()){
          document.getElementById('formAuthentication').submit();
        }
        else{
          e.target.disabled = false;
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Data tidak valid!',
          })
        }
      }
    </script>
@endsection
	</body>
</html>

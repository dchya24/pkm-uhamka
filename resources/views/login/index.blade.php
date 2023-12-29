@extends('template.layout')
@section('title', 'Halaman Masuk Akun')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
@endsection
    <!-- Content -->
		@section('body')
				
    <div class="container-xl flex-grow-0 container-p-y py-5 position-relative">

        <div class="row mb-3">
        <div class="card">
            <div class="card-header">
            <!-- Logo -->
            <div class="app-brand justify-content-center ">
                <a href="{{route('login')}}" class="d-flex align-items-center gap-2">
                <span class="app-brand-logo demo">
                    <img src="{{ asset('assets/img/Logo/uhamka.png') }}" alt="Girl in a jacket" width="40" height="40" />
                </span>
                <span class="app-brand-text demo text-heading fw-bold">PKM UHAMKA</span>
                </a>
            </div>
            <!-- /Logo -->
            </div>
        </div>
        </div>
        <!-- Examples -->
        <div class="row mb-5">
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title text-center">Mahasiswa</h5>
                <img
                class="img-fluid d-flex mx-auto my-4 rounded"
                src="{{ asset('assets/img/elements/mahasiswa.jpg') }}"
                alt="Card image cap" />
                <a class="btn btn-primary d-grid w-100" type="button" href="{{route('login.mahasiswa')}}">
                Masuk & Daftar Akun
                </a>
            </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title text-center">Penilai & Peninjau</h5>
                <img
                class="img-fluid d-flex mx-auto my-4 rounded"
                src="{{ asset('assets/img/elements/penilai.jpg') }}"
                alt="Card image cap" />
                <a class="btn btn-primary d-grid w-100" type="button" href="{{route('login.penilai')}}">
                Masuk akun
                </a>
            </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title text-center">Rektorat & Staff</h5>
                <img
                class="img-fluid d-flex mx-auto my-4 rounded"
                src="{{ asset('assets/img/elements/warek.jpg') }}"
                alt="Card image cap" />
                <a class="btn btn-primary d-grid w-100" type="button" href="{{route('login.administrator')}}">
                Masuk Akun
                </a>
            </div>
            </div>
        </div>
        </div>
        <!-- Examples -->   
    </div>

		@endsection
    <!-- / Content -->


    @section('script')
        <script src="{{ asset('assets/js/pages-auth.js') }}"></script>
    @endsection
	</body>
</html>

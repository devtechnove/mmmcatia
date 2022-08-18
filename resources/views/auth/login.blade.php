@extends('layouts.adminfront')
@section('title','Login')
@section('content')
<body>
<!-- [ auth-signup ] start -->
<div class="auth-wrapper auth-v3">
    <div class="auth-content">
        <div class="card">
            <div class="row text-center">
                <div class="col-md-6 img-card-side">
                    <img src="{{ asset('images/auth/auth-side1.jpg') }}" alt="" class="img-fluid">
                    <div class="img-card-side-content">
                        <img src="assets/images/logo-dark.svg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" ">
                        <form id="main-form" autocomplete="off">
                        <input type="hidden" id="_url" value="{{ url('login') }}">
                        <input type="hidden" id="_redirect" value="{{ url('/home') }}">
                        <input type="hidden" id="_token" value="{{ csrf_token() }}">   <br><br> <br><br> 
                        <div class="card-body">
                             <h1 class="black-text">Iniciar Sesión</h1><!-- <p class="text-muted">ADMIN<br>
                            Email : admin@macbrame.com<br> Pass : macbrame</p> -->
                        <p class="text-muted">Ingresa tu usuario y contraseña</p>
                            <p class="text-muted"></p>
                             <div class="input-group input-group-merge mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon5"><i data-feather='user'></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Usuario" aria-label="Usuario" name="username" aria-describedby="basic-addon5" />
                            </div>

                            <div class="input-group input-group-merge form-password-toggle mb-2">
                                <input type="password" name="password" class="form-control" id="basic-default-password1" placeholder="Contraseña" aria-describedby="basic-default-password1" />
                                <div class="input-group-append">
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                </div>
                            </div><br>

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-md" id="boton">
                                        <i class="fas fa-sign-in-alt text-white" id="ajax-icon"></i> <span class="text-white ">{{ __('Iniciar Sesión') }}</span>
                                    </button>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signup ] end -->
@endsection
@push('scripts')
    <script src="{{ asset('js/admin/auth/login.js') }}"></script>
@endpush



@extends('layouts.admin')
@section('title','Inicio')
@section('content')

 <div class="content-body">
<!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
<div class="row match-height">
    <!-- Medal Card -->


    <!-- Statistics Card -->
    <div class="col-xl-12 col-md-6 col-12">
        <div class="card card-statistics">
            <div class="card-header">
                <h4 class="card-title">Estadísticas generales</h4>
            </div>
            <div class="card-body statistics-body">
                <div class="row">
                @if (Auth::user()->hasRole('Super Administrador'))
                    
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="media">
                            <div class="avatar white mr-2">
                                <div class="avatar-content">
                                    <i class="fas fa-user brown-text fa-3x" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ App\Models\User::count() }}</h4>
                                <p class="card-text font-small-3 mb-0">Usuarios</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="media">
                            <div class="avatar white mr-2">
                                <div class="avatar-content">
                                    <i class="mdi mdi-lock-open black-text fa-3x" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ Spatie\Permission\Models\Role::count() }}</h4>
                                <p class="card-text font-small-3 mb-0">Roles</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                        <div class="media">
                            <div class="avatar white mr-2">
                                <div class="avatar-content">
                                    <i class="mdi mdi-lock-alert purple-text fa-3x" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ Spatie\Permission\Models\Permission::count() }}</h4>
                                <p class="card-text font-small-3 mb-0">Permisos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="media">
                            <div class="avatar white mr-2">
                                <div class="avatar-content">
                                    <i class="mdi mdi-login-variant fa-3x red-text" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ App\Models\Login::count() }}</h4>
                                <p class="card-text font-small-3 mb-0">Visitas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0 mt-1">
                        <div class="media">
                            <div class="avatar white mr-2">
                                <div class="avatar-content">
                                    <i class="fas fa-female fa-3x pink-text" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ App\Models\Miembro::where('sociedad_id',1)->count() }}</h4>
                                <p class="card-text font-small-3 mb-0">Damas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0 mt-1">
                        <div class="media">
                            <div class="avatar white mr-2">
                                <div class="avatar-content">
                                    <i class="fas fa-user-tie fa-3x blue-text" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ App\Models\Miembro::where('sociedad_id',2)->count() }}</h4>
                                <p class="card-text font-small-3 mb-0">Caballeros</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0 mt-1">
                        <div class="media">
                            <div class="avatar white  mr-2">
                                <div class="avatar-content">
                                    <i class="fas fa-handshake fa-3x green-text" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ App\Models\Miembro::where('sociedad_id',3)->count() }}</h4>
                                <p class="card-text font-small-3 mb-0">Jóvenes</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0 mt-1">
                        <div class="media">
                            <div class="avatar white  mr-2">
                                <div class="avatar-content">
                                    <i class="mdi mdi-human-male-boy fa-3x orange-text" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ App\Models\Miembro::where('sociedad_id',5)->count() }}</h4>
                                <p class="card-text font-small-3 mb-0">Adolescentes</p>
                            </div>
                        </div>
                    </div>
                    @else
                     <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0 mt-1">
                        <div class="media">
                            <div class="avatar white mr-2">
                                <div class="avatar-content">
                                    <i class="fas fa-female fa-3x pink-text" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ App\Models\Miembro::where('sociedad_id',1)->count() }}</h4>
                                <p class="card-text font-small-3 mb-0">Damas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0 mt-1">
                        <div class="media">
                            <div class="avatar white mr-2">
                                <div class="avatar-content">
                                    <i class="fas fa-user-tie fa-3x blue-text" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ App\Models\Miembro::where('sociedad_id',2)->count() }}</h4>
                                <p class="card-text font-small-3 mb-0">Caballeros</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0 mt-1">
                        <div class="media">
                            <div class="avatar white  mr-2">
                                <div class="avatar-content">
                                    <i class="fas fa-handshake fa-3x green-text" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ App\Models\Miembro::where('sociedad_id',3)->count() }}</h4>
                                <p class="card-text font-small-3 mb-0">Jóvenes</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0 mt-1">
                        <div class="media">
                            <div class="avatar white  mr-2">
                                <div class="avatar-content">
                                    <i class="mdi mdi-human-male-boy fa-3x orange-text" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ App\Models\Miembro::where('sociedad_id',5)->count() }}</h4>
                                <p class="card-text font-small-3 mb-0">Adolescentes</p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                
            </div>
        </div>
    </div>

    @if (Auth::user()->hasRole('Tesorería') || Auth::user()->hasRole('Super Administrador') || Auth::user()->hasRole('Administrador') )
        <div class="col-lg-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-header">
                <div>
                    <h2 class="font-weight-bolder mb-0">{{ $total_aportado->sum }}$</h2>
                    <p class="card-text">Aportes en general</p>
                </div>
                <div class="p-50 m-0">
                    <div class="">
                        <i class="fas fa-coins fa-3x blue-text"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-header">
                <div>
                    <h2 class="font-weight-bolder mb-0">{{ $total_mes->sum }}$</h2>
                    <p class="card-text">Aportes {{ $mes_actual }}</p>
                </div>
                <div class=" p-50 m-0">
                    <div class="">
                        <i class="fas fa-calendar-alt fa-3x green-text"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-header">
                <div>
                    <h2 class="font-weight-bolder mb-0">{{ $total_ofrendado->sum }}$</h2>
                    <p class="card-text">Total ofrendas</p>
                </div>
                <div class="p-50 m-0">
                    <div class="">
                        <i class="fas fa-handshake fa-3x red-text"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-header">
                <div>
                    <h2 class="font-weight-bolder mb-0">{{ $total_mes_ofrendado->sum }}$</h2>
                    <p class="card-text">Ofrendas {{ $mes_actual }}</p>
                </div>
                <div class=" p-50 m-0">
                    <div class="">
                        <i class="fas fa-calendar-alt fa-3x green-text"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-12">
        <div class="card">
            <div class="card-header">
                <div>
                    <h2 class="font-weight-bolder mb-0">{{ $total_mes_gastos->sum }}$</h2>
                    <p class="card-text">Gasto total en el mes de <b>{{ $mes_actual }}</b></p>
                </div>
                <div class=" p-50 m-0">
                    <div class="">
                        <i class="fas fa-calendar-alt fa-3x green-text"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="col-lg-6 col-sm-6 col-12">
        <div class="card">
            <div class="card-header">
                <div>
                    <h2 class="font-weight-bolder mb-0">{{ $total_gastos->sum }}$</h2>
                    <p class="card-text">Total global en gastos</p>
                </div>
                <div class="p-50 m-0">
                    <div class="">
                        <i class="fas fa-cash-register fa-3x red-text"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

       <div class="col-xl-6 xl-100 box-col-12">
               @php
                   $date = \Carbon\Carbon::now();
                    //dd();
               @endphp
                  <div class="cal-date-widget card-body">
                    <div class="row">
                      <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                        <div class="cal-info text-center">
                          <div>
                            <h2>{{ date('d') }}</h2>
                            <div class="d-inline-block"><span class="pe-3">{{ $date->formatLocalized('%B') }} - </span><span class="ps-3"> {{ date('Y') }}</span></div>
                            <p class="f-16">There is no minimum donation, any sum is appreciated</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                        <div class="cal-datepicker ">
                          <div class="datepicker-here float-sm-end" data-language="en">           </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              
        </div>
</section>


</div>
@endsection

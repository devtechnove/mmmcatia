
    <!-- BEGIN: Main Menu-->
   <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ url('/home') }}"><span class="brand-logo">
                          </span>
                        <h2 class="brand-text">MMM - CATIA</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                 @can('VerUsuario')
                 <li class=" navigation-header"><span data-i18n="User Interface">DATOS DE SEGURIDAD</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="lock"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Seguridad</span><span class="badge badge-light-warning badge-pill ml-auto mr-1">3</span></a>
                    <ul class="menu-content">

                          <li class="{{ Active::check('usuario') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('/usuario') }}" data-toggle="dropdown" data-i18n="Analytics"><i data-feather="user"></i><span data-i18n="Analytics">Usuarios</span></a>
                          </li>

                         @can('VerRole')      
                             <li class="{{ Active::check('roles') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('roles') }}" data-toggle="dropdown" data-i18n="Analytics"><i data-feather="lock"></i><span data-i18n="Analytics">Roles</span></a>
                            </li>
                         @endcan
                          @can('VerLogins')      
                              <li class="{{ Active::check('logins') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('logins') }}" data-toggle="dropdown" data-i18n="Analytics"><i class="fas fa-history"></i><span data-i18n="Analytics">Historial de sesión</span></a>
                            </li>
                           @endcan
                        </ul>
                </li>
                   @endcan
                 @can('VerIglesia')
                <li class=" navigation-header"><span data-i18n="User Interface">DATOS DE LA CONGREGACIÓN</span><i data-feather="more-horizontal"></i>
                </li>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Administración</span></a>
                    <ul class="menu-content">
                  @can('VerIglesia')      
                     <li class="{{ Active::check('iglesia') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('/iglesia') }}" data-toggle="dropdown" data-i18n="iglesia"><i class="fas fa-building"></i><span data-i18n="iglesia">Iglesia</span></a>
                     </li>
                  @endcan
                   @can('VerDiaServicio')      
                        <li class="{{ Active::check('diaservicicio') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('diaservicicio') }}" data-toggle="dropdown" data-i18n="Colors"><i data-feather="shield"></i><span data-i18n="Colors">Días de servicios</span></a>
                        </li>  
                     @endcan
                   @can('VerTipoAporte')      
                         <li class="{{ Active::check('tipodeaporte') }} "><a class="dropdown-item d-flex align-items-center" href="{{ ('tipodeaporte') }}" data-toggle="dropdown" data-i18n="Chat"><i class="fas fa-dollar-sign"></i><span data-i18n="Chat">Tipo de aportes</span></a>
                        </li>
                    @endcan
                    @can('VerTipoLider')      
                         <li class="{{ Active::check('tipodelideres') }} "><a class="dropdown-item d-flex align-items-center" href="{{ ('tipodelideres') }}" data-toggle="dropdown" data-i18n="Chat"><i class="fas fa-church"></i><span data-i18n="Chat">Liderazgo eclesiástico</span></a>
                        </li>
                    @endcan
                    @can('VerSociedades')      
                         <li class="{{ Active::check('sociedades') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('sociedades') }}" data-toggle="dropdown" data-i18n="Colors"><i data-feather="home"></i><span data-i18n="Colors">Sociades</span></a>
                        </li> 
                     @endcan
                     @can('VerCargo')      
                        <li class="{{ Active::check('cargo') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('cargo') }}" data-toggle="dropdown" data-i18n="Colors"><i data-feather="shield"></i><span data-i18n="Colors">Cargos</span></a>
                        </li>  
                     @endcan
                     @can('VerTipoMiembro')      
                        <li class="{{ Active::check('tipodemiembro') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('tipodemiembro') }}" data-toggle="dropdown" data-i18n="Colors"><i data-feather="shield"></i><span data-i18n="Colors">Tipo de miembro</span></a>
                        </li>  
                     @endcan                   
                      </ul>
                      
                </li>
                @endcan
            @can('VerNacionalidades')
               <li class=" navigation-header"><span data-i18n="User Interface">CONTROLES PRINCIPALES</span><i data-feather="more-horizontal"></i>
                </li>
               
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-cog"></i><span class="menu-title text-truncate" data-i18n="User">Datos principales</span></a>
                    <ul class="menu-content">
                       @can('VerNacionalidades')      
                        <li class="{{ Active::check('nacionalidades') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('nacionalidades') }}" data-toggle="dropdown" data-i18n="Calendar"><i data-feather="calendar"></i><span data-i18n="Calendar">Nacionalidades</span></a>
                        </li>
                        @endcan
                        @can('VerTipoSangre')      
                         <li class="{{ Active::check('tipodesangre') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('tipodesangre') }}" data-toggle="dropdown" data-i18n="Calendar"><i class="fas fa-hospital"></i><span data-i18n="Calendar">Tipo de sangre</span></a>
                        </li>
                        @endcan
                        @can('VerGenero')      
                          <li class="{{ Active::check('genero') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('genero') }}" data-toggle="dropdown" data-i18n="Calendar"><i data-feather="user"></i><span data-i18n="Calendar">Géneros</span></a>
                        </li>
                        @endcan
                        @can('VerPais')      
                        <li class="{{ Active::check('paises') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('paises') }}" data-toggle="dropdown" data-i18n="Calendar"><i data-feather="map"></i><span data-i18n="Calendar">Países</span></a>
                        </li>
                        @endcan
                        @can('VerEstadoCivil')      
                         <li class="{{ Active::check('estadocivil') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('estadocivil') }}" data-toggle="dropdown" data-i18n="Calendar"><i class="fas fa-user-tie"></i><span data-i18n="Calendar">Estado Civil</span></a>
                         </li>
                        @endcan
                        @can('VerGradoInstruccion')      
                         <li class="{{ Active::check('gradoinstruccion') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('gradoinstruccion') }}" data-toggle="dropdown" data-i18n="Calendar"><i class="fas fa-user-graduate"></i><span data-i18n="Calendar">Grado de instrucción</span></a>
                        </li>
                        @endcan
                        @can('VerUsuario')      
                         <li class="{{ Active::check('estados') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('estados') }}" data-toggle="dropdown" data-i18n="Calendar"><i class="fas fa-map"></i><span data-i18n="Calendar">Estados del país</span></a>
                        </li>
                         <li class="{{ Active::check('municipios') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('municipios') }}" data-toggle="dropdown" data-i18n="Calendar"><i class="fab fa-google"></i><span data-i18n="Calendar">Municipios del país</span></a>
                        </li>
                         <li class="{{ Active::check('parroquias') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('parroquias') }}" data-toggle="dropdown" data-i18n="Calendar"><i class="fab fa-dashcube"></i><span data-i18n="Calendar">Parroquias del país</span></a>
                        </li>
                        @endcan
                    </ul> 
                </li>
               @endcan
                <li class=" navigation-header"><span data-i18n="User Interface">Interface de secretaría</span><i data-feather="more-horizontal"></i>
                </li>
                 <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="credit-card"></i><span class="menu-title text-truncate" data-i18n="Card">Registros generales</span></a>
                    <ul class="menu-content">
                       @can('RegistrarMiembro')
                         <li class="{{ Active::check('miembros') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('miembros') }}" data-toggle="dropdown" data-i18n="Calendar"><i class="fas fa-handshake"></i><span data-i18n="Calendar">Miembros</span></a>
                        </li>
                        @endcan
                        @can('VerHijo')
                        <li class="{{ Active::check('hijo') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('hijo') }}" data-toggle="dropdown" data-i18n="Calendar"><i class="fas fa-user-graduate"></i><span data-i18n="Calendar">Hijos</span></a>
                        </li>
                         @endcan
                         @can('VerMatrimonio')
                        <li class="{{ Active::check('matrimonio') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('matrimonio') }}" data-toggle="dropdown" data-i18n="Calendar"><i class="fas fa-user-graduate"></i><span data-i18n="Calendar">Matrimonios</span></a>
                        </li>
                         @endcan
                        @can('VerEstudioTeologico')
                        <li class="{{ Active::check('estudio') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('estudio') }}" data-toggle="dropdown" data-i18n="Calendar"><i class="fas fa-user-graduate"></i><span data-i18n="Calendar">Estudios teológicos</span></a>
                        </li>
                         @endcan
                        @can('VerLider')
                        <li class="{{ Active::check('lider') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('lider') }}" data-toggle="dropdown" data-i18n="Calendar"><i class="fas fa-user-graduate"></i><span data-i18n="Calendar">Líderes</span></a>
                        </li>
                         @endcan
                         @can('VerCampoBlanco')
                        <li class="{{ Active::check('campoblanco') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('campoblanco') }}" data-toggle="dropdown" data-i18n="Calendar"><i class="fas fa-user-graduate"></i><span data-i18n="Calendar">Campo Blanco</span></a>
                        </li>
                         @endcan
                    </ul>
                 </li>
                 @can('RegistrarAporte')
                 <li class=" navigation-header"><span data-i18n="User Interface">Interface de tesorería</span><i data-feather="more-horizontal"></i>
                 </li>
                 <li class=" nav-item "><a class="d-flex align-items-center" href="#"><i class="fas fa-coins"></i><span class="menu-title text-truncate" data-i18n="Card">Registros generales</span></a>
                    <ul class="menu-content">
                       @can('RegistrarAporte')
                         <li class="{{ Active::check('aportes') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('aportes') }}" data-toggle="dropdown" data-i18n="Calendar"><i class="fas fa-handshake"></i><span data-i18n="Calendar">Aportes</span></a>
                        </li>
                        @endcan
                         @can('RegistrarOfrenda')
                         <li class="{{ Active::check('ofrendas') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('ofrendas') }}" data-toggle="dropdown" data-i18n="Calendar"><i class="fas fa-church"></i><span data-i18n="Calendar">Ofrendas</span></a>
                        </li>
                        @endcan
                         @can('RegistrarGasto')
                         <li class="{{ Active::check('gastos') }} "><a class="dropdown-item d-flex align-items-center" href="{{ url('gastos') }}" data-toggle="dropdown" data-i18n="Calendar"><i class="fas fa-dollar-sign"></i><span data-i18n="Calendar">Gastos</span></a>
                        </li>
                        @endcan
                     </ul>
                  </li>
                @endcan
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

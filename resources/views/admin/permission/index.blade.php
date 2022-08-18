@extends('layouts.admin')

@section('title', 'PERMISOS')
@section('page_title', 'PERMISOS')


@section('content')
      <div class="row">
        <div class="col-md-12">
            <div class="card card-line-primary">
              <div class="card-header">
                <h2 class="card-title">Permisos del rol</h2> <h3 class="float-right ml-4">({{$role->name}})</h3>
                <div class="card-tools"></div>
              </div>
              <div class="card-body table-responsive table-striped">
              <form role="form" id="main-form">
                  <input type="hidden" id="_url" value="{{ url('permission', [$role->name]) }}">
                  <input type="hidden" id="_token" value="{{ csrf_token() }}">
                  <input type="hidden" value="{{$role->name}}" name="rolename">
                  <table class="table table-responsive">
                   
                    <tr>
                      
                      <td>
                        Ver usuarios<br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerUsuario" {{ $role->hasPermissionTo('VerUsuario') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Agregar usuarios</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarUsuario" {{ $role->hasPermissionTo('RegistrarUsuario') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Editar usuarios</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarUsuario" {{ $role->hasPermissionTo('EditarUsuario') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Eliminar usuarios</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarUsuario" {{ $role->hasPermissionTo('EliminarUsuario') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Ver logins</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerLogins" {{ $role->hasPermissionTo('VerLogins') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                     
                      <td>
                        Asignar permisos</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="AsignarPermisos" {{ $role->hasPermissionTo('AsignarPermisos') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Ver Permisos</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerPermisos" {{ $role->hasPermissionTo('VerPermisos') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                       <td>
                        Registrar Permisos</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="CrearPermisos" {{ $role->hasPermissionTo('CrearPermisos') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Editar Permisos</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarPermisos" {{ $role->hasPermissionTo('EditarPermisos') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Eliminar Permisos</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarPermisos" {{ $role->hasPermissionTo('EliminarPermisos') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Ver Roles</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerRole" {{ $role->hasPermissionTo('VerRole') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Registrar Roles</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarRole" {{ $role->hasPermissionTo('RegistrarRole') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Editar Roles</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarRole" {{ $role->hasPermissionTo('EditarRole') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                        <td>
                        Eliminar Roles</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarRole" {{ $role->hasPermissionTo('EliminarRole') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                       <td>
                        Ver Iglesia</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerIglesia" {{ $role->hasPermissionTo('VerIglesia') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Registrar Iglesia</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarIglesia" {{ $role->hasPermissionTo('RegistrarIglesia') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Editar Iglesia</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarIglesia" {{ $role->hasPermissionTo('EditarIglesia') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                        <td>
                        Eliminar Iglesia</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarIglesia" {{ $role->hasPermissionTo('EliminarIglesia') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                        <td>
                        Ver Tipo de Aportes</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerTipoAporte" {{ $role->hasPermissionTo('VerTipoAporte') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                        <td>
                        Registrar Tipo de Aportes</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarTipoAporte" {{ $role->hasPermissionTo('RegistrarTipoAporte') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                        <td>
                        Editar Tipo de Aportes</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarTipoAporte" {{ $role->hasPermissionTo('EditarTipoAporte') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                    <tr>
                      <td>
                        Eliminar Tipo de Aportes</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarTipoAporte" {{ $role->hasPermissionTo('EliminarTipoAporte') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Ver Cargos</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerCargo" {{ $role->hasPermissionTo('VerCargo') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Registrar Cargo</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarCargo" {{ $role->hasPermissionTo('RegistrarCargo') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Editar Cargo</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarCargo" {{ $role->hasPermissionTo('EditarCargo') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Eliminar Cargo</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarCargo" {{ $role->hasPermissionTo('EliminarCargo') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Ver Nacionalidades</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerNacionalidades" {{ $role->hasPermissionTo('VerNacionalidades') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Registrar Nacionalidades</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarNacionalidades" {{ $role->hasPermissionTo('RegistrarNacionalidades') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                       <td>
                        Editar Nacionalidades</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarNacionalidades" {{ $role->hasPermissionTo('EditarNacionalidades') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Eliminar Nacionalidades</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarNacionalidades" {{ $role->hasPermissionTo('EliminarNacionalidades') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Ver Tipo de sangre</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerTipoSangre" {{ $role->hasPermissionTo('VerTipoSangre') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Registrar Tipo de sangre</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarTipoSangre" {{ $role->hasPermissionTo('RegistrarTipoSangre') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Editar Tipo de sangre</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarTipoSangre" {{ $role->hasPermissionTo('EditarTipoSangre') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Eliminar Tipo de sangre</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarTipoSangre" {{ $role->hasPermissionTo('EliminarTipoSangre') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Ver Genero</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerGenero" {{ $role->hasPermissionTo('VerGenero') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                    </tr>
                    <td>
                        Registrar Genero</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarGenero" {{ $role->hasPermissionTo('RegistrarGenero') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Editar Genero</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarGenero" {{ $role->hasPermissionTo('EditarGenero') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Eliminar Genero</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarGenero" {{ $role->hasPermissionTo('EliminarGenero') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                        Ver Pais</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerPais" {{ $role->hasPermissionTo('VerPais') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Registrar Pais</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarPais" {{ $role->hasPermissionTo('RegistrarPais') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Editar Pais</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarPais" {{ $role->hasPermissionTo('EditarPais') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Eliminar Pais</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarPais" {{ $role->hasPermissionTo('EliminarGenero') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Ver Estado Civil</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerEstadoCivil" {{ $role->hasPermissionTo('VerEstadoCivil') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Registrar Estado Civil</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarEstadoCivil" {{ $role->hasPermissionTo('RegistrarEstadoCivil') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Editar Estado Civil</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarEstadoCivil" {{ $role->hasPermissionTo('EditarEstadoCivil') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Eliminar Estado Civil</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarEstadoCivil" {{ $role->hasPermissionTo('EliminarGenero') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Ver Grado de Instruccion</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerGradoInstruccion" {{ $role->hasPermissionTo('VerGradoInstruccion') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Registrar Grado de Instruccion</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarGradoInstruccion" {{ $role->hasPermissionTo('RegistrarGradoInstruccion') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                        Editar Grado de Instruccion</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarGradoInstruccion" {{ $role->hasPermissionTo('EditarGradoInstruccion') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                       Eliminar Grado de Instruccion</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarGradoInstruccion" {{ $role->hasPermissionTo('EliminarGradoInstruccion') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                       Ver Iglesia</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerIglesia" {{ $role->hasPermissionTo('VerIglesia') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                       Registrar Iglesia</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarIglesia" {{ $role->hasPermissionTo('RegistrarIglesia') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                       Editar Iglesia</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarIglesia" {{ $role->hasPermissionTo('EditarIglesia') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                       Eliminar Iglesia</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarIglesia" {{ $role->hasPermissionTo('EliminarIglesia') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                        <td>
                       Ver Tipos de Aporte</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerTipoAporte" {{ $role->hasPermissionTo('VerTipoAporte') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                        <td>
                       Registrar Tipos de Aporte</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarTipoAporte" {{ $role->hasPermissionTo('RegistrarTipoAporte') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <tr>
                         <td>
                       Editar Tipos de Aporte</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarTipoAporte" {{ $role->hasPermissionTo('EditarTipoAporte') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                       Eliminar Tipos de Aporte</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarTipoAporte" {{ $role->hasPermissionTo('EliminarTipoAporte') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                        <td>
                       Ver Sociedades</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerSociedades" {{ $role->hasPermissionTo('VerSociedades') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                        <td>
                       Registrar Sociedades</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarSociedades" {{ $role->hasPermissionTo('RegistrarSociedades') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                        <td>
                       Editar Sociedades</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarSociedades" {{ $role->hasPermissionTo('EditarSociedades') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                        <td>
                       Eliminar Sociedades</br>
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarSociedades" {{ $role->hasPermissionTo('EliminarSociedades') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                       Ver Cargo
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerCargo" {{ $role->hasPermissionTo('VerCargo') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <tr>
                        <td>
                         Registrar Cargo
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarCargo" {{ $role->hasPermissionTo('RegistrarCargo') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                       Editar Cargo
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarCargo" {{ $role->hasPermissionTo('EditarCargo') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      <td>
                       Eliminar Cargo
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarCargo" {{ $role->hasPermissionTo('EliminarCargo') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                       Ver Clase de Miembro
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerTipoMiembro" {{ $role->hasPermissionTo('VerTipoMiembro') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                       Registrar Clase de Miembro
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarTipoMiembro" {{ $role->hasPermissionTo('RegistrarTipoMiembro') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                       Editar Clase de Miembro
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarTipoMiembro" {{ $role->hasPermissionTo('EditarTipoMiembro') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                       Eliminar Clase de Miembro
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarTipoMiembro" {{ $role->hasPermissionTo('EliminarTipoMiembro') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      </tr>
                      <tr>
                         <td>
                       Ver Miembros
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="VerMiembro" {{ $role->hasPermissionTo('VerMiembro') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                       Registrar Miembros
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="RegistrarMiembro" {{ $role->hasPermissionTo('RegistrarMiembro') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                       Editar Miembros
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EditarMiembro" {{ $role->hasPermissionTo('EditarMiembro') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                       <td>
                       Eliminar Miembros
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox" name="permissions[]" value="EliminarMiembro" {{ $role->hasPermissionTo('EliminarMiembro') ? 'checked' : '' }}>
                          </label>
                        </div>
                      </td>
                      </tr>
                     
                  
                    
                    
                    <br>
                
                     
                      
                  </table>
                  <div class="card-footer clearfix"></div>
                  <div class="form-group pading">
                     <label for="name">Contraseña actual</label>
                     <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Contraseña actual">
                     <span class="missing_alert text-danger" id="current_password_alert"></span>
                    </div>
                    <button type="submit" class="btn blue darken-4 text-white ajax form-control" id="submit">
                      <i id="ajax-icon" class="fa fa-edit"></i> Editar
                    </button>
                  </div>
                </form>
            </div>
          </div>
      </div>



@endsection
@push('scripts')
 
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
   
  <script src="{{ asset('js/admin/permission/index.js') }}"></script>
@endpush

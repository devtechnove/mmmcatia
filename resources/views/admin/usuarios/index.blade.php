@extends('layouts.admin')
@section('title','USUARIOS')
@section('breadcrumb','USUARIOS')
@section('content')
 <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Usuarios</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a>
                        </li>
                        <li class="breadcrumb-item"><a >Seguridad</a>
                        </li>
                        <li class="breadcrumb-item active"> Listado de Usuarios
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div><br>

   <button type="button" class="btn blue darken-4 text-white btn-primary float-left btn-md"  data-toggle="modal" data-target="#CrearUsuario"><i class="fas fa-plus-square"  data-bs-toggle="tooltip" data-bs-placement="top" title="Crear nuevo Usuario" data-container="body" data-animation="true"></i>
                    Nuevo usuario
            </button><br><br><br>
          <div class="row">
              <div class="col-lg-12">
                    <div class="card card-line-primary">
                          <div class="card-header">
                            <h4 class="card-title">Listado de usuarios</h4>
                          </div>
                          <div class="card-body">
                            <div class="">
                              <table id="tableExport" class="display table table-striped table-hover table-responsive table-sm" >
                                <thead>
                                  <tr>
                                    <th></th>
                                    <th>Nombre completo</th>
                                    <th>Usuario</th>
                                    <th>Correo electrónico</th>
                                    <th>Role</th>
                                    <th>Estado</th>
                                    <th>Creado</th>
                                    <th>Opciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($users as $element)
                                    <tr>
                                      <td>{{ $element->id }}</td>
                                      <td>{{ $element->display_name }}</td>
                                      <td>{{ $element->username }}</td>
                                      <td>{{ $element->email }}</td>
                                      <td>{!! $element->hasRole('Super Administrador') ? '<b>Administrador</b>' : 'Usuario' !!}</td>
                                      <td>
                                        <span class="badge text-white {{ $element->status ? 'green' : 'red' }}">{{ $element->display_status }}</span>
                                      </td>
                                      <td>
                                        {{ $element->created_at->diffForHumans()  }} 
                                      </td>
                                     
                                      <td>

                                      <button class="btn btn-flat-primary dropdown-toggle" type="button" id="dropdownMenuButton100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Opciones
                                     </button>
                                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton100">
                                      @if(Auth::user()->hasrole('Super Administrador') && Auth::user()->id != $element->id)
                                      <a  class=" dropdown-item" data-toggle="modal" data-target="#EditarUsuario{{ $element->id }}">
                                        <span class="btn-inner--icon"><i class="mdi mdi-pencil"  data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Usuario" data-container="body" data-animation="true"></i>
                                        Modificar datos</span>
                                      </a>
                                      @endif

                                      </div>

                                    </td>
                                     
                                    </tr>
                                     @include('admin.usuarios.partials.modal.edit')
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
        @include('admin.usuarios.partials.modal.create')


@endsection

 
 

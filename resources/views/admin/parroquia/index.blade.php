@extends('layouts.admin')
@section('title','PARROQUIAS')
@section('breadcrumb','PARROQUIAS')
@section('content')
<div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Parroquias</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a>
                        </li>
                        <li class="breadcrumb-item"><a >Datos principales</a>
                        </li>
                        <li class="breadcrumb-item active"> Listado de las parroquias del país
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div><br>
  <button type="button" class="btn blue darken-4 text-white btn-primary float-left btn-md"  data-toggle="modal" data-target="#CrearUsuario"><i class="fas fa-plus-square"  data-bs-toggle="tooltip" data-bs-placement="top" title="Crear nuevo Usuario" data-container="body" data-animation="true"></i>
        Nueva Parroquia
  </button><br><br><br>
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-line-primary">
            <div class="card-header">
              <h4 class="card-title">Listado de parroquias del país</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="tableExport" class="display table table-striped table-hover" >
                  <thead>
                    <tr>
                     <th>#</th>
                      <th>Municipio</th>
                      <th>Parroquia</th>
                      <th>Estado</th>
                      <th>Creado</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($academias as $element)
                      <tr>
                        <td>{{ $element->id }}</td>
                        <td>{{ $element->municipios->municipio }}</td>
                        <td>{{ $element->parroquia }}</td>
                        @if ($element->status == 1)
                          <td>
                             <span class="badge green text-white">Activo</span>
                          </td>
                          @else
                          <td> <span class="badge red text-white">Deshabilitado</span></td>
                        @endif
                        <td>
                          {{ $element->created_at->diffForHumans()  }} 
                        </td>
                       
                        <td>
                          
                          <button type="button" class="btn btn-round green darken-3 text-white" data-toggle="modal" data-target="#EditarUsuario{{ $element->id }}">
                          <span class="btn-inner--icon"><i class="mdi mdi-pencil"  data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Usuario" data-container="body" data-animation="true"></i></span>
                        </button>
                        
                      </td>
                       
                      </tr>
                       @include('admin.parroquia.partials.modal.edit')
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
  </div>
  @include('admin.parroquia.partials.modal.create')

@endsection

 
 
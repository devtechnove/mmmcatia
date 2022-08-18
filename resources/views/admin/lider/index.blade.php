@extends('layouts.admin')
@section('title','LIDERES')
@section('breadcrumb','LIDERES')
@section('content')
 <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">LIDERES</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a>
                        </li>
                        <li class="breadcrumb-item"><a >Congregación</a>
                        </li>
                        <li class="breadcrumb-item active"> Listado de los líderes de la congregación
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div><br>
  <button type="button" class="btn blue darken-4 text-white btn-primary float-left btn-md"  data-toggle="modal" data-target="#CrearUsuario"><i class="fas fa-plus-square"  data-bs-toggle="tooltip" data-bs-placement="top" title="Crear nuevo Usuario" data-container="body" data-animation="true"></i>
        Nuevo Líder
  </button><br><br><br>
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-line-primary">
            <div class="card-header">
              <h4 class="card-title">Listado de líderes de la congregación</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="tableExport" class="display table table-striped table-hover" >
                  <thead>
                    <tr>
                     <th>#</th>
                      <th>Miembro</th>
                      <th>Cargo</th>
                      <th>Año de desempeño</th>
                      <th>Estado</th>
                      <th>Creado</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($academias as $element)
                      <tr>
                        <td>{{ $element->id }}</td>
                        <td>{{ $element->miembro->display_name }}</td> 
                        <td>{{ $element->liderazgo->name }}</td> 
                        <td>{{ $element->ano_ingreso }}</td> 
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
                       @include('admin.lider.partials.modal.edit')
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
  </div>
  @include('admin.lider.partials.modal.create')

@endsection

 
 
@extends('layouts.admin')
@section('title','ESTUDIOS')
@section('breadcrumb','ESTUDIOS')
@section('content')
 <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Estudios Teológicos</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a>
                        </li>
                        <li class="breadcrumb-item"><a >Congregación</a>
                        </li>
                        <li class="breadcrumb-item active"> Listado de los estudios teológicos
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div><br>
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-line-primary">
            <div class="card-header">
              <h4 class="card-title">Listado de los estudios teológicos</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="tableExport" class="display table table-striped table-hover" >
                  <thead>
                    <tr>
                     <th>#</th>
                     <th>Miembro</th>
                      <th>¿Estudios teológicos?</th>
                      <th>Nombre del intituto</th>
                      <th>Tiempo de estudio</th>
                      <th>Título obtenido</th>
                      <th>Creado</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($estudio as $element)
                      <tr>
                        <td>{{ $element->id }}</td>
                        <td>{{ $element->miembro->display_name }}</td>
                        <td>{{ $element->estudio_teologico }}</td>
                        <td>{{ $element->nombre_instituto }}</td>
                        <td>{{ $element->tiempo_instituto }}</td>
                        <td>{{ $element->titulo_instituto }}</td>
                        <td>
                          {{ $element->created_at->diffForHumans()  }} 
                        </td>
                       
                        <td>
                          
                          <button type="button" class="btn btn-round green darken-3 text-white" data-toggle="modal" data-target="#EditarUsuario{{ $element->id }}">
                          <span class="btn-inner--icon"><i class="mdi mdi-pencil"  data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Usuario" data-container="body" data-animation="true"></i></span>
                        </button>
                        
                      </td>
                       
                      </tr>
                       @include('admin.estudio.partials.modal.edit')
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
  </div>
  @include('admin.estudio.partials.modal.create')

@endsection

 
 
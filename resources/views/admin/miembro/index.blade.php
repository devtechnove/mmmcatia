@extends('layouts.admin')

@section('title', 'MIEMBROS')
@section('page_title', 'MIEMBROS')
@section('content')
 <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Miembros</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a>
                        </li>
                        <li class="breadcrumb-item active"><a  href="{{ url('/miembros') }}" >Listado de miembros</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ ('/miembros/create') }}" class="mb-1 btn btn-sm blue darken-4 text-white"> Registrar nuevo miembro de la congregación</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div><br> 
    <div class="row">
  <div class="col-12">
    <div class="card card-line-primary">
      <div class="card-header">
        <h3>Listado miembros de la congregación</h3>
      </div>
      <!-- /.card-header -->
          <div class="card-body">
             <br>
          <table id="tableExport" class="table table-striped table-responsive" style="width:100%">
              <thead>
              <tr>
              <th>Foto</th>
              <th>Nombre completo</th>
              <th>Cédula</th>
              <th>Teléfono</th>
              <th>Estado del miembro</th>
              <th>Sociedad</th>
              <th>Edad</th>
              <th>Opciones</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($miembros as $element)
              <tr class="row{{ $element->id }}">
              <td>
                  @if ($element->foto <> null)
                      <img src="{{ asset('/images/miembros/'.$element->foto) }}" alt="" height="70">
                  @endif
              </td>
              <td>{{ $element->name  }} {{ $element->lastname  }}</td>
              <td>{{ $element->documento }}</td>
              <td>{{ $element->telefono }}</td>
              @if ($element->status == 1)
                <td>
                  <span class="badge green darken-3">
                    Activo
                  </span>
                </td>
                @else
                 <td>
                  <span class="badge red darken-3">
                    Inactivo
                  </span>
                </td>
              @endif
             <td>
                {{ $element->sociedad->name }}
              </td>
              <td>{{ $element->edad }}</td>
              <td>
                 <button class="btn btn-flat-primary dropdown-toggle" type="button" id="dropdownMenuButton100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Opciones
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton100">
                         <a href="{{ url('miembros/'.$element->id.'/planilla') }}" class=" dropdown-item"  data-toggle="tooltip" data-placement="top" title="Impresión de planilla">
                            <i class="zmdi zmdi-print"  data-toggle="tooltip" data-placement="top" title="Impresión de planilla" data-container="body" data-animation="true"></i>
                         Impresión de planilla</a>
                         <a href="{{ url('miembros/edit/'.$element->id) }}" class=" dropdown-item"  data-toggle="tooltip" data-placement="top" title="Modificar datos del miembro">
                            <i class="zmdi zmdi-edit"  data-toggle="tooltip" data-placement="top" title="¿Tiene estudios teológicos?" data-container="body" data-animation="true"></i>
                         Modificar datos</a>
                        <a  class="dropdown-item" data-toggle="modal" data-target="#EstudioTeologico{{ $element->id }}">
                        <span class="btn-inner--icon"><i class="zmdi zmdi-graduation-cap"  data-toggle="tooltip" data-placement="top" title="¿Tiene estudios teológicos?" data-container="body" data-animation="true"></i></span>
                        Estudios teológicos
                        </a>
                         <a href="{{ url('hijo',$element->id) }}" class="dropdown-item"  data-toggle="tooltip" data-placement="top" title="Ingresar hijos del miembro"> <span class="mdi mdi-baby-carriage"></span>
                            Hijos
                         </a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#Matrimonio{{ $element->id }}"> <span class="fas fa-ring" data-toggle="tooltip" data-placement="top" title="¿Está casado(a)?" data-container="body" data-animation="true"></span>
                            Está casado(a)?
                        </a>
                        <a href="{{ url('miembros/'.$element->id.'/foto') }}" class=" dropdown-item"  data-toggle="tooltip" data-placement="top" title="Capturar foto del miembro">
                            <i class="zmdi zmdi-camera"  data-toggle="tooltip" data-placement="top" title="Capturar foto" data-container="body" data-animation="true"></i>
                         Capturar foto</a>
            </div>
              </td>
              @include('admin.miembro.partials.modal.estudio')
              @include('admin.miembro.partials.modal.matrimonio')
              @endforeach
              
              </tbody> 
                            
          </table>
          </div>
          <!-- /.card-body -->
      </div>
    </div>
  </div>
</div>



@endsection

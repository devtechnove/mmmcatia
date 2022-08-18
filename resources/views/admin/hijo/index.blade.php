@extends('layouts.admin')

@section('title', 'MIEMBROS')
@section('page_title', 'MIEMBROS')
@section('content')
 <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Hijos</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a>
                        </li>
                        <li class="breadcrumb-item active"><a  href="{{ url('hijo') }}" >Listado de hijos</a>
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
        <h3>Listado de hijos en la congregación</h3>
      </div>
      <!-- /.card-header -->
          <div class="card-body table-responsive">
             <br>
          <table id="tableExport" class="table table-striped " style="width:100%">
              <thead>
              <tr>
              <th>#</th>
              <th>Padre</th>
              <th>Nombre completo</th>
              <th>Cédula</th>
              <th>Teléfono</th>
              <th>Clase de miembro</th>
              <th>Estado del miembro</th>
              <th>Sociedad</th>
              <th>Opciones</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($miembros as $element)
              <tr class="row{{ $element->id }}">
              <td>{{ $element->id }}</td>
              <td>{{ $element->padre->display_name }}</td>
              <td>{{ $element->name  }} {{ $element->lastname  }}</td>
              <td>{{ $element->documento }}</td>
              <td>{{ $element->telefono }}</td>
              <td>{{ $element->tipodemiembro->name }}</td>
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
              <td>
                <a href="{{ url('hijo/edit/'.$element->id) }}" class="btn btn-warning btn-round orange darken-3"  data-toggle="tooltip" data-placement="top" title="Modificar datos de un hijo"> <span class="mdi mdi-pencil text-white"></span></a>
              
              </td>
              @include('admin.miembro.partials.modal.estudio')
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

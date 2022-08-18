@extends('layouts.admin')

@section('title', 'CAMPOS BLANCOS')
@section('page_title', 'CAMPOS BLANCOS')
@section('content')
 <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Campos Blancos</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a>
                        </li>
                        <li class="breadcrumb-item active"><a  href="{{ url('campoblanco') }}" >Listado de Campos Blancos</a>
                        </li>
                        
                    </ol>
                </div>
            </div>
        </div>
    </div><br> 
   <a href="{{ ('/campoblanco/create') }}" class="mb-1 btn btn-sm blue darken-4 text-white"> Registrar nuevo campo blanco de la congregación</a>
 
    <div class="row">
  <div class="col-12">
    <div class="card card-line-primary">
      <div class="card-header">
        <h3>Listado campos blancos de la congregación</h3>
      </div>
      <!-- /.card-header -->
          <div class="card-body table-responsive">
             <br>
          <table id="tableExport" class="table table-striped " style="width:100%">
              <thead>
              <tr>
              <th>#</th>
              <th>Encargado</th>
              <th>Campo blanco</th>
              <th>Año de fundación</th>
             
              <th>Estado del campo blanco</th>
              
              <th>Opciones</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($miembros as $element)
              <tr class="row{{ $element->id }}">
              <td>{{ $element->id }}</td>
              <td>{{ $element->miembro->display_name  }}</td>
              <td>{{ $element->name }}</td>
              <td>{{ $element->ano_fundada }}</td>
             
              
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
                <a href="{{ url('campoblanco/edit/'.$element->id) }}" class="btn btn-warning btn-round orange darken-3"  data-toggle="tooltip" data-placement="top" title="Modificar datos del campo blanco"> <span class="mdi mdi-pencil text-white"></span></a>

                @php
                  $detalle = App\Models\DetalleCampoBlanco::where('campo_blanco_id', $element->id)->first()
                @endphp
                
                 @if ($detalle <> null )
                   <a href="{{ url('campoblanco/verdetalle/'.$detalle->id) }}" class="btn btn-danger btn-round red darken-3"  data-toggle="tooltip" data-placement="top" title="Ver detalles del campo blanco"> <span class="mdi mdi-book text-white"></span></a>
                   @else
                   <a href="{{ url('campoblanco/detalle/'.$element->id) }}" class="btn btn-success btn-round green darken-3"  data-toggle="tooltip" data-placement="top" title="Ingresar detalles del campo blanco"> <span class="mdi mdi-book-open text-white"></span></a>
                 @endif
                
              </td>
                   @include('admin.campoblanco.partials.modal.detalle')
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

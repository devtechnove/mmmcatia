@extends('layouts.admin')

@section('title', 'MATRIMONIOS')
@section('page_title', 'MATRIMONIOS')
@section('content')
 <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Matrimonios</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a>
                        </li>
                        <li class="breadcrumb-item active"><a  href="{{ url('/matrimonio') }}" >Listado de los matrimonios</a>
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
        <h3>Listado de matrimonios en la congregación</h3>
      </div>
      <!-- /.card-header -->
          <div class="card-body table-responsive">
             <br>
          <table id="tableExport" class="table table-striped " style="width:100%">
              <thead>
              <tr>
              <th>#</th>
              <th>Nombre completo del miembro</th>
              <th>Tiempo de casado</th>
              <th>Fecha de casamiento</th>
              <th>Opciones</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($matrimonio as $element)
              <tr class="row{{ $element->id }}">
              <td>{{ $element->id }}</td>
              <td>{{ $element->miembro->display_name }}</td>
              <td>{{ $element->tiempo_casado }}</td>
              <td>{{$element->fecha_casamiento}}</td>
              <td>
             
                
                <a class="btn btn-round green darken-3 text-white" data-toggle="modal" data-target="#Matrimonio{{ $element->id }}"> <span class="fas fa-ring text-white" data-toggle="tooltip" data-placement="top" title="¿Editar datos del casado(a)?" data-container="body" data-animation="true"></span></a>
              </td>
              @include('admin.miembro.partials.modal.matrimonioedit')
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

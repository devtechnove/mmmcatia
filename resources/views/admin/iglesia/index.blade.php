@extends('layouts.admin')
@section('title','ACADEMIA')
@section('breadcrumb','ACADEMIA')
@section('content')
 <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Congregación</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a>
                        </li>
                        <li class="breadcrumb-item"><a >Congregación</a>
                        </li>
                        <li class="breadcrumb-item active"> Datos de la congregación
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
                            <h4 class="card-title">Listado de la academia</h4>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table id="tableExport" class="display table table-striped table-hover" >
                                <thead>
                                  <tr>
                                    <th>Logo</th>
                                    <th>Nombre completo</th>
                                    <th>Sede</th>
                                    <th>Correo electrónico</th>
                                    <th>Teléfono</th>
                                    <th>Creado</th>
                                    <th>Opciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($users as $element)
                                    <tr>
                                      <td><img src="{{ asset('/images/logo/'.$element->logo ) }}" width="100" alt=""></td>
                                      <td>{{ $element->name }}</td>
                                      <td>{{ $element->direccion }}</td>
                                      <td>{{ $element->email }}</td>
                                      
                                      <td>
                                      {{ $element->telefono }}
                                      </td>
                                      <td>
                                        {{ $element->created_at->diffForHumans()  }} 
                                      </td>
                                     
                                      <td> 
                                        
                                        <button type="button" class="btn btn-round green darken-3 text-white" data-toggle="modal" data-target="#EditarUsuario{{ $element->id }}">
                                        <span class="btn-inner--icon"><i class="mdi mdi-pencil"  data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Usuario" data-container="body" data-animation="true"></i></span>
                                      </button>
                                      
                                    </td>
                                     
                                    </tr>
                                     @include('admin.iglesia.partials.modal.edit')
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
        @include('admin.iglesia.partials.modal.create')

@endsection

 
 
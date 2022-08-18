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
                        <li class="breadcrumb-item"><a  href="{{ url('hijo') }}" >Listado de hijos</a>
                        </li>
                        <li class="breadcrumb-item active"> Editar datos del hijo de {{ $miembros->padre->display_name }}
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
        <h3>Editar datos del hijo de <b>{{ $miembros->padre->display_name }}</b></h3>
      </div>
      <div class="card-body">
       {!! Form::model($miembros, ['route' => ['hijo.update',$miembros->id],'method' => 'PUT','enctype'=>'multipart/form-data']) !!}
        @include('admin.hijo.partials.input.form')

        <br><br>
       
      
      <div class="card-footer">
         <button type="submit" class="btn blue darken-4 text-white form-control">Guardar cambios</button>
            {!! Form::close()!!}
      </div>
      </div>
    </div>
  </div>
</div>



@endsection

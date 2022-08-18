 @extends('layouts.admin')

@section('title', 'MIEMBROS')
@section('page_title', 'MIEMBROS')
@section('content')
 <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Detalles del Campo Blanco</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a>
                        </li>
                        <li class="breadcrumb-item"><a  href="{{ url('campoblanco') }}" >Listado de campos blancos</a>
                        </li>
                        <li class="breadcrumb-item active"> Registrar detalles del campo blanco
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
        <h3>Detalles cargados del campo blanco</h3>
      </div>
      <div class="card-body">
        {!! Form::model($element, ['route' => ['cargo.update',$element->id],'method' => 'PUT','enctype'=>'multipart/form-data']) !!}
        @include('admin.campoblanco.partials.input.verdetalle')

        <br><br>
       
      
      <div class="card-footer">
        
          {!! Form::close()!!}  
      </div>
      </div>
    </div>
  </div>
</div>



@endsection

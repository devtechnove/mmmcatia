@php
  $estados = App\Models\Estados::pluck('name','id')
@endphp
<div class="row">
   <div class="col-6">
    <label>Estado del pais: </label>
     <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('estado_id', $estados, null, ['class' => 'form-control ']) !!}
     </div>
 </div>
  <div class="col-6">
    <label>Descripción: </label>
      <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user"></i></span>
        </div>
       {!! Form::text('municipio',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Descripción']) !!}
    </div>
  </div>
 <div class="col-12 text-center">
    <label class="font-weight-bolder" for="status">Estado del municipio</label>
    <div class="checkbox icheck">
      <label class="font-weight-bolder">
        <input type="radio" name="status" value="1" checked> Activo&nbsp;&nbsp;
        <input type="radio" name="status" value="0"> Deshabilitado
      </label>
    </div>
  </div>
</div>

@push('scripts')
    
   
@endpush

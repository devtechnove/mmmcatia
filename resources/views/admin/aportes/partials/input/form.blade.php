@php
  $estados = App\Models\TipoAporte::pluck('name','id')
@endphp
<div class="row">
   <div class="col-4">
    <label>Tipo de aportes: </label>
     <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('tipo_aporte_id', $estados, null, ['class' => 'form-control ']) !!}
     </div>
 </div>
 <div class="col-4">
    <label>Fecha del aporte: </label>
     <div class="input-group input-group-merge mb-2">
        
     {!! Form::date('fecha',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Lugar de nacimiento']) !!}

     </div>
 </div>
 <div class="col-4">
    <label>Cantidad del aporte: </label>
     <div class="input-group input-group-merge mb-2">
        
     {!! Form::text('total_pagar',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Cantidad del aporte']) !!}

     </div>
 </div>

   <div class="col-12">
       <label for="textarea-counter">Descripción del aporte</label>
        <div class="form-label-group mb-0">
            
             {!! Form::textarea('tx_descripcion',null,['class'=>'form-control char-textarea', 'required' => 'required','autocomplete' =>'off','id' =>'textarea-counter',' data-length' => '100','rows'=>'1']) !!}
         
        </div>
        <small class="textarea-counter-value float-right"><span class="char-count">0</span> / 100 </small>
    </div>

 <div class="col-12 text-center">
    <label class="font-weight-bolder" for="status">Estado del aporte</label>
    <div class="checkbox icheck">
      <label class="font-weight-bolder">
        <input type="radio" name="status" value="1" checked> Recibido&nbsp;&nbsp;
        <input type="radio" name="status" value="0"> Deshabilitado
      </label>
    </div>
  </div>
</div>

@push('scripts')
    
   
@endpush

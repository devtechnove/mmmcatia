<div class="row">
  <div class="col-6">
    <label>Servicio: </label>
      <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user"></i></span>
        </div>
       {!! Form::text('name',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Servicio']) !!}
    </div>
  </div>
   <div class="col-6">
    <label>Día del servicio: </label>
      <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-calendar"></i></span>
        </div>
       {!! Form::text('dia_servicio',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Servicio']) !!}
    </div>
  </div>
   <div class="col-6">
    <label>Hora de inicio del servicio: </label>
      <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-clock"></i></span>
        </div>
       {!! Form::text('hora_inicio_servicio',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Hora de inicio del servicio']) !!}
    </div>
  </div>
   <div class="col-6">
    <label>Hora de fin del servicio: </label>
      <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-clock"></i></span>
        </div>
       {!! Form::text('hora_fin_servicio',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Hora de fin del servicio']) !!}
    </div>
  </div>
 <div class="col-12 text-center">
    <label class="font-weight-bolder" for="status">Estado del servicio</label>
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

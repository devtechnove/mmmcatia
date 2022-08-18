<div class="row">
  @php
    $cargo = App\Models\TipoLider::where('status',1)->pluck('name','id');
    $miembro = App\Models\Miembro::where('status',1)->pluck('name','id')
  @endphp
  <div class="col-6">
    <label>Miembro de la congregación: </label>
     <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('miembro_id', $miembro, null, ['class' => 'form-control ']) !!}
     </div>
 </div>
 <div class="col-6">
    <label>Liderazgo de la congregación: </label>
     <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('tipo_lider_id', $cargo, null, ['class' => 'form-control ']) !!}
     </div>
 </div>
 <div class="col-12">
    <label>Año de ingreso: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-calendar"></i></span>
        </div>
       {!! Form::text('ano_ingreso',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Año de ingreso']) !!}
    </div>
  </div>
 <div class="col-12 text-center">
    <label class="font-weight-bolder" for="status">Estado del liderazgo</label>
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

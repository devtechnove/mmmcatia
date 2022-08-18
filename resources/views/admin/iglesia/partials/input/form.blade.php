<div class="row">
  <div class="col-6">
    <label>Nombre de la academia: </label>
   <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-home"></i></span>
        </div>
       {!! Form::text('name',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Apellidos']) !!}
    </div>
  </div>
   <div class="col-6">
    <label>Sede: </label>
   <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-building"></i></span>
        </div>
       {!! Form::text('direccion',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Apellidos']) !!}
    </div>
  </div>
  <div class="col-6">
    <label>Correo: </label>
   <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2">@</span>
        </div>
       {!! Form::text('email',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Apellidos']) !!}
    </div>
  </div>
    <div class="col-6">
    <label>Teléfono: </label>
   <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-phone"></i></span>
        </div>
       {!! Form::text('telefono',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Apellidos']) !!}
    </div>
  </div>
  
   <div class="col-12">
    <label>Teléfono: </label>
   <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fab fa-google"></i></span>
        </div>
        <input type="file" style="font-size: 15px;" class="form-control" id="logo" name="logo" placeholder="Contraseña">
    </div>
  </div>
 
 
</div>

@push('scripts')

   
@endpush

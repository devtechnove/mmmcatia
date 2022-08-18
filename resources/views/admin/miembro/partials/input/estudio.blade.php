<div class="row">
	<div class="col-12">
		<label for="">¿Tiene estudios teológicos?</label>
		<select name="estudio_teologico"class="form-control">
			<option value="">Seleccione</option>
			<option value="Si">Si</option>
			<option value="No">No</option>
		</select>
	</div>
	<div class="col-6 mt-1">
    <label>Nombre del instituto: </label>
    <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i data-feather="user"></i></span>
        </div>
       {!! Form::text('nombre_instituto',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombre del instituto']) !!}
    </div>
  </div>
  <div class="col-6 mt-1">
    <label>Título obtenido del instituto: </label>
    <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="zmdi zmdi-graduation-cap"></i></span>
        </div>
       {!! Form::text('titulo_instituto',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Título obtenido del instituto']) !!}
    </div>
  </div>
  <input type="hidden" name="miembro_id" value="{{ $element->id }}">
  <div class="col-6">
    <label>Tiempo transcurrido en el instituto: </label>
    <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="mdi mdi-clock"></i></span>
        </div>
       {!! Form::text('tiempo_instituto',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Tiempo transcurrido en el instituto']) !!}
    </div>
  </div>
  <div class="col-6">
		<label for="">Tipo de estudio teológico</label>
		<select name="tipo_teologico"class="form-control">
			<option value="">Seleccione</option>
			<option value="Básico">Básico</option>
			<option value="Intermedio">Intermedio</option>
			<option value="Avanzado">Avanzado</option>
		</select>
	</div>
</div>
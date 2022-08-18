<div class="row">
  @php
  $generos = App\Models\Genero::pluck('name','id');
  $estadocivil = App\Models\EstadoCivil::pluck('name','id');
  $nacionalidad = App\Models\Nacionalidades::pluck('name','id');
  $sangre = App\Models\TipoDeSangre::pluck('name','id');
  $grado = App\Models\GradoInstruccion::pluck('name','id');
  $sociedad = App\Models\Sociedades::pluck('name','id');
  $estados = App\Models\Estados::get();
  $miembro = App\Models\TipoMiembro::pluck('name','id');
  $pais = App\Models\Pais::pluck('name','id')
@endphp
  <div class="col-4">
    <label>Nombres: </label>
    <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i data-feather="user"></i></span>
        </div>
       {!! Form::text('name',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombres']) !!}
    </div>
  </div>
   <div class="col-4">
    <label>Apellidos: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-tie"></i></span>
        </div>
       {!! Form::text('lastname',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Apellidos']) !!}
    </div>
  </div>
  <div class="col-4">
    <label>Tipo de documento: </label>
     <div class="input-group input-group-merge mb-2">

      <select name="tipo_documento" class="form-control">
        <option value="cedula">Cédula</option>
        <option value="pasaporte">Pasaporte</option>
      </select>
    </div>
  </div>
  <div class="col-4">
    <label>Documento: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-id-card"></i></span>
        </div>
       {!! Form::text('documento',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Documento']) !!}
    </div>
  </div>
  <div class="col-4">
    <label>Correo: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1">@</span>
        </div>
       {!! Form::text('email',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Correo electrónico']) !!}
    </div>
  </div>
   <div class="col-4">
    <label>Teléfono: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-phone"></i></span>
        </div>
       {!! Form::text('telefono',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Teléfono']) !!}
    </div>
  </div>
   <div class="col-4">
    <label>País de nacimiento: </label>
     <div class="input-group input-group-merge mb-2">

      {!! Form::select('pais_id', $pais, null, ['class' => 'form-control ']) !!}
     </div>
 </div>
  <div class="col-4">
    <label>Lugar de nacimiento: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-baby"></i></span>
        </div>
       {!! Form::text('lugar_nacimiento',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Lugar de nacimiento']) !!}
    </div>
  </div>
    <div class="col-4">
    <label>Fecha de nacimiento: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-calendar"></i></span>
        </div>
       {!! Form::text('fecha_nacimiento',null,['class'=>'form-control datepicker-here digits', 'required' => 'required','autocomplete' =>'off','placeholder' =>'YYYY-MM-DD','data-language' => 'en']) !!}

    </div>
  </div>
  <div class="col-4">
    <label>Edad: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fab fa-old-republic"></i></span>
        </div>
       {!! Form::number('edad',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Edad']) !!}
    </div>
  </div>

 <div class="col-4">
    <label>Géneros: </label>
     <div class="input-group input-group-merge mb-2">

      {!! Form::select('genero_id', $generos, null, ['class' => 'form-control ']) !!}
     </div>
 </div>
  <div class="col-4">
    <label>Estado Civil: </label>
     <div class="input-group input-group-merge mb-2">

      {!! Form::select('estado_civil_id', $estadocivil, null, ['class' => 'form-control ']) !!}
     </div>
 </div>
  <div class="col-4">
    <label>Nacionalidad: </label>
     <div class="input-group input-group-merge mb-2">

      {!! Form::select('nacionalidad_id', $nacionalidad, null, ['class' => 'form-control  ']) !!}
     </div>
 </div>
 <div class="col-4">
    <label>Tipo de sangre: </label>
     <div class="input-group input-group-merge mb-2">

      {!! Form::select('tipo_sangre_id', $sangre, null, ['class' => 'form-control  ']) !!}
     </div>
 </div>
  <div class="col-4">
    <label>Grado de instruccion: </label>
     <div class="input-group input-group-merge mb-2">

      {!! Form::select('grado_instruccion_id', $grado, null, ['class' => 'form-control  ']) !!}
     </div>
 </div>
  <div class="col-12">
    <label>Sociedad que pertenece: </label>
     <div class="input-group input-group-merge mb-2">

      {!! Form::select('sociedad_id', $sociedad, null, ['class' => 'form-control  ']) !!}
     </div>
 </div>
 <div class="col-sm-4">
  <label class="font-weight-bolder" for="empresa">Estados del país</label>
 <select name="estado_id" id="estado_id" class="form-control">
  <option value="0">Seleccione</option>
   @foreach ($estados as $value)
     <option value="{{ $value->id }} "> {{ $value->name }}</option>
   @endforeach
 </select>
</div>
<div class="col-sm-4">
  <label class="font-weight-bolder" for="empresa">Municipios del país</label>
 <select name="municipio_id" id="municipio_id" class="form-control">
  <option value="0" disable="true" selected="true"></option>

 </select>
</div>
<div class="col-sm-4">
  <label class="font-weight-bolder" for="empresa">Parroquias del país</label>
 <select name="parroquia_id" id="parroquia_id" class="form-control">
  <option value="0" disable="true" selected="true"></option>

 </select>
</div>
 <div class="col-6 mt-2">
       <label for="textarea-counter">Dirección del empleado</label>
        <div class="form-label-group mb-0">

             {!! Form::textarea('direccion',null,['class'=>'form-control char-textarea', 'required' => 'required','autocomplete' =>'off','id' =>'textarea-counter',' data-length' => '60','rows'=>'1']) !!}

        </div>
        <small class="textarea-counter-value float-right"><span class="char-count">0</span> / 60 </small>
    </div>
    <div class="col-6 mt-2">
    <label>Clase de miembro: </label>
     <div class="input-group input-group-merge mb-2">

      {!! Form::select('tipo_miembro_id', $miembro, null, ['class' => 'form-control  ']) !!}
     </div>
 </div>
<div class="col-6">
    <label>Año de ingreso a la congregación: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-calendar"></i></span>
        </div>
       <input type="text" name ="ano_ingreso" value="{{ $miembros->ano_ingreso }}" class="form-control">
    </div>
  </div>
  <div class="col-md-6 text-center">

          <div class="checkbox icheck">  <br>

            <label>
               <b for="textarea-counter">¿Posee el bautismo en el Espíritu Santo?</b><br>
              <input type="radio" name="bautismo_espiritu_santo" id="bautismo_espiritu_santo" value="1" checked>  SI&nbsp;&nbsp;
              <input type="radio" name="bautismo_espiritu_santo" id="bautismo_espiritu_santo_false" value="0"> NO&nbsp;&nbsp;
            </label>
          </div>
      </div>
    <input type="hidden" name="carnet" value="false">

    <div class="col-md-12 text-center">

          <div class="checkbox icheck">  <br>

            <label>
               <b for="textarea-counter">Estado del miembro de la congregación</b><br>
              <input type="radio" name="status" id="status" value="1" checked>  Activo&nbsp;&nbsp;
              <input type="radio" name="status" id="status" value="0"> Inactivo&nbsp;&nbsp;
            </label>
          </div>
      </div>
  </div>



</div>

@push('scripts')
    <script src="{{ asset('js/admin/pickdate.js') }}"></script>
     <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
    <script>
      var form    = false;
$(document).ready(function() {
  form = $('#main-form');

    $.fn.eventos();


  //$('#objetivos').hide();

});
$.fn.eventos = function(){
  $('#estado_id').unbind('change');//borro evento click
  $('#estado_id').on("change", function(e) { //asigno el evento change u otro

  console.log($('#estados_id').val())
    estados_id = e.target.value;
    console.log(estados_id);
    if(estados_id != '0')
    {
      $.fn.get_municipio(estados_id);

    }else{
      console.log('epa selecciona un proyecto valido');
    }
  });
  $('#municipio_id').unbind('change');//borro evento click
  $('#municipio_id').on("change", function(e) { //asigno el evento change u otro

     municipio_id= e.target.value;

     $.fn.get_parroquias(municipio_id);
  });

}
/********* AJAX ***********/
$.fn.get_municipio = function(estados_id){
      $.ajax({url: "/estado/"+estados_id+"/municipios",
        method: 'GET',
        //data: {'estados_id': estados_id}
      }).then(function(result) {
        console.log(result);

        $('#municipio_id').html('<option value="0"> Seleccione </option>');

        $(result).each(function( index, element ) {
          $('#municipio_id').append('<option value="'+ element.id +'">'+ element.municipio +'</option>');

        });
      })
      .catch(function(err) {
          console.error(err);
      });
}
    $.fn.get_parroquias = function(municipio_id){

      $.ajax({url: "/municipio/"+ municipio_id +"/parroquias",
      method: 'GET',
    }).then(function(result) {
          console.log(result);
        $('#parroquia_id').html('<option value="0"> Seleccione </option>');
        $( result).each(function( index, element ) {
          $('#parroquia_id').append('<option value="'+ element.id +'">'+ element.parroquia +'</option>');

        });
      })
      .catch(function(err) {
          console.error(err);
      });


   }
    </script>
@endpush

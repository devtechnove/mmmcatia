<div class="row">
  @php
 
  $estados = App\Models\Estados::pluck('name','id');
  $miembro = App\Models\Miembro::pluck('name','id');

@endphp
  <div class="col-12">
    <label>Días de servicios del campo blanco: </label>
    <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i data-feather="user"></i></span>
        </div>
       {!! Form::text('dia_servicio',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Días de servicios del campo blanco']) !!}
    </div>
  </div>

 <div class="col-sm-3">
 <label>Cantidad de damas del campo blanco: </label>
    <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-female pink-text"></i></span>
        </div>
       {!! Form::text('cantidad_damas',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Cantidad de damas del campo blanco']) !!}
    </div>
  </div>

<div class="col-sm-3">
 <label>Cantidad de caballeros del campo blanco: </label>
    <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-male blue-text"></i></span>
        </div>
       {!! Form::text('cantidad_caballeros',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Cantidad de caballeros del campo blanco']) !!}
    </div>
  </div>
  <div class="col-sm-3">
 <label>Cantidad de jovenes del campo blanco: </label>
    <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-tie blue-text"></i></span>
        </div>
       {!! Form::text('cantidad_jovenes',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Cantidad de jovenes del campo blanco']) !!}
    </div>
  </div>
  <div class="col-sm-3">
 <label>Cantidad de niños del campo blanco: </label>
    <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-baby green-text"></i></span>
        </div>
       {!! Form::text('cantidad_ninos',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Cantidad de niños del campo blanco']) !!}
    </div>
  </div>
 <div class="col-12 mt-2">
       <label for="textarea-counter">Obervaciones</label>
        <div class="form-label-group mb-0">
            
             {!! Form::textarea('tx_observacion',null,['class'=>'form-control char-textarea', 'required' => 'required','autocomplete' =>'off','id' =>'textarea-counter',' data-length' => '60','rows'=>'1']) !!}
         
        </div>
        <small class="textarea-counter-value float-right"><span class="char-count">0</span> / 60 </small>
    </div>
  
    <div class="col-md-12 text-center">  
                                      
          <div class="checkbox icheck">  <br>

            <label>
               <b for="textarea-counter">Estado del detalle</b><br>
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
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
  <div class="col-lg-4">
    <label>Nombres: </label>
    <div class="input-group input-group-merge mb-2">
       {!! Form::text('name',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombres']) !!}
    </div>
  </div>
   <div class="col-lg-4">
    <label>Apellidos: </label>
     <div class="input-group input-group-merge mb-2">
       {!! Form::text('lastname',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Apellidos']) !!}
    </div>
  </div>
     <div class="col-lg-4">
    <label>Teléfono: </label>
     <div class="input-group input-group-merge mb-2">
       {!! Form::text('telefono',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Teléfono']) !!}
    </div>
  </div>
 <input type="hidden" name="carnet" value="true">
  <div class="col-lg-6">
    <label>Cédula: </label>
     <div class="input-group input-group-merge mb-2">
       {!! Form::text('documento',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'']) !!}
    </div>
  </div>
   <div class="col-lg-6">
    <label>Año de ingreso a la congregación: </label>
     <div class="input-group input-group-merge mb-2">
       {!! Form::text('ano_ingreso',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Año de ingreso']) !!}
    </div>
  </div>
  <div class="col-12">
    <label>Sociedad que pertenece: </label>
     <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('sociedad_id', $sociedad, null, ['class' => 'form-control  ']) !!}
     </div>
 </div>

    <div class="col-lg-12 mt-2">
    <label>Clase de miembro: </label>
     <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('tipo_miembro_id', $miembro, null, ['class' => 'form-control  ']) !!}
     </div>
 </div>  
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

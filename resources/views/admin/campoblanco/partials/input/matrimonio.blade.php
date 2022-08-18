<div class="row">
  <div class="col-6">
    <label>Tiempo de casados: </label>
    <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i data-feather="clock"></i></span>
        </div>
       {!! Form::text('tiempo_casado',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Tiempo de casados']) !!}
    </div>
  </div>
   <div class="col-6">
    <label>Fecha de casamiento: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-tie"></i></span>
        </div>
       {!! Form::text('fecha_casamiento',null,['class'=>'form-control datepicker-here digits ', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Fecha de casamiento','data-language' => 'en']) !!}
    </div>
  </div>
  <input type="hidden" name="miembro_id" value="{{ $element->id }}">
 
</div>

@push('scripts')
    
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

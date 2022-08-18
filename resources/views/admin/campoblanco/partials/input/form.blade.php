<div class="row">
  @php
 
  $estados = App\Models\Estados::pluck('name','id');
  $miembro = App\Models\Miembro::pluck('name','id');

@endphp
  <div class="col-12">
    <label>Nombre del campo blanco: </label>
    <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i data-feather="user"></i></span>
        </div>
       {!! Form::text('name',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombre del campo blanco']) !!}
    </div>
  </div>

 <div class="col-sm-4">
  <label class="font-weight-bolder" for="empresa">Estados del país</label>
  {!! Form::select('estado_id', $estados, null, ['class' => 'form-control','id'=>'estado_id']) !!}
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
    <label>Miembro encargado: </label>
     <div class="input-group input-group-merge mb-2">
        
      {!! Form::select('miembro_id', $miembro, null, ['class' => 'form-control  select2']) !!}
     </div>
 </div>
<div class="col-4">
    <label>Año de fundación del campo blanco: </label>
     <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-calendar"></i></span>
        </div>
       <input type="text" name ="ano_fundada" value="{{ date('Y') }}" class="form-control">
    </div>
  </div>
  
    <div class="col-md-12 text-center">  
                                      
          <div class="checkbox icheck">  <br>

            <label>
               <b for="textarea-counter">Estado del campo blanco</b><br>
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

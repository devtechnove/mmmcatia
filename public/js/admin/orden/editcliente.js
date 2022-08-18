 let botones = document.querySelectorAll('a[data-target="#editarModalCliente"]');
 var input = document.getElementById('editarcliente');


  if ( $('#cliente').val() == 0) {

    input.disabled = true;
    
  }
    $('#cliente').on("change", function(e) { //asigno el evento change u otro
   
    cliente_id = e.target.value;
    console.log(cliente_id);
    if(cliente_id != '0')
    {
      $.fn.get_telefono(cliente_id);
      input.disabled = false;
      
    }else{
      console.log('epa selecciona un dato valido');
    }

    $.fn.get_telefono = function(cliente_id){

      $.ajax({url: "/clientes/"+cliente_id,
        method: 'GET',
        //data: {'cliente_id': cliente_id}
      }).then(function(result) {
        console.log(result);
          
       
        $(result).each(function( index, element ) {
          $('#telefonocliente').val(element.telefono);
          $('#nombrecliente').val(element.name);
          $('#idcliente').val(element.id);
      
        });
      })
      .catch(function(err) {
          console.error(err);
      });

}

  }); 
       
   
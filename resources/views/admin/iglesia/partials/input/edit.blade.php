<div class="row">
  <div class="col-6">
    <label>Nombre de la academia: </label>
     <div class="form-group">
    <input type="text" class="form-control" value="{{ $element->name }}" autocomplete="off" name="name">
     </div>
  </div>
   <div class="col-6">
    <label>Sede: </label>
     <div class="form-group">
     <input type="text" class="form-control" value="{{ $element->direccion }}" autocomplete="off" name="direccion">
     </div>
  </div>
  <div class="col-6">
    <label>Correo: </label>
     <div class="form-group">
    <input type="email" class="form-control" value="{{ $element->email }}" autocomplete="off" name="email">
     </div>
  </div>
   <div class="col-6">
    <label>Teléfono: </label>
     <div class="form-group">
     <input type="text" class="form-control" value="{{ $element->telefono }}" autocomplete="off" name="telefono">
     </div>
  </div>
  
  <div class="col-12">
    <label  for="password">Logo de la academia</label>
    <input type="file" style="font-size: 15px;" class="form-control" id="logo" name="logo" placeholder="Contraseña">
  
  </div>
 
 
</div>

@push('scripts')

   
@endpush

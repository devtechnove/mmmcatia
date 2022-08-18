<div class="row">
  <div class="col-12">
    <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon-search2"><i class="fas fa-user-lock"></i></span>
        </div>
       {!! Form::text('name',null,['class'=>'form-control', 'required' => 'required','autocomplete' =>'off','placeholder' =>'Nombre del role']) !!}
    </div>
  </div>
   
</div>

@push('scripts')
    
   
@endpush

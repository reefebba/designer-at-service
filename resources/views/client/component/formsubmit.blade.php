{{-- Form: Submit Design --}}
<form class="border border-light p-5" method="POST" action="{{ route('design.store') }}" enctype="multipart/form-data">
  @csrf
  <p class="h4 mb-4 text-center">Ingin mengajukan pembuatan poster gratis?</p>

  {{-- ///// Client ///// --}}

   @include('client.component.formclient')

  {{-- ///// Kajian ///// --}}

  @include('client.component.formkajian')

  {{-- ////// Desgin //////  --}}

  @include('client.component.formdesign')
      
     <div class="form-group text-center">
            <button class="btn btn-primary" type="submit">Ok, Submit!</button>  
    </div>
</form> 
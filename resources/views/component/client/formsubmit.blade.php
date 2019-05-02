{{-- Form: Submit Design --}}
<form class="border border-light p-5" method="POST" action="{{ route('design.store') }}" enctype="multipart/form-data">
  @csrf
  <p class="h4 mb-4 text-center">Ingin mengajukan pembuatan poster gratis?</p>

  {{-- ///// Client ///// --}}

   @include('component.client.formclient')

  {{-- ///// Kajian ///// --}}

  @include('component.client.formkajian')

  {{-- ////// Desgin //////  --}}

  @include('component.client.formdesign')
      
     <div class="form-group text-center">
            <button class="btn btn-primary" type="submit">Ok, Submit!</button>  
    </div>
</form> 
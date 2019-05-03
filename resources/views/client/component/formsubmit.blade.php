<form class="border border-light" method="POST" action="{{ route('design.store') }}" enctype="multipart/form-data">
	
  @include('client.component.formclient')
  @include('client.component.formkajian')
  @include('client.component.formdesign')

  @csrf
  <div class="form-group text-center">
    <button class="btn btn-primary" type="submit">Ok, Submit!</button>  
  </div>
</form>
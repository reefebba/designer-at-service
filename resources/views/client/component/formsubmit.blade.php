<form method="POST" action="{{ route('design.store') }}" enctype="multipart/form-data">
	
  @include('client.component.formclient')
  @include('client.component.formkajian')
  @include('client.component.formdesign')

  @csrf
  <div style="text-align: right;">
    <button class="waves-effect waves-light btn  purple lighten-1" type="submit">Ok, Submit!</button>  
  </div>
</form>
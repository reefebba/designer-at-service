<div class="formcheck mt-3">
  <div class="col-md-10 offset-md-1">
    <div class="card">
      <h5 class="card-header info-color text-center">
        <strong>Check Status</strong>
      </h5>
      <div class="card-body  mt-3">
        <form class="border border-light p-5" method="POST" action="{{ route('client.design.check') }}" enctype="multipart/form-data">
          @csrf
          <p class="h4 mb-4 text-center">Masukan code unik design poster yang anda pesan</p>
          <input type="text" name="code" class="form-control mb-4" placeholder="S66233TIV" autocomplete="off" >
          <div class="form-group text-center">
            <button class="btn btn-info my-4" type="submit">Ok, Check!</button>        
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
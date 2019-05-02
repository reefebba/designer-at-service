 {{-- Form: Check Status, Redirecting --}}
<div class="card">

  <h5 class="card-header info-color text-center">
  <strong>Check Status</strong>
  </h5>

  <div class="card-body px-lg-5 pt-0">
    <form class="border border-light p-5" method="POST" action="{{ route('client.design.check') }}" enctype="multipart/form-data">

      @csrf

      <p class="h4 mb-4 text-center">Masukan code unik design poster Anda</p>

      <input type="text" name="uuid" class="form-control mb-4" placeholder="64baa976-c689-41e7-bdd1-0da5edad9712" required>
      <div class="form-group text-center">
        <button class="btn btn-info my-4" type="submit">Ok, Check!</button>        
      </div>
    </form>
  </div>
</div>
{{-- End Form: Check Status, Redirecting --}}
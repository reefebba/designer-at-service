<div class="row margin-bottom wow bounceInUp">
  <div class="col s3 center">
    <img class="img-person" src="{{ asset('/images/person.svg') }}" alt="pondok multimedia">
  </div>
  <div class="col s9">
      <h5>
        <strong class="bold color-primary">Check Status Pesanan</strong>
      </h5>
      <form method="POST" action="{{ route('client.design.check') }}" enctype="multipart/form-data">
        @csrf
        <p class="color-secondary">Masukan code unik design poster yang anda pesan</p>
        <input type="text" name="uuid" class="input-field" placeholder="64baa976-c689-41e7-bdd1-0da5edad9712" autocomplete="off" >
        <div style="margin-top: 15px">
          <button class="waves-effect waves-light btn  purple lighten-1" type="submit">Ok, Check!</button>        
        </div>
      </form>
  </div>
</div>
<div class="formclient p-5">
  <h4 class="text-center">Silahkan isi form dibawah jika Antum ingin dibuatkan Desain Poster Gratis untuk Kajian Islam</h4>

  <div class="d-flex justify-content-between mt-5">
    <h4><i class="fas fa-user"><span class="ml-2" style="font-family:ubuntu;">Client</span></i></h4>
  </div>

  <div class="form-group">
    <label for="client_name"><i class="fas fa-user"><span class="ml-2" style="font-family:ubuntu;"> Nama Pemesan?</span></i></label>
    <input autocomplete="off" class="form-control mb-4" type="text" name="client_name" id="client_name"  value="{{ old('client_name') }}" placeholder="cth. Ahmad Sholih" >
    @if ($errors->has('client_name'))
    <div class="alert alert-danger">
     <p style = 'text-align:center'>{{ $errors->first('client_name') }}</p>
   </div>
   @endif
 </div>

 <div class="form-group">
  <label for="client_phone"><i class="fas fa-phone"></i><span class="ml-2" style="font-family:ubuntu;"> Nomor Telepon?</span></label>
  <input autocomplete="off" class="form-control mb-4" type="tel" name="client_phone" id="client_phone" placeholder="cth. 08221448XXXX" value="{{ old('client_phone') }}" >

  @if ($errors->has('client_phone'))
  <div class="alert alert-danger">
    <p style = 'text-align:center'>{{ $errors->first('client_phone') }}</p>
  </div>
  @endif
  </div>
</div>
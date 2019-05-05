<div>
  <h5 class="center bold color-primary">Buat pesanan desain Anda</h4>

  <div style="margin-top: 20px">
    <h5 class="color-primary">Pemesan</h5>
  </div>

  <div class="row">
    <div class="col s12 m6">
      <label for="client_name"><i class="fas fa-user"><span class="ml-2" style="font-family:ubuntu;">Nama Pemesan</span></i></label>
      <input autocomplete="off" id="client_name"" type="text" name="client_name" id="client_name"  value="{{ old('client_name') }}" placeholder="cth. Ahmad Sholih" >
      
      @if ($errors->has('client_name'))
      <div class="alert alert-danger">
       <p style = 'text-align:center'>{{ $errors->first('client_name') }}</p>
     </div>
     @endif
   </div>

   <div class="col s12 m6">
    <label for="client_phone"><i class="fas fa-phone"><span class="ml-2" style="font-family:ubuntu;">Nomor Telepon </span></i></label>
    <input autocomplete="off" type="tel" name="client_phone" id="client_phone" placeholder="cth. +62 822 1448 XXXX" value="{{ old('client_phone') }}" >

    @if ($errors->has('client_phone'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('client_phone') }}</p>
    </div>
    @endif
    </div>
  </div>
</div>
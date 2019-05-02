<div class="d-flex justify-content-between">
              <p>Client :</p>
</div>

<div class="form-group">
    <label for="client_name"><i class="fas fa-user"><span class="ml-2" style="font-family:ubuntu;"> Nama Pemesan?</span></i></label>
    <input class="form-control mb-4" type="text" name="client_name" id="client_name"  value="{{ old('client_name') }}" placeholder="cth. Ahmad Sholih"  autofocus>
    @if ($errors->has('client_name'))
      <div class="alert alert-danger">
         <p style = 'text-align:center'>{{ $errors->first('client_name') }}</p>
      </div>
    @endif
</div>

<div class="form-group">
    <label for="client_phone"><i class="fas fa-phone"></i><span class="ml-2" style="font-family:ubuntu;"> Nomor Telepon?</span></label>
    <input class="form-control mb-4" type="tel" name="client_phone" id="client_phone" placeholder="cth. +62 822 1448 XXXX" value="{{ old('client_phone') }}"  autofocus>

     @if ($errors->has('client_phone'))
        <div class="alert alert-danger">
          <p style = 'text-align:center'>{{ $errors->first('client_phone') }}</p>
        </div>
      @endif
</div>
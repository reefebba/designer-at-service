 <div class="d-flex justify-content-between">
          <p>Design Poster:</p>
      </div>
          <div class="form-group">
              <label for="size"><i class="fas fa-scroll"><span class="ml-2" style="font-family:ubuntu;"> Size / ukuran poster yang diinginkan?</span></i></label>

              <!-- Size option -->

              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="size1" name="size" class="custom-control-input" value="Square"   autofocus>
                <label class="custom-control-label" for="size1">Square</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="size2" name="size" class="custom-control-input" autofocus value="1:1 Resume">
                <label class="custom-control-label" for="size2">1:1 Resume</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="size3" name="size" class="custom-control-input" value="A4" autofocus>
                <label class="custom-control-label" for="size3">A4</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="size4" name="size" class="custom-control-input" value="Poster" autofocus>
                <label class="custom-control-label" for="size4">Poster</label>
              </div>
             @if ($errors->has('size'))
              <div class="alert alert-danger">
                <p style = 'text-align:center'>{{ $errors->first('size') }}</p>
              </div>
              @endif

                
          </div>

          <div class="form-group">
              <label for="base_color"><i class="fas fa-palette"><span class="ml-2" style="font-family:ubuntu;"> Warna dasar yang diinginkan? Click Dibawah</i></span></i></label>
              <input type="color" name="base_color" id="base_color" value="{{ old('base_color') }}" autofocus>
             @if ($errors->has('base_color'))
            <div class="alert alert-danger">
              <p style = 'text-align:center'>{{ $errors->first('base_color') }}</p>
            </div>
            @endif
          </div>

          <div class="form-group">
              <label for="image"><i class="fas fa-image"><span class="ml-2" style="font-family:ubuntu;"> Adakah gambar yang ingin ditambahkan?</span></i></label>
              <input type="file" name="image" id="image"  value="{{ old('image') }}" autofocus>

               @if ($errors->has('image'))
                <div class="alert alert-danger">
                  <p style = 'text-align:center'>{{ $errors->first('image') }}</p>
                </div>
                @endif
          </div>

          <div class="form-group">
              <label for="add_info"><i class="fas fa-info-circle"><span class="ml-2" style="font-family:ubuntu;"> Adakah pesan tambahan untuk designer?</span></i></label>
              <textarea placeholder="cth. Tambahkan catatan\nDiharap tidak membawa jajanan dari luar" name="add_info" cols="50" rows="5"></textarea>
               @if ($errors->has('add_info'))
                  <div class="alert alert-danger">
                      <p style = 'text-align:center'>{{ $errors->first('add_info') }}</p>
                  </div>
              @endif
          </div>
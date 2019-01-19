@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                        <div class="card-header"><strong>Add a new design</strong></div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('design.store') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="status" value="open">
                                @if ($errors->has('status'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('status') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="text" class="form-control" name="client" id="client" placeholder="Enter your name for brochure design client " value="{{ old('client') }}" required autofocus>
                                </div>
                                @if ($errors->has('client'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('client') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="text" class="form-control" name="client_phone" id="client_phone" placeholder="Enter your phone for brochure design client_phone " value="{{ old('client_phone') }}" required autofocus>
                                </div>
                                @if ($errors->has('client_phone'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('client_phone') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="text" class="form-control" name="size" id="size" placeholder="Enter size for brochure design " value="{{ old('size') }}" required autofocus>
                                </div>
                                @if ($errors->has('size'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('size') }}</p>
                                    </div>
                                @endif
                                <p> Pilih warna dasar atau biarkan terserah designer </p>
                                <div class="form-group">
                                    <input type="color" class="form-control" name="base_color" id="base_color" placeholder="Enter base_color for brochure design or let here empty for it being up to designer " value="{{ old('base_color') }}" autofocus>
                                </div>
                                @if ($errors->has('base_color'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('base_color') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="file" class="form-control-file" name="image" id="image" placeholder="Enter image for brochure design or let here empty " value="{{ old('image') }}" autofocus>
                                </div>
                                @if ($errors->has('image'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('image') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    {{ old('type') }}
                                    <select class="form-control" name="type" id="type" required autofocus>
                                      <option>kajian rutin</option>
                                      <option>kajian tematik</option>
                                      <option>tablig akbar</option>
                                      <option>safari dakwah</option>
                                    </select>
                                </div>
                                @if ($errors->has('type'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('type') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="text" class="form-control" name="audience" id="audience" placeholder="Enter audience for your kajian " value="{{ old('audience') }}" required autofocus>
                                </div>
                                @if ($errors->has('audience'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('audience') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter a title for your kajian " value="{{ old('title') }}" required autofocus>
                                </div>
                                @if ($errors->has('title'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('title') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input class="form-control" name="tagline" placeholder="Provide a tagline for your title " value="{{ old('tagline') }}" autofocus>
                                    </input>
                                </div>
                                @if ($errors->has('tagline'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('tagline') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lecturer" id="lecturer" placeholder="Enter lecturer(ustadz) for your kajian " value="{{ old('lecturer') }}" required autofocus>
                                </div>
                                @if ($errors->has('lecturer'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('lecturer') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="text" class="form-control" name="book" id="book" placeholder="Enter book for your kajian or let here empty " value="{{ old('book') }}" autofocus>
                                </div>
                                @if ($errors->has('book'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('book') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <textarea class="form-control" name="place" placeholder="Provide a place for your kajian " rows="3" required autofocus>{{ old('place') }}
                                    </textarea>
                                </div>
                                @if ($errors->has('place'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('place') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="date" class="form-control" name="date" id="date" placeholder="Enter date for your kajian " value="{{ old('date') }}" required autofocus>
                                </div>
                                @if ($errors->has('date'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('date') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="time" class="form-control" name="time" id="time" placeholder="Enter time for your kajian " value="{{ old('time') }}" required autofocus>
                                </div>
                                @if ($errors->has('time'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('time') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="text" class="form-control" name="organizer" id="organizer" placeholder="Enter organizer for your kajian " value="{{ old('organizer') }}" required autofocus>
                                </div>
                                @if ($errors->has('organizer'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('organizer') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter contact for your kajian: 'fulan:081xxxxxxxxx' " value="{{ old('contact') }}" required autofocus>
                                </div>
                                @if ($errors->has('contact'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('contact') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="text" class="form-control" name="donation" id="donation" placeholder="Enter donation account for your kajian or let here empty " value="{{ old('donation') }}" autofocus>
                                </div>
                                @if ($errors->has('donation'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('donation') }}</p>
                                    </div>
                                @endif
                                <p> Apakah ada Makanan ? </p>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_meal" id="meal-true" value="1">
                                        <label class="form-check-label" for="meal-true">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_meal" id="meal-false" value="0">
                                        <label class="form-check-label" for="meal-false">Tidak</label>
                                    </div>
                                </div>
                                @if ($errors->has('is_meal'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('is_meal') }}</p>
                                    </div>
                                @endif
                                <p> Apakah bisa Streaming ? </p>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_streaming" id="streaming-true" value="1">
                                        <label class="form-check-label" for="streaming-true">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_streaming" id="streaming-false" value="0">
                                        <label class="form-check-label" for="streaming-false">Tidak</label>
                                    </div>
                                </div>
                                @if ($errors->has('is_streaming'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('is_streaming') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <textarea class="form-control" name="add_info" id="add_info" placeholder="Enter additional_info for your kajian or let here empty " rows="3" autofocus>{{ old('add_info') }}
                                    </textarea>
                                </div>
                                @if ($errors->has('add_info'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('add_info') }}</p>
                                    </div>
                                @endif
                                <button class="btn btn-primary" type="Submit" >Add Design</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
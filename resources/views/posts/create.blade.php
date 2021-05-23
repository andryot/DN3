@extends('layouts.app')

@section('content')
<div class="container" style="color: white;">
    <form action="/post" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h2>Nova objava</h2>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Opis</label>

                    <textarea id="description" rows="5"  type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" autofocus></textarea>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="img" class="col-md-4 col-form-label">Slika</label>
                    <input type="file" class="form-control-file" id="img" name="img">

                    @error('img')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="button btn btn-primary">Objavi</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

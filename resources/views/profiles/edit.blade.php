@extends('layouts.app')

@section('content')
<div class="container" style="color: white;">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h2>Uredi profil</h2>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Ime</label>

                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title}}" autocomplete="title" autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Opis</label>

                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description')  ?? $user->profile->description}}" autocomplete="description" autofocus>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">Spletna stran</label>

                    <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url}}" autocomplete="url" autofocus>

                    @error('url')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>




                <div class="row">
                    <label for="img" class="col-md-4 col-form-label">Profilna slika</label>
                    <input type="file" class="form-control-file" id="img" name="img">

                    @error('img')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>


                <div class="row pt-4">
                    <button class="button btn btn-primary">Shrani</button>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection

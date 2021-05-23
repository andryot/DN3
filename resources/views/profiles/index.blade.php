@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="color: white;">
        <div class="col-3 p-5">
            <img src="/storage/{{$user->profile->img}}" class="rounded-circle" height="150px">

        </div>
        <div class="col-9 pt-5">

            <div class="d-flex justify-content-between align-bottom">
                <div class="d-flex">
                    <h1 class=" pr-3">{{$user->username}}</h1>
                </div>
                @can('update', $user->profile)
                    <div class="d-flex justify-content-between align-bottom">
                        <div></div>
                        <a href="/profile/{{$user->id}}/edit">Uredi profil</a>
                    </div>
                @endcan

            </div>
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>

            <div class="pt-4 font-weight-bold"> {{$user->profile->title}} </div>
                <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a> </div>
        </div>

    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4" >
                <a href="/post/{{$post->id}}">
                    <img src="/storage/{{$post->img}}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection

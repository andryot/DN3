@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->img}}" class="w-100"/>
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <img src="/storage/{{$post->user->profile->img}}" class="rounded-circle w-100" style="max-width: 40px">

                    <span class="pl-4">
                        <a href="/profile/{{$post->user->id}}">{{$post->user->username}}
                    </span>
                </div>

                <hr>

                <span>
                    <a class="pr-2" href="/profile/{{$post->user->id}}">{{$post->user->username}} </a>
                    {{$post->description}}
                </span>
            </div>
        </div>
    </div>
</div>
@endsection

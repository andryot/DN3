@extends('layouts.app')

@section('content')
<div class="container" style="color: white">
    @foreach($posts->reverse() as $post)
        <div style="background-color: #323232">
        <div class="row pt-5">
            <div class="col-8">
                <img src="/storage/{{$post->img}}" class="w-100"/>
            </div>
            <div class="col-4" style="color: white">
                <div>
                    <div class="d-flex align-items-center">
                        <img src="/storage/{{$post->user->profile->img}}" class="rounded-circle w-100" style="max-width: 40px">
                        <span class="pl-4">
                            <a href="/profile/{{$post->user->id}}">{{$post->user->username}}
                        </span>

                        <div class="pl-3" style="color: white; cursor: default">{{$post->created_at}}</div>
                    </div>

                    <hr color="#FFFFFF">
                    <a href="#"></a>
                    {{$post->description}}

                </div>
            </div>
        </div>

        </div>
        <hr color="#ffffff">
    @endforeach
</div>
@endsection


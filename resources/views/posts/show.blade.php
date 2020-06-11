@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-3">
                    <img src="{{$post->user->profile->profileImage()}}" alt="" class="w-100 rounded-circle">
                </div>
                <div class="col-9 my-auto">
                    <a href="/profile/{{$post->user->id}}">
                        <span class="text-dark font-weight-bold">{{$post->user->username}}</span>
                    </a>
                    <a href="">follow</a>
                </div>
            </div>
            <hr>
            <div class="row mx-auto">
                <p>
                    <a href="/profile/{{$post->user->id}}">
                        <span class="text-dark font-weight-bold">{{$post->user->username }}</span>
                    </a>
                    <span> {{$post->caption}}</span>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
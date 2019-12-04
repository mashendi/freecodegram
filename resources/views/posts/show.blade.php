@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center pt-3">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" alt="" class="w-100 rounded-circle" style="max-width: 40px;">
                    </div>
                    <div>
                        <a href="/profile/{{$post->user->id}}" class="text-dark font-weight-bold">{{$post->user->username}}</a>
                        <a href="#" style="font-size: small;" class="pl-3">Follow</a>
                    </div>

                </div>
                <hr>
                <div class="pt-3 d-flex">
                    <div class="pr-1">
                        <a href="/profile/{{$post->user->id}}" class="text-dark font-weight-bold">{{$post->user->username}}</a>
                    </div>
                    <div>
                        {{ $post->caption }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

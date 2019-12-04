@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-6 offset-3 pt-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" alt="" class="w-100">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-6 offset-3 pb-3">
                    <div class="d-flex align-items-center pt-3">
                        <div class="pr-3">
                            <img src="{{ $post->user->profile->profileImage() }}" alt="" class="w-100 rounded-circle"
                                 style="max-width: 40px;">
                        </div>
                        <div>
                            <a href="/profile/{{$post->user->id}}"
                               class="text-dark font-weight-bold">{{$post->user->username}}</a>
                        </div>
                        <div class="d-flex">
                            <div class="pl-3">
                                {{ $post->caption }}
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        @endforeach
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection

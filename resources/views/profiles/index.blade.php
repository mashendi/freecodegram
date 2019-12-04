@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 p-5">
                <img
                    src="{{ $user->profile->profileImage() }}" alt="" class="rounded-circle w-100">
            </div>
            <div class="col-8 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex">
                    <h1>
                        {{ $user->username }}
                    </h1>
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    </div>
                    @can('update', $user->profile)
                        <a href="/p/create">Add new post</a>
                    @endcan
                </div>
                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $postsCount }}</strong> Posts</div>
                    <div class="pr-5"><strong>{{ $followersCount }}</strong> Followers</div>
                    <div class="pr-5"><strong>{{ $followingCount }}</strong> Following</div>
                </div>
                <div class="pt-4 font-weight-bold">
                    {{ $user->profile->title }}
                </div>
                <div>
                    {{ $user->profile->description }}
                </div>
                <div class="font-weight-bold">
                    <a href="https://{{ $user->profile->url }}">{{ $user->profile->url ?? 'N/A' }}</a>
                </div>
            </div>
        </div>

        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{$post->image}}" alt="" class="w-100">

                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

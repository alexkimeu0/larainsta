@extends('layouts.app')

@section('content')
<div class="container" style="width: 90%; max-width: 966px; margin: auto;">
    <div class="row">
        <div class="col-3" style="padding-left: 6rem; padding-top: 2rem;">
        <img 
            src="https://cdn.britannica.com/83/200583-050-6DC32FAE/Steve-Wozniak-Apple-computer-founder-2014.jpg" 
            class="rounded-circle"
            style="height: 120px; width: 120px;"

            >        
        </div>

        <div class="col-9 p-4">
            <div class="d-flex justify-content-between align-items-center">        
                <h1>{{ $user->username }}</h1>
                <a href="/post/create">Add New Post</a>
            </div>

            <div class="d-flex">
                <div class="pr-4">
                    <strong>{{ $user->posts->count() }}</strong> posts
                </div>
                <div class="pr-4">
                    <strong>23k</strong> followers
                </div>
                <div class="pr-4">
                    <strong>203</strong> following
                </div>
            </div>

            <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>

            <a href="#">{{ $user->profile->url ?? 'https://example.com' }}</a>
            @can('update', $user->profile)
            <div>
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            </div>
            @endcan
            
        </div>
    </div>

    <div class="row pt-4">

        @foreach ($user->posts as $post)
            <div class="col-4 pb-3">
            <a href="/post/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
            </div>            
        @endforeach
    </div>
</div>
@endsection

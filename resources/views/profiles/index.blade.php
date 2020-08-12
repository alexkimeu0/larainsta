@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-4">
        <img 
            src="https://cdn.britannica.com/83/200583-050-6DC32FAE/Steve-Wozniak-Apple-computer-founder-2014.jpg" 
            class="rounded-circle"
            style="height: 120px; width: 120px;"

            >        
        </div>

        <div class="col-9 p-4">
            <div class="d-flex justify-content-between align-items-center">        
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
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
            <div>
            </div>
            
        </div>
    </div>

    <div class="row pt-4">

        @foreach ($user->posts as $post)
            <div class="col-4 pb-3">
            <img src="/storage/{{ $post->image }}" class="w-100">
            </div>            
        @endforeach
    </div>
</div>
@endsection

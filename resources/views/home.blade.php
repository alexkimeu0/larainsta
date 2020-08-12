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
            <div>        
                <h1>{{ Auth::user()->username }}</h1>
            </div>

            <div class="d-flex">
                <div class="pr-4">
                    <strong>145</strong> posts
                </div>
                <div class="pr-4">
                    <strong>23k</strong> followers
                </div>
                <div class="pr-4">
                    <strong>203</strong> following
                </div>
            </div>

            <div class="pt-3 font-weight-bold">freeCodeCamp</div>
            <div>We're a global community of millions of people learning to code together. 
            We're an open source, donor-supported, 501(c)(3) nonprofit.</div>

            <div>
                <a href="#">www.freecodecamp.org</a>
            </div>
            
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.fnbo10-1.fna.fbcdn.net/v/t51.2885-15/e35/117243751_3191331930959937_4248390780708663081_n.jpg?_nc_ht=instagram.fnbo10-1.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=gJwN-gzhtz0AX-SvLqE&amp;oh=147b9e152350d18894c431ca563b923b&amp;oe=5F5E6751" 
            class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fnbo10-1.fna.fbcdn.net/v/t51.2885-15/e35/117243751_3191331930959937_4248390780708663081_n.jpg?_nc_ht=instagram.fnbo10-1.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=gJwN-gzhtz0AX-SvLqE&amp;oh=147b9e152350d18894c431ca563b923b&amp;oe=5F5E6751" 
            class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fnbo10-1.fna.fbcdn.net/v/t51.2885-15/e35/117243751_3191331930959937_4248390780708663081_n.jpg?_nc_ht=instagram.fnbo10-1.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=gJwN-gzhtz0AX-SvLqE&amp;oh=147b9e152350d18894c431ca563b923b&amp;oe=5F5E6751" 
            class="w-100">
        </div>
    </div>
</div>
@endsection

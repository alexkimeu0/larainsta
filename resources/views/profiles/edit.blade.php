@extends('layouts.app')

@section('content')
<div class="container">
<form method="POST" action="/profile/{{ $user->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-6 offset-3" style="border: 1px solid lightgray; padding: 2rem; border-radius: .5rem;">
                <div class="row">
                    <h4 style="border-bottom: 1px solid lightgray;">Edit Profile</h4>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>
    
                        <input 
                            id="title" 
                            type="text" 
                            class="form-control 
                            @error('title') is-invalid 
                            @enderror" 
                            name="title"
                            value="{{ old('title') ?? $user->profile->title }}" 
                            required 
                            autocomplete="title" 
                            autofocus>
    
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>  

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Description</label>
    
                        <input 
                            id="description" 
                            type="text" 
                            class="form-control 
                            @error('description') is-invalid 
                            @enderror" 
                            name="description"
                            value="{{ old('description') ?? $user->profile->description }}" 
                            required 
                            autocomplete="description" 
                            autofocus>
    
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div> 
                

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">URL</label>
    
                        <input 
                            id="url" 
                            type="text" 
                            class="form-control 
                            @error('url') is-invalid 
                            @enderror" 
                            name="url"
                            value="{{ old('url') ?? $user->profile->url }}" 
                            required 
                            autocomplete="url" 
                            autofocus>
    
                        @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div> 
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                    <input type="file" class="form-control-file" id="image" name="image" required >

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row mt-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>     
        </div>    
    </form>  
</div>
@endsection

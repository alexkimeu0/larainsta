@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/p" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6 offset-3" style="border: 1px solid lightgray; padding: 2rem; border-radius: .5rem;">
                <div class="row">
                    <h4 style="border-bottom: 1px solid lightgray;">Add New Post</h4>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Caption</label>
    
                        <input 
                            id="caption" 
                            type="text" 
                            class="form-control 
                            @error('caption') is-invalid 
                            @enderror" 
                            name="caption"
                            value="{{ old('caption') }}" 
                            required 
                            autocomplete="caption" 
                            autofocus>
    
                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>  
                
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Image</label>

                    <input type="file" class="form-control-file" id="image" name="image" required >

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>     
        </div>    
    </form>   
</div>
@endsection

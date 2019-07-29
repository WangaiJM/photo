@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>Create An Album</h2></div>

                <div class="card-body">
                    <form action="/album" method="POST" enctype="multipart/form-data">
                    @include('inc.messages')
                    @csrf
                        <div class="form-group">
                            <label for="name"><h5>Name</h5></label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="description"><h5>Description</h5></label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="cover_image"> <h5>Select Image</h5> </label><br>
                            <input type="file" name="cover_image" id="" class="">
                        </div>
                        <div class="form-group d-flex">
                            <input type="submit" value="Create an album" class="btn btn-primary btn-lg ml-auto">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

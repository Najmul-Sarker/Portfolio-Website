@extends('layouts.admin_layout')


@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit About</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit About</li>
        </ol>

        <form action="{{ route('admin.abouts.update',$about->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf

            <div class="row">
            
        <div class="form-group col-md-3 mt-3">
                <div class="my-3">
                    <label for="title"><h4>Title1</h4></label>
                    <input type="text" class="form-control" id="title1" name="title1" value="{{ $about->title1 }}" >
                </div>
            <div class="my-3">
                <div class="my-3">
                    <label for="title"><h4>Title2</h4></label>
                    <input type="text" class="form-control" id="title2" name="title2" value="{{ $about->title2 }}" >
                </div>
                <div class="my-3">
                    <label for="big image"><h4>Image</h4></label>
                    <img style="height: 30vh" src="{{ url($about->image) }}" class="img-thumbnail">
                    <input type="file" class="form-control" id="image" name="image" value="{{ $about->image }}" >
                </div>
                <div class="my-3">
                    <label for="description"><h4>Description</h4></label>
                    <textarea name="description" id="description" class="form-control" rows="5" >{{ $about->description }}</textarea>
                </div>
                

            </div>       
        </div>
        <input type="submit" class="btn btn-primary mt-5 ">
    </form>
    </div>

    
    
</main>
    
@endsection
@extends('layouts.admin_layout')


@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create About</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>

        <form action="{{ route('admin.abouts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
    
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Image</h3>
                    <img style="height: 30vh" src="{{ asset('assets/img/about_image.jpg') }}" class="img-thumbnail">
                    <input class="mt-3" type="file"  name="image">
                </div>
                
                <div class="form-group col-md-3 mt-3">
                    <div class="my-3">
                        <label for="title"><h4>Title1</h4></label>
                        <input type="text" class="form-control" id="title1" name="title1" >
                    </div>
                    <div class="my-3">
                        <label for="title"><h4>Title2</h4></label>
                        <input type="text" class="form-control" id="title2" name="title2" >
                    </div>
                    
                    <div class="col-md-3 mt-3">
                        <label for="resume"><h4>Description</h4></label>
                        <textarea name="description" class="form-control"  rows="5"></textarea>
    
                    </div>
                    
                </div>
            </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5 ">
        </form>
    </div>

    
    
</main>
    
@endsection
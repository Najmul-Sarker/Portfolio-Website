@extends('layouts.admin_layout')


@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Portfolio</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit Portfolio</li>
        </ol>

        <form action="{{ route('admin.portfolios.update',$portfolio->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf

            <div class="row">
            
        <div class="form-group col-md-3 mt-3">
                <div class="my-3">
                    <label for="title"><h4>Title</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $portfolio->title }}" >
                </div>
            <div class="my-3">
                <div class="my-3">
                    <label for="title"><h4>Sub Title</h4></label>
                    <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{ $portfolio->sub_title }}" >
                </div>
                <div class="my-3">
                    <label for="big image"><h4>Big Image</h4></label>
                    <img style="height: 30vh" src="{{ url($portfolio->big_image) }}" class="img-thumbnail">
                    <input type="file" class="form-control" id="big_image" name="big_image" value="{{ $portfolio->big_image }}" >
                </div>
                <div class="my-3">
                    <label for="small image"><h4>Small Image</h4></label>
                    <img style="height: 30vh" src="{{ url($portfolio->small_image) }}" class="img-thumbnail">
                    <input type="file" class="form-control" id="small_image" name="small_image" value="{{ $portfolio->small_image }}" >
                </div>
                
                <div class="my-3">
                    <label for="description"><h4>Description</h4></label>
                    <textarea name="description" id="description" class="form-control" rows="5" >{{ $portfolio->description }}</textarea>
                </div>
                <div class="my-3">
                    <label for="client"><h4>Client</h4></label>
                    <input type="text" class="form-control" id="client" name="client" value="{{ $portfolio->client }}" >
                </div>
                <div class="my-3">
                    <label for="category"><h4>Category</h4></label>
                    <input type="text" class="form-control" id="category" name="category" value="{{ $portfolio->category }}" >
                </div>

            </div>       
        </div>
        <input type="submit" class="btn btn-primary mt-5 ">
    </form>
    </div>

    
    
</main>
    
@endsection
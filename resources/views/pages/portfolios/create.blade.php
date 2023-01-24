@extends('layouts.admin_layout')


@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>

        <form action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
    
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Big Image</h3>
                    <img style="height: 30vh" src="{{ asset('assets/img/big_image.jpg') }}" class="img-thumbnail">
                    <input class="mt-3" type="file"  name="big_image">
                </div>
                <div class="form-group col-md-3 mt-3">
                    <h3>Small Image</h3>
                    <img style="height: 20vh" src="{{ asset('assets/img/small_image.jpg') }}" class="img-thumbnail">
                    <input class="mt-3" type="file"  name="small_image">
                </div>
                <div class="form-group col-md-3 mt-3">
                    <div class="my-3">
                        <label for="title"><h4>Title</h4></label>
                        <input type="text" class="form-control" id="title" name="title" >
                    </div>
                    <div class="my-3">
                        <label for="sub_title"><h4>Sub Title</h4></label>
                        <input type="text" class="form-control" id="sub_title" name="sub_title">
                    </div>
                    <div class="col-md-3 mt-3">
                        <label for="resume"><h4>Description</h4></label>
                        <textarea name="description" class="form-control"  rows="5"></textarea>
    
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <label for="resume"><h4>Client</h4></label>
                        <input type="text" id="client" name="client">
    
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <label for="resume"><h4>Category</h4></label>
                        <input type="text" id="category" name="category">
    
                    </div>
                </div>
            </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5 ">
        </form>
    </div>

    
    
</main>
    
@endsection
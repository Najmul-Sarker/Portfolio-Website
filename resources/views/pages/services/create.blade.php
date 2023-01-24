@extends('layouts.admin_layout')


@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>

        <form action="{{ route('admin.services.store') }}" method="POST" >
        @csrf

            <div class="row">
            
            <div class="form-group col-md-3 mt-3">
                <div class="my-3">
                    <label for="title"><h4>Font Icon</h4></label>
                    <input type="text" class="form-control" id="icon" name="icon" >
                </div>
                <div class="my-3">
                    <label for="title"><h4>Title</h4></label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                
                <div class="my-3">
                    <label for="title"><h4>Description</h4></label>
                    <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                </div>

            </div>       
        </div>
        <input type="submit" class="btn btn-primary mt-5 ">
    </form>
    </div>

    
    
</main>
    
@endsection
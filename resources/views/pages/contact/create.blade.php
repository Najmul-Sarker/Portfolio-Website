@extends('layouts.admin_layout')


@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>

        <form action="{{ route('admin.contact.store') }}" method="POST" >
        @csrf

            <div class="row">
            
            <div class="form-group col-md-3 mt-3">
                <div class="my-3">
                    <label for="title"><h4>Name</h4></label>
                    <input type="text" class="form-control" id="name" name="name" >
                </div>
                <div class="my-3">
                    <label for="title"><h4>Email</h4></label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="my-3">
                    <label for="title"><h4>Number</h4></label>
                    <input type="tel" class="form-control" id="number" name="number">
                </div>
                
                <div class="my-3">
                    <label for="title"><h4>Message</h4></label>
                    <textarea name="message" id="message" class="form-control" rows="5"></textarea>
                </div>

            </div>       
        </div>
        <input type="submit" class="btn btn-primary mt-5 ">
    </form>
    </div>

    
    
</main>
    
@endsection
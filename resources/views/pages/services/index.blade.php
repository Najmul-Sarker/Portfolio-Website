@extends('layouts.admin_layout')


@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">All Services</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">All Services</li>
        </ol>

        <div class="container">
            <div class="row justifay-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"><h3>All Services</h3></div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Icon</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service )
                                    <tr>
                                        <td>{{ $service->id }}</td>
                                        <td>{{ $service->icon }}</td>
                                        <td>{{ $service->title }}</td>
                                        <td>{{Str::limit(strip_tags($service->description), 40)  }}</td>
                    
                                        <td>
                                            <a href="{{ route('admin.services.edit',$service->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            
                                            <form action="{{ route('admin.services.delete',$service->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                        
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        
    </div>

    
    
</main>
    
@endsection
@extends('layouts.admin_layout')


@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">All Abouts</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">All Abouts</li>
        </ol>

        <div class="container">
            <div class="row justifay-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"><h3>All Abouts</h3></div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title1</th>
                                        <th>Title2</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($abouts as $about )
                                    <tr>
                                        <td>{{ $about->id }}</td>
                                        <td>{{ $about->title1 }}</td>
                                        <td>{{ $about->title2 }}</td>
                                        <td>
                                            <img width="60vh" src="{{ url($about->image) }}" alt="image">
                                        </td>
                                        
                                        <td>{{Str::limit(strip_tags($about->description), 40)  }}</td>
                    
                                        <td>
                                            <a href="{{ route('admin.abouts.edit',$about->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            
                                            <form action="{{ route('admin.abouts.delete',$about->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger ">Delete</button>
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
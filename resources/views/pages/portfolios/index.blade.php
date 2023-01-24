@extends('layouts.admin_layout')


@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">All Portfolios</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">All Portfolios</li>
        </ol>

        <div class="container">
            <div class="row justifay-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"><h3>All Portfolios</h3></div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Sub_title</th>
                                        <th>Big_Image</th>
                                        <th>Small_Image</th>
                                        <th>Description</th>
                                        <th>Client</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($portfolios as $portfolio )
                                    <tr>
                                        <td>{{ $portfolio->id }}</td>
                                        <td>{{ $portfolio->title }}</td>
                                        <td>{{ $portfolio->sub_title }}</td>
                                        <td>
                                            <img width="60vh" src="{{ url($portfolio->big_image) }}" alt="big_image">
                                        </td>
                                        <td>
                                            <img width="60vh" src="{{ url($portfolio->small_image) }}" alt="small_image">
                                        </td>
                                        <td>{{Str::limit(strip_tags($portfolio->description), 40)  }}</td>
                                        <td>{{ $portfolio->client }}</td>
                                        <td>{{ $portfolio->category }}</td>
                    
                                        <td>
                                            <a href="{{ route('admin.portfolios.edit',$portfolio->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            
                                            <form action="{{ route('admin.portfolios.delete',$portfolio->id) }}" method="POST">
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
@extends('layouts.admin_layout')


@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">All Contact</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">All Contact</li>
        </ol>

        <div class="container">
            <div class="row justifay-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"><h3>All Contact</h3></div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact )
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{Str::limit(strip_tags($contact->message), 40)  }}</td>
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
@extends('layouts.app')

@section('css')
    
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}" class="text-decoration-none text-danger">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List Headline</li>
                </ol>
            </nav>
        </div>
        @if ($headline->isEmpty())
            <div class="col-md-12">
                <div class="alert alert-info" role="alert">
                    No headline availabe, please create <a href="{{ url('headline/create') }}">here</a>
                </div>
            </div>
        @else
            @if (session('success'))
                <div class="col-md-12">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <div class="col-md-12">
                <div class="card shadow" style="border-radius: 20px;">
                <div class="card-body py-5 px-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Headline</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($headline as $value)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $value->headline }}</td>
                                    <td>{{ $value->business_category }}</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{ $value->id }}"><i class="bi bi-pencil-square"></i></a>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="edit{{ $value->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Headline</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ url('admin/headline/update') }}/{{ $value->id }}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <textarea class="form-control" placeholder="Headline here..." name="headline" rows="6" required>{{ $value->headline }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Update <i class="bi bi-check"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection

@section('js')
    
@endsection
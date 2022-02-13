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
                    <li class="breadcrumb-item active" aria-current="page">Create Headline</li>
                </ol>
            </nav>
        </div>

        @if(session('success'))
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        <div class="col-md-12">
            <div class="card shadow" style="border-radius: 20px;">
                <div class="card-body py-4 px-4">
                    <form action="{{ url('headline-store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info" role="alert">
                                    <p><b>How To : </b></p>
                                    <p>Code : <b>[target_market], [masalah], [solution]</b></p>
                                    <hr>
                                    <p>1. Write your headline below and you can use code above to insert in your headline.</p>
                                    <p>2. Choose category business for your headline.</p>
                                    <p>3. Publish your new headline.</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Headline here..." name="headline" rows="6" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <select class="form-select" name="business_category" required>
                                    <option value="">-- Choose Category Business --</option>
                                    <option value="makanan">Makanan</option>
                                    <option value="servis">Servis</option>
                                    <option value="fashion">Fashion</option>
                                    <option value="kesihatan">Kesihatan</option>
                                    <option value="kecantikkan">Kecantikkan</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-baby-blue float-end">Publish <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    
@endsection
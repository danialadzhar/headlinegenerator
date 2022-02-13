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
                    <li class="breadcrumb-item"><a href="{{ url('headline/step-2') }}" class="text-decoration-none text-danger">Generate</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Result</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        @if ($niche == "" && $target_market == "" && $masalah == "" && $solution == "")
            <div class="col-md-12 mt-4">
                <div class="alert alert-warning" role="alert">
                    Sorry! session was expired please click <a href="{{ route('home') }}">here</a> to redirect home.
                </div>
            </div>
        @else
            <div class="col-md-12">
                <h1>Headline "{{ $niche }}"</h1>
            </div>
            @if ($list_headline->isEmpty())
                <div class="col-md-12">
                    <div class="alert alert-warning" role="alert">
                        Sorry! No headline related with "{{ $niche }}"
                    </div>
                </div>
            @else
                <div class="col-md-12">
                    <div class="row">
                        @foreach ($list_headline as $value)
                            <div class="col-md-4 mt-3">
                                <div class="card shadow" style="border-radius: 20px;">
                                    <div class="card-body py-4 px-4">
                                        <p>{!! str_replace(["[niche]", "[target_market]", "[masalah]", "[solution]"], ['<b class="text-danger">' . $niche . '</b>','<b class="text-danger">' . $target_market . '</b>','<b class="text-danger">' . $masalah . '</b>','<b class="text-danger">' . $solution . '</b>'], $value->headline) !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endif
    </div>
</div>
@endsection

@section('js')

@endsection
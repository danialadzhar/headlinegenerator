@extends('layouts.app')

@section('css')
<style>
@media only screen and (max-width: 600px) {
    .hide-button-desktop{
        display: none;
    }
}

@media only screen and (min-width: 600px) {
    .hide-button-mobile{
        display: none;
    }
}
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}" class="text-decoration-none text-danger">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Generate</li>
                </ol>
            </nav>
        </div>
    </div>
    <form autocomplete="off" action="{{ url('headline/fill-in/blank') }}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="row mt-3 justify-content-center">
            <div class="col-md-8">
                <div class="card shadow" style="border-radius: 20px;">
                    <div class="card-body py-5 px-4">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <h4>Please fill in the blanks below</h4>
                                <p>You need to fill in all the blanks below, to ensure the headline is generated correctly</p>
                            </div>
                            <div class="col-md-12">
                                <p><b>Business Category :</b> "{{ $niche }}"</p>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="target_market" placeholder="Sasaran Pelanggan" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="masalah" placeholder="Masalah Pelanggan" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="solution" placeholder="Solution/Penyelesaian" required>
                                </div>
                                <button type="submit" class="btn btn-baby-blue float-end hide-button-desktop">Generate <i class="bi bi-arrow-right"></i></button>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-baby-blue float-end hide-button-mobile">Generate <i class="bi bi-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <small class="text-center text-muted mt-5">All Right Reserved © {{ date('Y') }} Momentum Internet Sdn Bhd</small>
        </div>
    </form>
</div>
@endsection

@section('js')
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()
</script>
@endsection

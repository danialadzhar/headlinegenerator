<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Headline Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .btn-baby-blue{
            background-color: #398AB9;
            color: #ffffff;
            
        }

        .btn-baby-blue:hover{
            color: #ffffff;
        }
        .bg-baby-blue{
            background-color: #398AB9;
            color: #ffffff;
        }
        .bg-baby-blue-2{
            background-color: #f4fafd;
        }
    </style>
</head>
<body class="bg-baby-blue-2">
    <div class="container py-4">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-8">
                <div class="card py-4 px-4 shadow" style="border-radius: 20px;">
                    {{-- <div class="card-header bg-baby-blue text-center">{{ __('Register') }}</div> --}}

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <h3 class="text-center text-secondary">Register | Headline Generator</h3>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <input id="name" placeholder="Fullname" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12 mb-3">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-baby-blue">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3 text-center">
                                    Already registered? Sign In <a href="{{ route('login') }}" class="text-decoration-none"> here</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <small class="text-center text-muted mt-5">All Right Reserved © {{ date('Y') }} Momentum Internet Sdn Bhd</small>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>

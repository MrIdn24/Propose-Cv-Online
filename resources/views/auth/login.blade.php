@extends('master')

@section('content')
<section id="login">

    <div class="container">
        <div class="card m-auto shadow">
            <div class="card-head">
                <i class="fas fa-sign-in-alt me-2"></i>Masuk
            </div>
            <div class="card-form">
                <form method="POST" action="{{  route('login')  }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <!-- <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> -->
                    {{-- <button type="submit" class="btn btn-back">Kembali</button> --}}
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-login">Submit</button>
                    </div>
                    <p class="text-center mt-2 fw-normal">
                        daftar? <a href="{{ route('register') }}">klik disini</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

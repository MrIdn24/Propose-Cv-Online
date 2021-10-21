@extends('master')

@section('content')
<section id="login" style="margin-top: 150px;">
    <div class="container">
        <div class="card m-auto shadow">
            <div class="card-head">
                <i class="fas fa-sign-in-alt me-2"></i>Daftar
            </div>
            <div class="card-form">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="password_confirmation" required
                            autocomplete="new-password">
                    </div>
                    <!-- <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> -->
                            
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-login">Submit</button>
                    </div>
                    <p class="text-center mt-2 fw-normal">
                        masuk? <a href="{{ route('login') }}">klik disini</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

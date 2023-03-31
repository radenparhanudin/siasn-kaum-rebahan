@extends('layouts.auth')
@section('auth')
<div class="container d-flex flex-column">
    <div class="row vh-100">
        <div class="col-sm-10 col-md-8 col-lg-5 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">
                <div class="text-center mt-4">
                    <h2 class="h1 pt-3 fw-bold">{{ config('app.name') }}</h2>
                    <p>
                        Masuk ke akun Anda untuk melanjutkan
                    </p>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="mx-sm-4">
                            <div class="text-center">
                                <img src="{{ asset('assets') }}/img/logo/layanan.png" alt="{{ config('app.name') }}" width="120"/>
                            </div>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input class="form-control form-control-lg @error('username') is-invalid @enderror" type="text" name="username" id="username" placeholder="Username" />
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Password" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-lg btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in align-middle me-2"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
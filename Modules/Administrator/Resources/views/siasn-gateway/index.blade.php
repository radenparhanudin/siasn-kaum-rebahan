@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <form action="{{ route('siasn-gateway') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-info" role="alert">
                    <div class="alert-message">
                        <h4 class="alert-heading text-uppercase fw-bold">Token SIASN - Gateway!</h4>
                        <p>
                            Token dibutuhkan untuk dapat mengakses layanan-layanan <strong>SIASN - Gateway</strong>
                        </p>
                        <p>
                            Anda bisa mendapatkan token dengan cara :
                            <ol>
                                <li>Jika belum memiliki akun SIASN Gateway silahkan daftar terlebih dahulu <a href="https://siasn-gateway.e-kantor.web.id/register" class="text-info" target="_blank">disini</a></li>
                                <li>Login ke <a href="https://siasn-gateway.e-kantor.web.id/login" class="text-info" target="_blank">SIASN Gateway</a></li>
                                <li>Klik nama pengguna dibagian pojok atas kemudian pilih <strong>Profile</strong></li>
                                <li>Copy <strong class="text-uppercase">Token SIASN Gateway</strong> yang text berwarna <span class="text-danger">merah</span></li>
                                <li>Pastekan token yang sudah di copy pada inputan dibawah ini.</li>
                            </ol>
                        </p>
                        <hr>
                        <div class="btn-list">
                            Jika anda sudah login sebelumnya di SIASN Gateway anda dapat mengklik <a href="https://siasn-gateway.e-kantor.web.id/profile" target="_blank" class="btn btn-info">Ambil Token</a> untuk langsung kehalaman profile SIASN Gateway.
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <div class="alert-message">
                <strong class="me-2"><i class="far fa-check-circle"></i></strong> {{ session('success') }}
            </div>
        </div>
        @endif
        @if (session()->has('error'))
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <div class="alert-message">
                <strong class="me-2"><i class="far fa-check-circle"></i></strong> {{ session('error') }}
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-sm-10">
                <div class="form-group">
                    <input type="text" name="token_siasn_gateway" value="{{ session('token_siasn_gateway') }}" class="form-control form-control-lg @error('token_siasn_gateway') is-invalid @enderror" placeholder="Token SIASN Gateway">
                    @error('token_siasn_gateway')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-info btn-lg">Set Token</button>
            </div>
        </div>
    </form>
</div>
@endsection

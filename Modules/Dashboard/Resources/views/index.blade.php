@extends('layouts.app')

@section('content')
<h1>Hi, {{ Auth::user()->name }}</h1>
<p>
    Selamat datang di <strong>{!! config('app.name') !!}</strong>. Anda memiliki hak akses <strong>{!! $data['roles'] !!}</strong>
</p>
@include('components.alert')
<div class="row">
    @hasrole('administrator')
    <div class="col-sm-12">
        <form action="{{ route('dashboard.ubah-password') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <input type="text" name="password" class="form-control form-control-lg" placeholder="Password Baru">
            </div>
            <button type="submit" class="btn btn-dark btn-lg">Ubah Password</button>
        </form>
    </div>
    @endhasrole
</div>
@endsection
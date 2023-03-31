@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><i class="align-middle me-2" data-feather="copy"></i>Set <strong>Token</strong></h1>
    <p>
        Untuk dapat terhubung dengan aplikasi tujuan, terlebih dahulu set token aplikasi tujuan.
    </p>
    @include('components.alert')
    @include('dashboard::set-token.siasn-instansi')
    @include('dashboard::set-token.formasi-menpan')
</div>
@endsection
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
        <strong class="me-2"><i class="fas fa-exclamation-triangle"></i></strong> {{ session('error') }}
    </div>
</div>
@endif
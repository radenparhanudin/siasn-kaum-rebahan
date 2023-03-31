<div class="card">
    <form action="{{ route('set-token.siasn-instansi') }}" method="POST">
        @csrf
        <div class="card-body">
            <h5 class="card-title">Token SIASN Instansi</h5>
            <input type="text" name="siasntoken" value="{{ session('siasntoken') }}" class="form-control form-control-lg @error('siasntoken') is-invalid @enderror" placeholder="Token SIASN Instansi">
            @error('siasntoken')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-dark btn-lg">Set Token</button>
        </div>
    </form>
</div>
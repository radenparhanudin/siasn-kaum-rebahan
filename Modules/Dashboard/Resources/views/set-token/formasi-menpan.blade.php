<div class="card">
    <form action="{{ route('set-token.formasi-menpan') }}" method="POST">
        @csrf
        <div class="card-body">
            <h5 class="card-title">Cookie Formasi MENPAN</h5>
            <input type="text" name="formasicookie" value="{{ session('formasicookie') }}" class="form-control form-control-lg @error('formasicookie') is-invalid @enderror" placeholder="Cookie Formasi MENPAN">
            @error('formasicookie')
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
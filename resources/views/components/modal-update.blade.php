<div class="modal fade" id="modalUpdate" data-bs-backdrop="static" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog {{ $modalSize ?? "" }}" role="document">
        <div class="modal-content">
            <form id="formUpdate" action="{{ $formAction }}" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $modalTitle ?? "" }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body m-3">
                    {!! $modalBody !!}
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-ccw align-middle me-1"><polyline points="1 4 1 10 7 10"></polyline><path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path></svg>
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-sync me-1"></i>
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
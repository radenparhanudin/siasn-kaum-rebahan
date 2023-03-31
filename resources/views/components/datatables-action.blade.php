@isset($action)
@if (array_sum(array_column($action, 'show')) > 0)
<div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bars"></i>
    </button>
    <div class="dropdown-menu">
        {{-- Formasi Menpan --}}
        @if (isset($action['download']) AND $action['download']['show'])
        <a class="dropdown-item btn-download" href="{{ $action['download']['href'] }}">
            <i class="fas fa-cloud-download-alt me-2"></i>
            {{ $action['download']['text'] ?? "Download" }}
        </a>
        @endif

        @if (isset($action['download-child']) AND $action['download-child']['show'])
        <a class="dropdown-item btn-download-child" href="{{ $action['download-child']['href'] }}">
            <i class="fas fa-cloud-download-alt me-2"></i>
            Download Child
        </a>
        @endif

        @if (isset($action['export']) AND $action['export']['show'])
        <a class="dropdown-item" href="{{ $action['export']['href'] }}" target="_blank">
            <i class="fas fa-file-export me-2"></i>
            Export Data
        </a>
        @endif

        @if (isset($action['usultambahstruktur']) AND $action['usultambahstruktur']['show'])
        <a class="dropdown-item btn-usul" href="{{ $action['usultambahstruktur']['href'] }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus align-middle me-2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            Usul Tambah Struktur
        </a>
        @endif

        @if (isset($action['usulubahstatus']) AND $action['usulubahstatus']['show'])
        <a class="dropdown-item btn-usul" href="{{ $action['usulubahstatus']['href'] }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
            Usul Ubah Status
        </a>
        @endif

        @if (isset($action['usulubah']) AND $action['usulubah']['show'])
        <a class="dropdown-item btn-usul" href="{{ $action['usulubah']['href'] }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
            Usul Ubah
        </a>
        @endif

        @if (isset($action['usulhapus']) AND $action['usulhapus']['show'])
        <a class="dropdown-item btn-usul" href="{{ $action['usulhapus']['href'] }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            Usul Hapus
        </a>
        @endif


        {{-- Global --}}
        @if (isset($action['edit']) AND $action['edit']['show'])
        <a class="dropdown-item btn-edit" href="{{ $action['edit']['href'] }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
            Edit Data
        </a>
        @endif
        @if (isset($action['delete']) AND $action['delete']['show'])
        <a class="dropdown-item btn-delete" href="{{ $action['delete']['href'] }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            {{ $action['delete']['text'] ?? "Hapus Data"}}
        </a>
        @endif
    </div>
</div>
@endif
@endisset
<h1 class="h3 mb-3"><i class="align-middle me-2" data-feather="activity"></i>Data <strong>Statistik</strong></h1>
<div class="w-100">
    <div class="row">
        @foreach ($data['kedudukan_hukums'] as $kedudukan_hukum)
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">{{ $kedudukan_hukum['nama'] }}</h5>
                        </div>
                        
                        <div class="col-auto">
                            <div class="stat text-primary">
                                <i class="align-middle" data-feather="users"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="mt-1 mb-3">{{ $kedudukan_hukum['jumlah'] }}</h1>
                    <div class="mb-0">
                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> {{ $kedudukan_hukum['persentase'] . "%" }} </span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
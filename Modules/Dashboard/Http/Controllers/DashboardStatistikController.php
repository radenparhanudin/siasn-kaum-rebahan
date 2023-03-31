<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\Dashboard\Http\Controllers; use App\Http\Controllers\Controller; use App\Models\User; use Illuminate\Http\Request; use Illuminate\Support\Facades\Auth; use Illuminate\Support\Facades\Hash; use Illuminate\Support\Facades\Storage; use Modules\Dashboard\Services\DataService; use Modules\Dashboard\Services\SessionService; class DashboardStatistikController extends Controller { protected $sessionService; protected $dataService; public function __construct(SessionService $sessionService, DataService $dataService) { $this->sessionService = $sessionService; $this->dataService = $dataService; } public function index() { $data = ["\x6b\x65\x64\x75\x64\x75\153\x61\156\x5f\x68\x75\x6b\165\155\163" => $this->dataService->kedudukan_hukums()]; return view("\144\x61\163\150\x62\x6f\x61\162\144\72\x3a\x73\164\x61\x74\x69\163\x74\x69\x6b\56\x69\x6e\144\x65\170", compact("\x64\x61\164\141")); } }

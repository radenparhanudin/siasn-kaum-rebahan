<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Http\Controllers; use App\Http\Controllers\Controller; use Illuminate\Http\Request; use Modules\DataReferensi\Entities\Jft; use Yajra\DataTables\Facades\DataTables; class JftController extends Controller { public function index() { return view("\144\141\164\x61\x72\145\146\145\162\x65\x6e\163\x69\72\72\152\146\x74\x2e\x69\x6e\x64\145\170"); } public function download(Request $request) { if ($request->ajax()) { goto chf5h; d8nJx: if (!isset($response["\162\145\163\165\x6c\x74\163"])) { return $this->sendResponse(false, $response["\155\x65\163\163\141\147\145"]); } goto g0qfa; g0qfa: foreach ($response["\162\x65\163\x75\154\164\163"] as $data) { Jft::updateOrCreate(["\151\144" => $data["\151\144"]], $data); } goto YCqA5; STk0A: $response = $this->getRequest("\163\151\x61\163\x6e\x2d\151\x6e\163\x74\141\x6e\163\x69\57\x72\145\x66\145\x72\x65\x6e\163\151\57\152\x66\x74\x3f{$query}"); goto d8nJx; YCqA5: return $this->sendResponse(true, "\x55\x70\x64\x61\x74\145\40\144\x61\x74\x61\x20\x62\x65\x72\150\141\163\x69\154"); goto s34Nx; chf5h: $query = http_build_query(["\156\141\155\x61" => $request->nama]); goto STk0A; s34Nx: } } public function datatable(Request $request) { if ($request->ajax()) { $data = Jft::query(); return DataTables::eloquent($data)->toJson(); } } }

<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Http\Controllers; use App\Http\Controllers\Controller; use Illuminate\Http\Request; use Modules\DataReferensi\Entities\TingkatPendidikan; use Yajra\DataTables\Facades\DataTables; class TingkatPendidikanController extends Controller { public function index() { return view("\144\141\x74\141\162\145\146\x65\x72\145\x6e\x73\x69\x3a\x3a\x74\151\x6e\x67\153\x61\164\x2d\160\x65\156\x64\x69\144\151\x6b\141\x6e\56\x69\x6e\x64\x65\x78"); } public function update(Request $request) { if ($request->ajax()) { goto mfpCO; izxUG: if (!isset($response["\162\145\x73\165\154\x74\163"])) { return $this->sendResponse(false, $response["\155\x65\x73\x73\141\147\x65"]); } goto FmgaM; FmgaM: foreach ($response["\162\145\x73\165\154\164\163"] as $data) { TingkatPendidikan::updateOrCreate(["\x69\x64" => $data["\x69\144"]], $data); } goto XamaN; XamaN: return $this->sendResponse(true, "\x55\x70\x64\141\x74\x65\40\x64\141\x74\x61\x20\x62\x65\x72\x68\141\x73\x69\154"); goto eS_Wh; mfpCO: $response = $this->getRequest("\163\151\141\x73\x6e\x2d\151\156\x73\164\141\156\x73\151\57\162\x65\146\x65\162\145\156\163\151\x2f\164\151\x6e\x67\153\141\x74\x2d\160\145\156\144\x69\x64\151\153\x61\156"); goto izxUG; eS_Wh: } } public function datatable(Request $request) { if ($request->ajax()) { $data = TingkatPendidikan::query(); return DataTables::eloquent($data)->toJson(); } } }
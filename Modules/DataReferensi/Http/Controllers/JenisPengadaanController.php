<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Http\Controllers; use App\Http\Controllers\Controller; use Illuminate\Http\Request; use Modules\DataReferensi\Entities\JenisPengadaan; use Yajra\DataTables\Facades\DataTables; class JenisPengadaanController extends Controller { public function index() { return view("\x64\141\164\x61\x72\145\146\145\162\x65\x6e\163\x69\72\x3a\152\145\156\x69\x73\x2d\x70\145\156\x67\141\x64\x61\x61\x6e\56\x69\x6e\144\x65\x78"); } public function update(Request $request) { if ($request->ajax()) { goto Cr8Nb; Cr8Nb: $response = $this->getRequest("\x73\x69\x61\x73\x6e\x2d\151\156\x73\164\141\156\x73\151\x2f\162\145\146\x65\x72\145\156\x73\x69\57\x6a\145\x6e\x69\x73\55\160\145\x6e\x67\141\x64\x61\141\x6e"); goto Tb3_b; lWWpT: foreach ($response["\x72\x65\x73\165\154\164\x73"] as $data) { JenisPengadaan::updateOrCreate(["\151\x64" => $data["\151\144"]], $data); } goto FIs2g; FIs2g: return $this->sendResponse(true, "\125\x70\x64\x61\164\145\x20\x64\141\164\141\x20\142\x65\162\x68\141\x73\151\154"); goto SDU4u; Tb3_b: if (!isset($response["\162\x65\x73\165\x6c\x74\x73"])) { return $this->sendResponse(false, $response["\155\145\163\x73\141\x67\x65"]); } goto lWWpT; SDU4u: } } public function datatable(Request $request) { if ($request->ajax()) { $data = JenisPengadaan::query(); return DataTables::eloquent($data)->toJson(); } } }
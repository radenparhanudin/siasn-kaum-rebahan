<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Http\Controllers; use App\Http\Controllers\Controller; use Illuminate\Http\Request; use Modules\DataReferensi\Entities\Kpkn; use Yajra\DataTables\Facades\DataTables; class KpknController extends Controller { public function index() { return view("\144\x61\x74\141\x72\x65\x66\145\x72\145\156\163\151\72\x3a\x6b\160\x6b\x6e\x2e\151\156\x64\x65\170"); } public function download(Request $request) { if ($request->ajax()) { goto yWebF; gvQCC: if (!isset($response["\162\145\x73\x75\154\x74\x73"])) { return $this->sendResponse(false, $response["\x6d\145\163\x73\141\x67\x65"]); } goto hONeG; ubtiP: $response = $this->getRequest("\x73\x69\x61\163\156\55\x69\156\163\x74\141\156\163\151\x2f\162\x65\146\x65\162\145\x6e\x73\x69\x2f\x6b\160\x6b\x6e\x3f{$query}"); goto gvQCC; hONeG: foreach ($response["\x72\145\163\x75\154\164\x73"] as $data) { Kpkn::updateOrCreate(["\x69\x64" => $data["\151\144"]], $data); } goto LF5ms; yWebF: $query = http_build_query(["\x6e\x61\x6d\141" => $request->nama]); goto ubtiP; LF5ms: return $this->sendResponse(true, "\x55\160\x64\x61\x74\x65\40\x64\141\x74\141\x20\142\145\x72\150\x61\x73\x69\x6c"); goto G1u9f; G1u9f: } } public function datatable(Request $request) { if ($request->ajax()) { $data = Kpkn::query(); return DataTables::eloquent($data)->toJson(); } } }
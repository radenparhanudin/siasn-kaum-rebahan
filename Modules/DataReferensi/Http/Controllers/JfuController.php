<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Http\Controllers; use App\Http\Controllers\Controller; use Illuminate\Http\Request; use Modules\DataReferensi\Entities\Jfu; use Yajra\DataTables\Facades\DataTables; class JfuController extends Controller { public function index() { return view("\144\141\x74\x61\162\145\146\145\162\x65\x6e\163\x69\72\x3a\152\x66\165\x2e\151\156\144\x65\170"); } public function download(Request $request) { if ($request->ajax()) { goto ikhWz; ikhWz: $query = http_build_query(["\156\141\155\141" => $request->nama]); goto ETH3C; ETH3C: $response = $this->getRequest("\x73\151\141\163\x6e\55\x69\x6e\163\164\141\x6e\x73\151\57\162\145\x66\145\x72\145\156\x73\x69\57\152\x66\165\x3f{$query}"); goto OMx33; ZBgfT: foreach ($response["\162\x65\x73\x75\x6c\164\x73"] as $data) { Jfu::updateOrCreate(["\151\144" => $data["\151\x64"]], $data); } goto gQ_to; gQ_to: return $this->sendResponse(true, "\x55\x70\x64\x61\164\x65\40\144\141\x74\x61\40\x62\145\x72\150\x61\163\x69\x6c"); goto ABCAj; OMx33: if (!isset($response["\162\x65\x73\x75\154\x74\x73"])) { return $this->sendResponse(false, $response["\155\145\163\x73\x61\x67\145"]); } goto ZBgfT; ABCAj: } } public function datatable(Request $request) { if ($request->ajax()) { $data = Jfu::query(); return DataTables::eloquent($data)->toJson(); } } }

<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Http\Controllers; use App\Http\Controllers\Controller; use Illuminate\Http\Request; use Modules\DataReferensi\Entities\Lokasi; use Yajra\DataTables\Facades\DataTables; class LokasiController extends Controller { public function index() { return view("\x64\x61\x74\141\x72\145\146\x65\162\x65\x6e\x73\151\72\72\154\x6f\x6b\x61\x73\151\x2e\x69\156\x64\x65\170"); } public function download(Request $request) { if ($request->ajax()) { goto vnbjk; d2ILE: return $this->sendResponse(true, "\125\x70\x64\141\x74\x65\x20\x64\141\164\141\40\142\x65\162\150\x61\163\151\154"); goto Xz0HN; uhyp0: $response = $this->getRequest("\163\151\x61\x73\156\55\x69\156\163\x74\141\x6e\x73\x69\57\x72\145\146\145\x72\x65\156\163\151\x2f\154\x6f\x6b\141\x73\x69\x3f{$query}"); goto WVCWP; vnbjk: $query = http_build_query(["\x6e\x61\155\141" => $request->nama]); goto uhyp0; fsOGH: foreach ($response["\162\x65\x73\165\x6c\x74\x73"] as $data) { Lokasi::updateOrCreate(["\151\x64" => $data["\x69\x64"]], $data); } goto d2ILE; WVCWP: if (!isset($response["\x72\145\163\x75\x6c\164\163"])) { return $this->sendResponse(false, $response["\155\x65\x73\163\x61\147\x65"]); } goto fsOGH; Xz0HN: } } public function datatable(Request $request) { if ($request->ajax()) { $data = Lokasi::query(); return DataTables::eloquent($data)->toJson(); } } }
<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Http\Controllers; use App\Http\Controllers\Controller; use Illuminate\Http\Request; use Modules\DataReferensi\Entities\DokumenPengadaan; use Modules\DataReferensi\Entities\JenisFormasi; use Yajra\DataTables\Facades\DataTables; class DokumenPengadaanController extends Controller { public function index() { return view("\x64\x61\x74\141\x72\x65\146\145\x72\145\156\163\x69\x3a\x3a\x64\157\153\165\155\x65\156\x2d\x70\x65\156\147\x61\x64\141\x61\156\56\x69\x6e\x64\145\x78"); } public function update(Request $request) { if ($request->ajax()) { foreach (JenisFormasi::all() as $jenis_formasi) { goto nt6h3; CWgmK: if (isset($response["\x72\x65\x73\165\x6c\x74\163"])) { foreach ($response["\x72\x65\163\165\154\164\x73"] as $data) { DokumenPengadaan::updateOrCreate(["\151\x64" => $data["\151\x64"]], $data); } } goto ZBxaS; wJmWN: $response = $this->getRequest("\163\151\x61\163\156\55\151\x6e\x73\x74\x61\x6e\163\151\x2f\162\x65\146\x65\162\x65\x6e\163\x69\x2f\x64\157\x6b\165\x6d\x65\156\55\160\145\x6e\x67\141\144\141\141\156\x3f{$query}"); goto CWgmK; nt6h3: $query = http_build_query(["\152\x65\x6e\x69\x73\137\x66\157\162\x6d\x61\x73\x69\x5f\151\x64" => $jenis_formasi->id]); goto wJmWN; ZBxaS: } return $this->sendResponse(true, "\125\x70\144\x61\x74\145\x20\x64\141\x74\141\40\142\145\162\x68\141\x73\151\x6c"); } } public function datatable(Request $request) { if ($request->ajax()) { $data = DokumenPengadaan::query()->with("\x6a\x65\156\x69\x73\x5f\x66\157\x72\155\x61\163\151")->select("\x64\157\x6b\x75\x6d\145\x6e\137\x70\145\x6e\x67\x61\x64\x61\x61\156\x73\56\52"); return DataTables::eloquent($data)->addColumn("\x6a\145\x6e\x69\x73\x5f\146\x6f\162\155\141\x73\x69", function ($data) { return $data->jenis_formasi->nama ?? ''; })->editColumn("\x72\x65\161\x75\151\162\x65\144", function ($data) { return $data ? "\131\141" : "\x54\151\x64\x61\x6b"; })->toJson(); } } }

<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Http\Controllers; use App\Http\Controllers\Controller; use Illuminate\Http\Request; use Modules\DataReferensi\Entities\Layanan; use Yajra\DataTables\Facades\DataTables; class LayananController extends Controller { public function index() { return view("\144\x61\164\x61\162\x65\x66\x65\x72\x65\156\163\x69\72\72\154\x61\171\141\x6e\141\x6e\x2e\x69\x6e\144\x65\170"); } public function update(Request $request) { if ($request->ajax()) { goto xco8j; ugZdN: if (!isset($response["\x72\145\163\165\x6c\x74\x73"])) { return $this->sendResponse(false, $response["\x6d\x65\163\163\141\x67\145"]); } goto q8PmZ; xco8j: $response = $this->getRequest("\163\151\141\x73\x6e\55\151\x6e\163\164\141\x6e\x73\x69\57\x72\145\146\x65\162\145\x6e\163\x69\x2f\154\141\171\141\156\x61\156"); goto ugZdN; q8PmZ: foreach ($response["\x72\145\x73\x75\x6c\x74\x73"] as $data) { Layanan::updateOrCreate(["\151\x64" => $data["\x69\144"]], $data); } goto Nai1Q; Nai1Q: return $this->sendResponse(true, "\x55\x70\144\141\x74\x65\40\144\x61\x74\x61\40\x62\x65\162\150\141\163\151\154"); goto WgRNh; WgRNh: } } public function datatable(Request $request) { if ($request->ajax()) { $data = Layanan::query(); return DataTables::eloquent($data)->toJson(); } } }

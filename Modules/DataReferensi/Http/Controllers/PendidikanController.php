<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Http\Controllers; use App\Http\Controllers\Controller; use Illuminate\Http\Request; use Modules\DataReferensi\Entities\Pendidikan; use Yajra\DataTables\Facades\DataTables; class PendidikanController extends Controller { public function index() { return view("\x64\x61\164\x61\x72\x65\146\x65\x72\x65\x6e\163\x69\72\72\x70\x65\x6e\144\x69\x64\x69\x6b\x61\x6e\x2e\151\x6e\144\145\170"); } public function download(Request $request) { if ($request->ajax()) { goto IKqIA; hABj1: if (!isset($response["\x72\x65\x73\x75\x6c\164\x73"])) { return $this->sendResponse(false, $response["\x6d\x65\163\x73\141\147\145"]); } goto b7htB; IKqIA: $query = http_build_query(["\x6e\x61\x6d\141" => $request->nama]); goto RpKbg; nuoZN: return $this->sendResponse(true, "\125\160\x64\x61\164\x65\40\x64\x61\x74\141\40\x62\145\x72\150\x61\x73\151\154"); goto ZwAz9; RpKbg: $response = $this->getRequest("\x73\x69\141\x73\156\x2d\151\x6e\x73\x74\x61\x6e\x73\151\x2f\x72\145\x66\x65\162\145\156\163\151\57\x70\x65\156\x64\x69\x64\151\x6b\141\156\77{$query}"); goto hABj1; b7htB: foreach ($response["\162\x65\163\165\154\x74\x73"] as $data) { Pendidikan::updateOrCreate(["\x69\144" => $data["\151\x64"]], $data); } goto nuoZN; ZwAz9: } } public function datatable(Request $request) { if ($request->ajax()) { $data = Pendidikan::query()->with("\164\x69\156\x67\x6b\141\x74\x5f\160\145\156\x64\x69\x64\x69\153\x61\x6e")->select("\x70\145\x6e\x64\151\x64\151\x6b\141\x6e\x73\x2e\52"); return DataTables::eloquent($data)->addColumn("\x74\151\x6e\x67\x6b\141\x74\x5f\x70\x65\x6e\144\x69\x64\151\153\141\156", function ($data) { return $data->tingkat_pendidikan->nama ?? ''; })->toJson(); } } }

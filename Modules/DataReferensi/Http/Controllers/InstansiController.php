<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Http\Controllers; use App\Http\Controllers\Controller; use Illuminate\Http\Request; use Modules\DataReferensi\Entities\Instansi; use Yajra\DataTables\Facades\DataTables; class InstansiController extends Controller { public function index() { return view("\x64\141\164\141\x72\145\146\x65\162\145\x6e\x73\x69\72\72\x69\156\163\x74\141\156\x73\x69\x2e\x69\156\x64\145\x78"); } public function update(Request $request) { if ($request->ajax()) { goto KhHiF; KhHiF: $response = $this->getRequest("\x73\x69\141\163\156\55\151\x6e\x73\x74\x61\x6e\163\x69\x2f\162\x65\146\x65\x72\145\x6e\163\151\x2f\151\156\x73\x74\x61\x6e\x73\x69"); goto MGt3G; YxtS0: foreach ($response["\162\145\x73\165\154\164\x73"] as $data) { Instansi::updateOrCreate(["\x69\144" => $data["\x69\x64"]], $data); } goto XEB3o; MGt3G: if (!isset($response["\162\x65\163\165\154\x74\163"])) { return $this->sendResponse(false, $response["\155\145\x73\163\141\147\x65"]); } goto YxtS0; XEB3o: return $this->sendResponse(true, "\x55\160\144\141\164\x65\40\144\141\164\x61\x20\x62\x65\162\x68\x61\163\x69\x6c"); goto aiE2Z; aiE2Z: } } public function datatable(Request $request) { if ($request->ajax()) { $data = Instansi::query(); return DataTables::eloquent($data)->toJson(); } } }

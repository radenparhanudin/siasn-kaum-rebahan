<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\FormasiMenpan\Http\Controllers; use Illuminate\Database\QueryException; use Illuminate\Http\Request; use Maatwebsite\Excel\Facades\Excel; use Modules\FormasiMenpan\Entities\FmStrukturJabatan; use Modules\FormasiMenpan\Entities\FmStrukturJabatanUsulan; use Modules\FormasiMenpan\Exports\FmStrukturJabatanUsulanExport; use Modules\FormasiMenpan\Exports\FmStrukturJabatanUsulanImport; use Modules\FormasiMenpan\services\FmStrukturJabatanUsulanService; use Yajra\DataTables\Facades\DataTables; class FmStrukturJabatanUsulanController extends FormasiMenpanController { protected $fmStrukturJabatanUsulanService; public function __construct(FmStrukturJabatanUsulanService $fmStrukturJabatanUsulanService) { $this->fmStrukturJabatanUsulanService = $fmStrukturJabatanUsulanService; } public function index() { return view("\146\157\x72\x6d\x61\163\x69\155\145\156\160\x61\156\x3a\x3a\x6f\162\x67\x61\x6e\x69\163\x61\163\151\x2e\163\164\162\165\153\x74\165\x72\x2d\x6a\x61\142\x61\164\141\x6e\x2e\165\163\x75\x6c\x61\x6e\x2e\x69\156\x64\x65\170"); } public function export() { return Excel::download(new FmStrukturJabatanUsulanExport(), "\106\155\123\x74\162\165\153\x74\165\162\112\x61\142\x61\164\x61\x6e\x55\163\165\x6c\x61\156\105\x78\160\x6f\162\x74\x2e\170\x6c\163\170"); } public function import(Request $request) { goto ht3VZ; pQx_m: $headers = ["\111\104", "\x53\x74\x72\165\x6b\164\x75\x72\x20\112\141\142\141\x74\141\156\x20\x49\x44", "\116\157\x6d\x6f\162", "\120\141\162\145\156\x74\x20\x4e\157\x6d\x6f\162", "\x50\141\x72\x65\156\164\40\x50\x6f\163\151\163\x69\x20\x49\x44", "\120\157\x73\151\x73\151\x20\x49\104", "\x4e\x61\155\x61\40\112\x61\142\141\x74\x61\x6e", "\112\106\125\40\111\104", "\112\x46\x55\x20\x4e\141\155\141", "\112\x46\x54\40\x49\104", "\112\106\124\x20\x4e\141\155\141", "\116\x50\x53\x4e", "\x4e\141\155\x61\x20\x53\x65\153\x6f\154\141\x68", "\106\141\x73\x6b\145\163\40\x49\x44", "\106\141\x73\153\145\163\x20\116\x61\x6d\141", "\x4b\x65\154\141\x73", "\101\x42\x4b", "\x55\156\x69\x74\x20\113\145\x72\152\x61\40\x49\104"]; goto j1WbA; dYCkf: $file = $request->file_import; goto qMQBj; j1WbA: foreach ($datas[0] as $key => $value) { if ($value != $headers[$key]) { return $this->sendResponse(false, "{$value}\40\x74\151\144\141\x6b\x20\166\x61\x6c\x69\144\x20\143\x6f\x63\157\153"); } } goto LKJNv; h5tzc: try { goto j_Sem; j_Sem: foreach ($datas as $data) { FmStrukturJabatanUsulan::updateOrCreate(["\x69\x64" => $data[0]], ["\151\x64" => $data[0], "\146\x6d\x5f\x73\x74\x72\x75\x6b\164\x75\x72\x5f\152\141\x62\x61\x74\x61\156\x5f\151\x64" => $data[1], "\156\x6f\155\x6f\x72" => $data[2], "\160\x61\162\145\x6e\164\137\x6e\157\155\157\x72" => $data[3], "\x70\x61\162\x65\156\164\x5f\160\x6f\163\x69\163\151\137\151\144" => $data[4], "\x70\x6f\x73\151\163\x69\x5f\151\x64" => $data[5], "\156\x61\155\x61\x5f\x6a\141\142\141\164\141\156" => $data[6], "\x6a\x66\165\x5f\x69\x64" => $data[7], "\x6a\x66\165\x5f\x6e\x61\x6d\141" => $data[8], "\152\146\164\x5f\x69\x64" => $data[9], "\x6a\146\x74\x5f\x6e\x61\x6d\x61" => $data[10], "\156\160\x73\x6e" => $data[11], "\163\145\x6b\x6f\154\141\150" => $data[12], "\146\x61\163\153\145\x73\137\151\x64" => $data[13], "\146\x61\163\153\145\x73\137\x6e\141\x6d\141" => $data[14], "\153\145\154\x61\163" => $data[15], "\141\x62\x6b" => $data[16], "\165\x6e\x69\164\137\x6b\x65\162\x6a\x61\137\151\x64" => $data[17]]); } goto LZamV; B3dCW: FmStrukturJabatanUsulan::where("\x70\141\162\145\156\x74\x5f\156\157\x6d\x6f\162", $parent->nomor)->update(["\x70\x61\x72\x65\x6e\x74\137\151\144" => $parent->fm_struktur_jabatan_id]); goto jAVT8; LZamV: $parent = FmStrukturJabatanUsulan::whereNotNull("\146\x6d\137\163\164\162\x75\153\164\x75\x72\137\x6a\x61\142\141\x74\141\156\137\x69\144")->first(); goto B3dCW; jAVT8: } catch (QueryException $e) { return $this->sendResponse(false, $e->errorInfo[2]); } goto PRz5A; ua2Dc: $datas = $sheet[0]; goto pQx_m; ht3VZ: $request->validate(["\146\151\x6c\x65\137\x69\155\160\157\x72\x74" => "\x72\x65\161\165\x69\162\145\x64\174\155\x69\155\x65\163\x3a\x78\x6c\163\170"], [], ["\x66\151\154\x65\137\x69\x6d\x70\x6f\162\164" => "\x46\x69\154\145\x20\x49\155\160\x6f\162\x74"]); goto dYCkf; LKJNv: array_shift($datas); goto h5tzc; PRz5A: return $this->sendResponse(true, "\x49\x6d\x70\x6f\x72\x74\x20\x64\141\164\141\40\x62\145\x72\x68\141\x73\x69\154"); goto u1V7f; qMQBj: $sheet = Excel::toArray(FmStrukturJabatanUsulanImport::class, $file); goto ua2Dc; u1V7f: } public function kirim_usulan(Request $request) { if ($request->ajax()) { goto MjBMg; sGq9X: foreach ($usulans as $usulan) { if ($usulan->status_usulan == "\x54\141\x6d\x62\141\150") { $usulanTambah = FmStrukturJabatanUsulan::whereId($usulan->id)->where("\146\155\x5f\x73\164\162\165\x6b\x74\x75\x72\137\152\141\142\x61\164\x61\156\137\151\144", null)->first(); if ($usulanTambah) { $response = $this->fmStrukturJabatanUsulanService->simpan($usulanTambah); if ($response["\145\162\162\157\162"]) { return $this->sendResponse(false, $response["\x6d\x65\163\163\x61\147\145"]); } else { FmStrukturJabatanUsulan::where("\160\x61\x72\x65\x6e\x74\137\156\x6f\155\x6f\x72", $usulanTambah->nomor)->update(["\x70\141\x72\145\x6e\x74\137\151\x64" => $response["\x72\145\163\165\x6c\x74\163"]["\151\x64"]]); } } } elseif ($usulan->status_usulan == "\x48\141\x70\165\163") { goto M45gm; M45gm: $this->fmStrukturJabatanUsulanService->hapus($usulan->fm_struktur_jabatan_id); goto nWJMu; nWJMu: $struktur = FmStrukturJabatan::find($usulan->fm_struktur_jabatan_id); goto UIjNm; UIjNm: FmStrukturJabatan::where("\153\157\144\x65", "\154\x69\x6b\145", $struktur->kode . "\x25")->delete(); goto MxVZy; MxVZy: } FmStrukturJabatanUsulan::destroy($usulan->id); } goto qEkK9; qEkK9: return $this->sendResponse(true, "\x4b\151\162\x69\155\x20\165\163\165\x6c\141\x6e\x20\x73\x65\154\145\x73\x61\x69"); goto HUNRU; MjBMg: $usulans = FmStrukturJabatanUsulan::orderBy("\x6e\157\155\x6f\x72")->get(); goto sGq9X; HUNRU: } } public function hapus_usulan(Request $request) { if ($request->ajax()) { FmStrukturJabatanUsulan::truncate(); return $this->sendResponse(true, "\x48\141\160\x75\x73\40\x75\163\x75\x6c\x61\x6e\x20\x73\x65\x6c\x65\163\x61\x69"); } } public function datatable(Request $request) { if ($request->ajax()) { $data = FmStrukturJabatanUsulan::query(); return DataTables::eloquent($data)->toJson(); } } }

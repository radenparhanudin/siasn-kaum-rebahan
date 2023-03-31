<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\FormasiMenpan\Http\Controllers; use Illuminate\Http\Request; use Maatwebsite\Excel\Facades\Excel; use Modules\FormasiMenpan\Entities\FmPosisi; use Modules\FormasiMenpan\Exports\FmPosisiExport; use Modules\FormasiMenpan\services\FmPosisiService; use Yajra\DataTables\Facades\DataTables; class FmPosisiController extends FormasiMenpanController { protected $fmPosisiService; public function __construct(FmPosisiService $fmPosisiService) { $this->fmPosisiService = $fmPosisiService; } public function index() { return view("\146\x6f\162\x6d\x61\163\151\155\145\156\160\x61\x6e\x3a\72\157\162\x67\141\156\x69\x73\141\163\x69\56\x72\x65\146\x65\162\x65\156\x73\x69\x2e\x70\x6f\163\x69\163\151\56\151\x6e\x64\x65\x78"); } public function download(Request $request) { if ($request->ajax()) { $this->fmPosisiService->tarik_data($request); return $this->sendResponse(true, "\104\x6f\x77\156\154\x6f\141\x64\40\x70\x6f\163\151\x73\x69\40\x62\145\x72\x68\141\x73\151\154"); } } public function export() { return Excel::download(new FmPosisiExport(), "\x46\155\x50\157\163\x69\163\x69\105\170\x70\x6f\162\x74\x2e\x78\x6c\x73\170"); } public function datatable(Request $request) { if ($request->ajax()) { $data = FmPosisi::query(); return DataTables::eloquent($data)->toJson(); } } }

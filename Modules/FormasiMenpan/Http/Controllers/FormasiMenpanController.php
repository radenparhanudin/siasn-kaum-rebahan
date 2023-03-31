<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\FormasiMenpan\Http\Controllers; use App\Http\Controllers\Controller; use Illuminate\Contracts\Support\Renderable; use Illuminate\Http\Request; class FormasiMenpanController extends Controller { public function index() { return view("\146\x6f\162\x6d\141\163\151\x6d\145\156\160\x61\x6e\72\72\x69\x6e\144\x65\170"); } public function create() { return view("\x66\157\x72\x6d\x61\x73\x69\155\x65\x6e\x70\141\156\72\x3a\143\162\145\x61\164\145"); } public function store(Request $request) { } public function show($id) { return view("\146\157\162\155\141\x73\151\155\x65\x6e\160\141\156\x3a\72\163\x68\x6f\167"); } public function edit($id) { return view("\146\x6f\162\155\x61\x73\151\x6d\x65\x6e\x70\x61\x6e\x3a\72\145\x64\151\x74"); } public function update(Request $request, $id) { } public function destroy($id) { } }

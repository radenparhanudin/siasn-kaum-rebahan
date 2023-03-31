<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Http\Controllers; use Illuminate\Contracts\Support\Renderable; use Illuminate\Http\Request; use Illuminate\Routing\Controller; class DataReferensiController extends Controller { public function index() { return view("\x64\141\x74\141\162\145\146\145\162\145\x6e\x73\x69\72\x3a\x69\156\x64\x65\x78"); } public function create() { return view("\144\x61\x74\x61\162\x65\x66\145\x72\145\x6e\x73\151\x3a\x3a\143\x72\x65\141\x74\145"); } public function store(Request $request) { } public function show($id) { return view("\x64\x61\x74\x61\162\145\x66\x65\x72\145\156\x73\x69\x3a\72\x73\x68\x6f\x77"); } public function edit($id) { return view("\x64\141\x74\141\x72\x65\146\x65\162\x65\x6e\163\151\x3a\72\x65\144\x69\x74"); } public function update(Request $request, $id) { } public function destroy($id) { } }

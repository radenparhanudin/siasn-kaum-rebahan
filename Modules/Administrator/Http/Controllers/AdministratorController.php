<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\Administrator\Http\Controllers; use Illuminate\Contracts\Support\Renderable; use Illuminate\Http\Request; use Illuminate\Routing\Controller; class AdministratorController extends Controller { public function index() { return view("\141\144\155\x69\x6e\x69\x73\164\162\141\164\157\x72\72\72\151\x6e\144\x65\170"); } public function create() { return view("\x61\144\x6d\151\x6e\151\163\x74\x72\x61\164\x6f\162\x3a\72\143\x72\145\141\164\145"); } public function store(Request $request) { } public function show($id) { return view("\x61\x64\155\x69\156\151\163\x74\162\141\x74\157\162\72\x3a\163\x68\157\167"); } public function edit($id) { return view("\x61\x64\155\x69\156\x69\163\164\x72\x61\164\157\162\72\72\x65\x64\x69\x74"); } public function update(Request $request, $id) { } public function destroy($id) { } }

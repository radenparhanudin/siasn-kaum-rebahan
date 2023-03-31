<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\FormasiMenpan\services; use Modules\FormasiMenpan\Entities\FmJfu; use Modules\FormasiMenpan\Repositories\FormasiMenpanRepository; class FmJfuService { protected $formasiMenpanRepository; public function __construct(FormasiMenpanRepository $formasiMenpanRepository) { $this->formasiMenpanRepository = $formasiMenpanRepository; } public function tarik_data($request) { $jabatans = explode("\xd\12", $request->jabatan); foreach ($jabatans as $jabatan) { goto X4kI9; oDqhj: $additional_headres = []; goto pzn06; pzn06: $response = $this->formasiMenpanRepository->get($path, $additional_headres); goto gz9Yv; BasLJ: $path = "\x2f\x6f\162\147\141\156\151\x73\x61\163\x69\57\162\145\x66\x65\x72\145\156\x73\151\x2f\152\x66\165\57\x74\141\162\151\153\x3f{$query}"; goto oDqhj; gz9Yv: foreach ($response["\x72\145\x73\165\154\x74\x73"] as $result) { FmJfu::updateOrCreate(["\x69\144" => $result["\151\144"]], $result); } goto XZ0ZA; X4kI9: $query = http_build_query(["\x71" => $jabatan]); goto BasLJ; XZ0ZA: } } }

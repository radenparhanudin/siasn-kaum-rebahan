<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\FormasiMenpan\services; use Modules\FormasiMenpan\Entities\FmJft; use Modules\FormasiMenpan\Repositories\FormasiMenpanRepository; class FmJftService { protected $formasiMenpanRepository; public function __construct(FormasiMenpanRepository $formasiMenpanRepository) { $this->formasiMenpanRepository = $formasiMenpanRepository; } public function tarik_data($request) { $jabatans = explode("\15\12", $request->jabatan); foreach ($jabatans as $jabatan) { goto g9tQW; g9tQW: $query = http_build_query(["\161" => $jabatan]); goto ttp68; ttp68: $path = "\57\x6f\x72\x67\141\156\x69\x73\141\x73\151\x2f\x72\x65\146\145\x72\145\156\x73\151\57\x6a\x66\x74\57\x74\141\x72\x69\153\77{$query}"; goto wBa5q; wBa5q: $additional_headres = []; goto bDBC2; h32uq: foreach ($response["\162\145\163\165\x6c\x74\x73"] as $result) { FmJft::updateOrCreate(["\x69\x64" => $result["\151\x64"]], $result); } goto mvjBZ; bDBC2: $response = $this->formasiMenpanRepository->get($path, $additional_headres); goto h32uq; mvjBZ: } } }

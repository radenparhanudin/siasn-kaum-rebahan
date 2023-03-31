<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\FormasiMenpan\services; use Modules\FormasiMenpan\Entities\FmNip; use Modules\FormasiMenpan\Entities\FmStrukturJabatan; use Modules\FormasiMenpan\Repositories\FormasiMenpanRepository; class FmNipService { protected $formasiMenpanRepository; public function __construct(FormasiMenpanRepository $formasiMenpanRepository) { $this->formasiMenpanRepository = $formasiMenpanRepository; } public function tarik_data($struktur_jabatan_id) { goto GqIwo; q_leN: foreach ($results as $result) { $result["\x66\155\x5f\x73\164\x72\165\153\164\165\x72\137\152\x61\142\x61\164\141\x6e\137\x69\144"] = $struktur_jabatan_id; FmNip::create($result); } goto wN6b_; gkIfu: $response = $this->formasiMenpanRepository->get($path, $additional_headres); goto TI72b; TI72b: $results = collect($response["\x72\145\163\165\x6c\x74\163"]); goto q_leN; WjGLz: $path = "\x2f\153\145\160\145\147\x61\x77\x61\x69\141\x6e\57\x6e\x69\160\57\164\x61\162\151\153\77{$query}"; goto yMtej; GqIwo: $query = http_build_query(["\x73\x74\x72\165\153\x74\165\162\137\x6a\141\142\x61\164\x61\156\x5f\x69\144" => $struktur_jabatan_id]); goto WjGLz; yMtej: $additional_headres = []; goto gkIfu; wN6b_: } }

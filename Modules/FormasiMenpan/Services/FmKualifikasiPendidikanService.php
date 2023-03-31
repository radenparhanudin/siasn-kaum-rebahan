<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\FormasiMenpan\services; use Modules\FormasiMenpan\Entities\FmKualifikasiPendidikan; use Modules\FormasiMenpan\Repositories\FormasiMenpanRepository; class FmKualifikasiPendidikanService { protected $formasiMenpanRepository; public function __construct(FormasiMenpanRepository $formasiMenpanRepository) { $this->formasiMenpanRepository = $formasiMenpanRepository; } public function tarik_data($request) { goto w9MGX; ITu1J: foreach ($response["\162\145\x73\165\154\x74\x73"] as $result) { FmKualifikasiPendidikan::updateOrCreate(["\x69\x64" => $result["\x69\x64"]], $result); } goto ZECjQ; W7P2P: $response = $this->formasiMenpanRepository->get($path, $additional_headres); goto ITu1J; w9MGX: $path = "\x2f\157\162\147\141\156\x69\163\x61\x73\x69\x2f\x72\145\x66\145\162\145\x6e\163\x69\57\x6b\x75\141\154\x69\146\151\153\141\163\151\55\160\145\x6e\x64\x69\x64\151\x6b\141\x6e\57\164\141\162\x69\x6b"; goto eUj6g; eUj6g: $additional_headres = []; goto W7P2P; ZECjQ: } }

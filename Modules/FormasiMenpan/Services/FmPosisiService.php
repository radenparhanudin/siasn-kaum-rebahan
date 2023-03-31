<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\FormasiMenpan\services; use Modules\FormasiMenpan\Entities\FmPosisi; use Modules\FormasiMenpan\Repositories\FormasiMenpanRepository; class FmPosisiService { protected $formasiMenpanRepository; public function __construct(FormasiMenpanRepository $formasiMenpanRepository) { $this->formasiMenpanRepository = $formasiMenpanRepository; } public function tarik_data($request) { goto llZfl; rWjAg: $additional_headres = []; goto UQd_0; Cfa37: foreach ($response["\162\x65\163\165\154\x74\x73"] as $result) { FmPosisi::updateOrCreate(["\x69\x64" => $result["\x69\144"]], $result); } goto txjek; UQd_0: $response = $this->formasiMenpanRepository->get($path, $additional_headres); goto Cfa37; llZfl: $path = "\x2f\157\x72\x67\x61\x6e\151\x73\141\x73\151\57\162\x65\x66\x65\x72\145\156\x73\151\57\160\157\163\x69\x73\x69\57\x74\141\x72\x69\153"; goto rWjAg; txjek: } }

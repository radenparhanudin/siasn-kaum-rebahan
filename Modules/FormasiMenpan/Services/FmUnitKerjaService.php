<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\FormasiMenpan\services; use Modules\FormasiMenpan\Entities\FmUnitKerja; use Modules\FormasiMenpan\Repositories\FormasiMenpanRepository; class FmUnitKerjaService { protected $formasiMenpanRepository; public function __construct(FormasiMenpanRepository $formasiMenpanRepository) { $this->formasiMenpanRepository = $formasiMenpanRepository; } public function tarik_data($request) { goto slg70; yW0vU: $response = $this->formasiMenpanRepository->get($path, $additional_headres); goto DJNxx; DJNxx: foreach ($response["\162\145\163\x75\x6c\x74\x73"] as $result) { FmUnitKerja::updateOrCreate(["\x69\144" => $result["\x69\144"]], $result); } goto sDjje; slg70: $path = "\57\157\x72\147\x61\156\151\x73\x61\163\x69\57\162\x65\146\x65\162\145\x6e\x73\x69\x2f\x75\156\151\x74\55\153\145\x72\152\x61\57\x74\x61\x72\x69\153"; goto BKzmS; BKzmS: $additional_headres = []; goto yW0vU; sDjje: } }

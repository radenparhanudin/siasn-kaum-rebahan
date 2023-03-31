<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\Dashboard\Services; use Illuminate\Support\Facades\Auth; use Modules\DataReferensi\Entities\KedudukanHukum; use Modules\ProfileASN\Entities\Asn; class DataService { public function roles() { return Auth::user()->roles->map(function ($role) { return $role->description; })->implode("\x2c\x20"); } public function kedudukan_hukums() { goto SoVUf; aa66r: return $datas; goto N9U2P; SoVUf: $kedudukan_hukums = KedudukanHukum::withCount("\141\x73\x6e\163")->get()->where("\141\x73\156\163\x5f\x63\157\165\x6e\164", "\x3e", 0); goto PAU30; PAU30: $count = Asn::whereNotIn("\x6b\x65\x64\x75\x64\x75\153\141\156\x5f\150\x75\x6b\x75\155\137\x69\x64", ["\x32\x30", "\67\67", "\70\x38", "\70\x39", "\x39\x39"])->count(); goto oCdk9; oCdk9: $datas = []; goto MinyP; MinyP: foreach ($kedudukan_hukums as $kedudukan_hukum) { $datas[] = ["\156\x61\155\141" => $kedudukan_hukum->nama, "\152\165\x6d\154\141\x68" => number_format($kedudukan_hukum->asns_count), "\x70\145\162\163\145\156\x74\x61\x73\x65" => number_format((float) ($kedudukan_hukum->asns_count / $count) * 100, 2)]; } goto aa66r; N9U2P: } }

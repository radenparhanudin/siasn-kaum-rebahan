<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Traits; use DateTimeInterface; trait SelisihTanggal { public function SelisihTanggal($tanggal_awal, $tanggal_akhir) { goto a3Qaa; CNEwX: $tanggal_akhir = strtotime($tanggal_akhir); goto S6Rbm; S6Rbm: $selisih = ($tanggal_akhir - $tanggal_awal) / 60 / 60 / 24; goto gX_fR; a3Qaa: $tanggal_awal = strtotime($tanggal_awal); goto CNEwX; gX_fR: return $selisih; goto egO4s; egO4s: } }

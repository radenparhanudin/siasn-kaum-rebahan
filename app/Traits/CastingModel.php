<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Traits; use DateTimeInterface; trait CastingModel { protected function serializeDate(DateTimeInterface $date) : string { return $date->format("\x59\55\155\x2d\144\40\x48\72\x69\x3a\163"); } }

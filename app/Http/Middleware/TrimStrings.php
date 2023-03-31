<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Http\Middleware; use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware; class TrimStrings extends Middleware { protected $except = ["\x63\165\162\x72\x65\156\164\137\x70\x61\x73\x73\x77\157\x72\x64", "\160\141\163\163\167\x6f\162\144", "\160\x61\163\163\x77\x6f\x72\144\x5f\143\157\x6e\x66\x69\162\155\141\x74\151\x6f\156"]; }

<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Http\Middleware; use Illuminate\Cookie\Middleware\EncryptCookies as Middleware; class EncryptCookies extends Middleware { protected $except = []; }

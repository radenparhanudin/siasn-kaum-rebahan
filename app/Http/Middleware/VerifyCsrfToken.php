<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Http\Middleware; use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware; class VerifyCsrfToken extends Middleware { protected $except = []; }

<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Http\Middleware; use Illuminate\Auth\Middleware\Authenticate as Middleware; class Authenticate extends Middleware { protected function redirectTo($request) { if (!$request->expectsJson()) { return route("\154\x6f\x67\x69\x6e"); } } }

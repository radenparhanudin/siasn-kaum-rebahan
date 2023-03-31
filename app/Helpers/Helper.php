<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Route; if (!function_exists("\163\x65\x74\x5f\141\143\x74\151\x76\x65")) { function set_active($uri, $output = "\x61\143\x74\151\166\x65") { if (is_array($uri)) { foreach ($uri as $u) { if (Route::is($u)) { return $output; } } } else { if (Route::is($uri)) { return $output; } } } }

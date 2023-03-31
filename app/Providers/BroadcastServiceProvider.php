<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Providers; use Illuminate\Support\Facades\Broadcast; use Illuminate\Support\ServiceProvider; class BroadcastServiceProvider extends ServiceProvider { public function boot() { Broadcast::routes(); require base_path("\x72\157\x75\x74\x65\163\57\143\x68\141\156\x6e\145\x6c\163\x2e\x70\x68\x70"); } }

<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 use Illuminate\Support\Facades\Broadcast; Broadcast::channel("\101\x70\x70\56\x4d\157\144\145\154\x73\x2e\x55\x73\x65\162\x2e\x7b\x69\x64\x7d", function ($user, $id) { return (int) $user->id === (int) $id; });

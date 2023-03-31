<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Models; use App\Traits\CastingModel; use App\Traits\UuidTrait; use Spatie\Permission\Models\Permission as SpatiePermission; class Permission extends SpatiePermission { use UuidTrait, CastingModel; }

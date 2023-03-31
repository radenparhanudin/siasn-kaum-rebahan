<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Models; use App\Traits\CastingModel; use App\Traits\UuidTrait; use Spatie\Permission\Models\Role as SpatieRole; class Role extends SpatieRole { use UuidTrait, CastingModel; }

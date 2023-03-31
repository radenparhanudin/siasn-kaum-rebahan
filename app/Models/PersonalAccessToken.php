<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Models; use App\Traits\UuidTrait; use Illuminate\Database\Eloquent\Factories\HasFactory; use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken; class PersonalAccessToken extends SanctumPersonalAccessToken { use HasFactory, UuidTrait; }

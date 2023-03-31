<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Models; use App\Traits\CastingModel; use Illuminate\Contracts\Auth\MustVerifyEmail; use Illuminate\Database\Eloquent\Factories\HasFactory; use GoldSpecDigital\LaravelEloquentUUID\Foundation\Auth\User as Authenticatable; use Illuminate\Notifications\Notifiable; use Illuminate\Support\Collection; use Laravel\Sanctum\HasApiTokens; use Modules\DataReferensi\Entities\Instansi; use Spatie\Permission\Traits\HasRoles; class User extends Authenticatable { use HasApiTokens, HasFactory, Notifiable, HasRoles, CastingModel; protected $fillable = ["\x69\144", "\x6e\141\155\x65", "\x65\x6d\x61\x69\154", "\160\x61\163\163\x77\157\x72\144", "\x75\163\x65\162\x6e\x61\x6d\x65", "\x66\x6f\164\157\x5f\160\x72\x6f\146\x69\154\145"]; protected $hidden = ["\160\141\x73\x73\x77\x6f\162\x64", "\162\x65\155\145\155\x62\145\162\137\164\x6f\153\145\156"]; protected $casts = ["\x65\155\141\151\x6c\137\166\x65\x72\151\146\x69\145\144\137\141\x74" => "\x64\x61\164\x65\x74\x69\x6d\145"]; public function getRoleDescriptions() : Collection { $this->loadMissing("\x72\x6f\x6c\x65\x73"); return $this->roles->pluck("\x64\x65\x73\x63\x72\x69\x70\164\151\x6f\156"); } }

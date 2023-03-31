<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Providers; use App\Models\PersonalAccessToken; use Illuminate\Support\Facades\URL; use Illuminate\Support\ServiceProvider; use Laravel\Sanctum\Sanctum; class AppServiceProvider extends ServiceProvider { public function register() { } public function boot() { if ($this->app->environment("\x70\x72\x6f\144\x75\143\164\x69\x6f\156")) { URL::forceScheme("\x68\x74\x74\x70\x73"); } Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class); } }

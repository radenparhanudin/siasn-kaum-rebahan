<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Providers; use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider; use Illuminate\Support\Facades\Gate; class AuthServiceProvider extends ServiceProvider { protected $policies = []; public function boot() { $this->registerPolicies(); } }

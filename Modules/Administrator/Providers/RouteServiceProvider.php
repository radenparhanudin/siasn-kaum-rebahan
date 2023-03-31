<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\Administrator\Providers; use Illuminate\Support\Facades\Route; use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider; class RouteServiceProvider extends ServiceProvider { protected $moduleNamespace = "\115\157\144\x75\154\145\x73\x5c\x41\x64\x6d\x69\156\151\x73\164\162\x61\x74\157\162\x5c\x48\164\x74\x70\x5c\x43\157\x6e\164\x72\157\154\x6c\x65\162\163"; public function boot() { parent::boot(); } public function map() { $this->mapApiRoutes(); $this->mapWebRoutes(); } protected function mapWebRoutes() { Route::middleware("\167\145\x62")->namespace($this->moduleNamespace)->group(module_path("\101\144\155\x69\x6e\151\163\x74\x72\x61\164\157\162", "\x2f\x52\157\x75\164\145\x73\x2f\x77\145\x62\56\x70\x68\x70")); } protected function mapApiRoutes() { Route::prefix("\141\160\x69")->middleware("\x61\160\151")->namespace($this->moduleNamespace)->group(module_path("\101\x64\155\x69\x6e\151\163\x74\162\141\x74\157\162", "\x2f\122\157\165\x74\145\163\x2f\141\x70\x69\x2e\x70\150\x70")); } }

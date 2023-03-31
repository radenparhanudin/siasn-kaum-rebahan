<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\Dashboard\Providers; use Illuminate\Support\Facades\Route; use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider; class RouteServiceProvider extends ServiceProvider { protected $moduleNamespace = "\x4d\x6f\144\x75\x6c\x65\x73\134\104\x61\x73\150\x62\x6f\141\162\144\x5c\x48\x74\x74\x70\x5c\103\157\x6e\164\162\157\x6c\154\x65\x72\163"; public function boot() { parent::boot(); } public function map() { $this->mapApiRoutes(); $this->mapWebRoutes(); } protected function mapWebRoutes() { Route::middleware("\167\145\x62")->namespace($this->moduleNamespace)->group(module_path("\104\141\x73\150\x62\x6f\141\162\144", "\57\122\x6f\x75\x74\x65\x73\x2f\167\145\142\x2e\160\150\160")); } protected function mapApiRoutes() { Route::prefix("\x61\x70\x69")->middleware("\141\x70\x69")->namespace($this->moduleNamespace)->group(module_path("\104\x61\163\x68\142\x6f\x61\x72\x64", "\x2f\122\157\x75\x74\145\163\57\x61\x70\151\x2e\x70\150\160")); } }

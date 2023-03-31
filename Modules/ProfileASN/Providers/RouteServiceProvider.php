<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\ProfileASN\Providers; use Illuminate\Support\Facades\Route; use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider; class RouteServiceProvider extends ServiceProvider { protected $moduleNamespace = "\115\157\x64\x75\x6c\145\x73\134\120\x72\157\x66\151\x6c\145\x41\x53\116\x5c\110\x74\x74\x70\134\x43\x6f\x6e\164\162\x6f\154\154\145\x72\x73"; public function boot() { parent::boot(); } public function map() { $this->mapApiRoutes(); $this->mapWebRoutes(); } protected function mapWebRoutes() { Route::middleware("\167\x65\142")->namespace($this->moduleNamespace)->group(module_path("\x50\162\157\x66\x69\154\x65\101\x53\116", "\57\122\157\165\164\145\x73\57\x77\x65\142\x2e\x70\x68\x70")); } protected function mapApiRoutes() { Route::prefix("\x61\x70\151")->middleware("\x61\160\151")->namespace($this->moduleNamespace)->group(module_path("\x50\162\157\146\x69\154\x65\x41\x53\x4e", "\x2f\122\x6f\165\x74\x65\x73\x2f\x61\160\x69\x2e\x70\150\x70")); } }

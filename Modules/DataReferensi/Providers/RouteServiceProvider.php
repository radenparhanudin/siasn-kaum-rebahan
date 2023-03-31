<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Modules\DataReferensi\Providers; use Illuminate\Support\Facades\Route; use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider; class RouteServiceProvider extends ServiceProvider { protected $moduleNamespace = "\115\x6f\x64\x75\x6c\x65\163\x5c\x44\141\164\x61\122\x65\146\145\x72\145\x6e\x73\x69\x5c\x48\x74\164\160\x5c\103\x6f\156\164\162\157\154\x6c\145\x72\163"; public function boot() { parent::boot(); } public function map() { $this->mapApiRoutes(); $this->mapWebRoutes(); } protected function mapWebRoutes() { Route::middleware("\x77\145\x62")->namespace($this->moduleNamespace)->group(module_path("\104\x61\164\141\122\x65\146\145\162\145\x6e\163\x69", "\57\x52\157\x75\164\145\x73\57\167\x65\x62\x2e\x70\150\x70")); } protected function mapApiRoutes() { Route::prefix("\x61\x70\x69")->middleware("\x61\160\x69")->namespace($this->moduleNamespace)->group(module_path("\104\x61\164\141\x52\145\x66\x65\x72\x65\156\163\151", "\57\122\157\165\x74\x65\163\57\x61\160\x69\56\x70\x68\x70")); } }

<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Providers; use Illuminate\Auth\Events\Registered; use Illuminate\Auth\Listeners\SendEmailVerificationNotification; use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider; use Illuminate\Support\Facades\Event; class EventServiceProvider extends ServiceProvider { protected $listen = [Registered::class => [SendEmailVerificationNotification::class]]; public function boot() { } }

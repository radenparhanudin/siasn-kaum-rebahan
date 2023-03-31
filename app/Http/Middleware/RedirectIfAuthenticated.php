<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Http\Middleware; use App\Providers\RouteServiceProvider; use Closure; use Illuminate\Http\Request; use Illuminate\Support\Facades\Auth; class RedirectIfAuthenticated { public function handle(Request $request, Closure $next, ...$guards) { goto qb24Q; qb24Q: $guards = empty($guards) ? [null] : $guards; goto SrLQx; albuo: return $next($request); goto xw6Qk; SrLQx: foreach ($guards as $guard) { if (Auth::guard($guard)->check()) { return redirect(RouteServiceProvider::HOME); } } goto albuo; xw6Qk: } }

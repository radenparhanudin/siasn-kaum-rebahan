<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Http\Controllers; use Illuminate\Http\Request; class HomeController extends Controller { public function __construct() { $this->middleware("\x61\x75\x74\150"); } public function index() { return redirect(route("\x64\141\163\150\142\x6f\141\x72\144\x2e\151\x6e\x64\x65\x78")); } }

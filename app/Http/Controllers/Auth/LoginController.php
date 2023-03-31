<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace App\Http\Controllers\Auth; use App\Http\Controllers\Controller; use App\Models\User; use App\Providers\RouteServiceProvider; use App\Traits\SIASNGateway; use Illuminate\Foundation\Auth\AuthenticatesUsers; use Illuminate\Http\JsonResponse; use Illuminate\Http\Request; use Illuminate\Support\Facades\Auth; use Illuminate\Support\Facades\Http; use Illuminate\Support\Facades\Storage; use Illuminate\Validation\ValidationException; class LoginController extends Controller { use AuthenticatesUsers, SIASNGateway; protected $redirectTo = RouteServiceProvider::HOME; protected $auth_message = "\111\144\145\156\x74\x69\164\141\163\40\164\x65\162\163\x65\x62\165\x74\x20\x74\x69\x64\141\x6b\40\x63\x6f\x63\157\153\40\x64\x65\x6e\x67\141\156\x20\x64\x61\164\141\40\153\141\155\151\56"; public function __construct() { $this->middleware("\147\x75\145\x73\164")->except("\154\x6f\x67\x6f\165\164"); } public function login(Request $request) { goto L2UuZ; g0yIt: return $this->sendFailedLoginResponse($request); goto IPW3l; aXxM2: $this->incrementLoginAttempts($request); goto g0yIt; L2UuZ: $this->validateLogin($request); goto ATBxi; HV_oF: if (method_exists($this, "\x68\141\x73\124\157\x6f\115\x61\x6e\171\x4c\157\147\151\156\101\x74\164\x65\x6d\x70\164\163") && $this->hasTooManyLoginAttempts($request)) { $this->fireLockoutEvent($request); return $this->sendLockoutResponse($request); } goto C_uAa; ATBxi: if ($request->username != "\x61\x64\155\151\x6e\x69\x73\164\162\141\x74\157\162") { return $this->loginMySAPK($request); } goto HV_oF; C_uAa: if ($this->attemptLogin($request)) { if ($request->hasSession()) { $request->session()->put("\141\x75\164\x68\56\x70\x61\163\163\167\x6f\162\144\137\143\x6f\156\146\151\162\155\x65\x64\x5f\141\164", time()); } return $this->sendLoginResponse($request); } goto aXxM2; IPW3l: } protected function validateLogin(Request $request) { $request->validate([$this->username() => "\x72\145\161\x75\x69\162\145\144\174\x73\x74\x72\x69\x6e\x67", "\x70\141\163\x73\167\x6f\162\x64" => "\162\145\x71\x75\151\x72\x65\144\x7c\x73\x74\162\x69\x6e\147"]); } protected function authenticated(Request $request, $user) { } public function username() { return "\x75\x73\145\162\156\141\x6d\x65"; } protected function loginMySAPK($request) { goto BPJ4Y; a0zQK: $user = User::whereUsername($data_user["\156\151\x70"])->first(); goto dwpdI; MFnfS: $response = $this->postRequest("\x2f\x6d\x79\163\x61\160\x6b\x2d\141\x75\164\150", ["\165\163\145\x72\156\x61\x6d\145" => $request->username, "\160\x61\163\x73\x77\x6f\x72\x64" => $request->password]); goto ciwrv; dwpdI: if (!isset($user)) { $user = User::create(["\x69\144" => $data_user["\141\x73\156\137\151\x64"], "\x6e\x61\x6d\145" => $data_user["\x6e\141\155\x61"], "\x65\155\141\x69\x6c" => $data_user["\x6e\x69\160"] . "\100\x6d\141\151\154\56\143\x6f\155", "\x75\x73\145\162\x6e\141\x6d\x65" => $data_user["\156\x69\x70"]]); $user->assignRole("\141\x73\156"); } goto epjP3; tuY00: session()->put("\165\163\145\162\137\x69\144", $user->id); goto QtcaM; ciwrv: if (isset($response["\x65\162\x72\157\x72\x73"])) { throw ValidationException::withMessages(["\x75\x73\145\x72\x6e\x61\x6d\x65" => $response["\x65\x72\162\x6f\162\x73"]["\x75\163\x65\162\x6e\x61\155\x65"][0]]); } goto TNLsr; TNLsr: if (isset($response["\x6d\x65\x73\x73\141\147\145"])) { throw ValidationException::withMessages(["\x75\x73\x65\162\156\141\x6d\x65" => $response["\x6d\x65\x73\x73\141\147\145"]]); } goto AyBKM; epjP3: if (!Auth::check()) { if (Auth::login($user)) { session()->regenerate(); } } goto tuY00; QtcaM: return redirect()->route("\x68\x6f\155\x65"); goto hOXo7; BPJ4Y: if (Storage::disk("\x73\x69\x61\163\156\55\147\141\164\145\167\x61\171")->exists("\x74\x6f\x6b\x65\156\137\x73\x69\141\163\x6e\x5f\147\x61\164\x65\167\x61\171\x2e\164\170\x74")) { session()->put("\164\x6f\x6b\145\156\x5f\163\x69\x61\x73\x6e\137\147\141\164\x65\167\x61\x79", Storage::disk("\x73\x69\x61\x73\x6e\x2d\x67\x61\x74\x65\x77\141\x79")->get("\x74\x6f\153\145\156\137\163\151\141\x73\156\137\147\x61\164\145\x77\x61\x79\x2e\x74\170\164")); } goto MFnfS; AyBKM: $data_user = $response["\144\141\164\x61\x5f\165\x73\x65\x72"]; goto a0zQK; hOXo7: } }

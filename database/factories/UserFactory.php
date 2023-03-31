<?php
/*   _______________________________________
    |  Dikembangkan oleh - Raden Parhanudin |
    |    Whatsapp: https://6282342788059    |
    |_______________________________________|
*/
 namespace Database\Factories; use Illuminate\Database\Eloquent\Factories\Factory; use Illuminate\Support\Str; class UserFactory extends Factory { public function definition() { return ["\156\x61\155\145" => $this->faker->name(), "\x65\x6d\x61\x69\x6c" => $this->faker->unique()->safeEmail(), "\145\155\x61\151\154\x5f\166\x65\x72\151\146\151\145\144\x5f\x61\x74" => now(), "\160\x61\163\163\x77\157\162\144" => "\44\62\171\x24\x31\x30\44\x39\62\x49\130\125\x4e\160\153\152\117\x30\x72\117\121\65\142\x79\x4d\151\56\131\x65\64\x6f\113\157\105\x61\x33\122\157\71\x6c\x6c\103\x2f\56\157\x67\x2f\141\164\x32\56\165\x68\x65\x57\x47\x2f\151\x67\x69", "\162\x65\x6d\x65\x6d\142\145\x72\x5f\164\157\x6b\145\156" => Str::random(10)]; } public function unverified() { return $this->state(function (array $attributes) { return ["\145\155\x61\151\154\x5f\x76\145\x72\x69\146\151\x65\144\137\141\x74" => null]; }); } }

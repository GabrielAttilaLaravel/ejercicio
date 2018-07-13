<?php

use App\Models\Perfil;
use App\Models\User;
use Illuminate\Database\Seeder;

class PerfilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'msilvasuarez.silva@gmail.com')->first();
        $admin = User::where('email', 'gabrieljmorenot@gmail.com')->first();

        factory(Perfil::class)->create(['user_id' => $user->id]);
        factory(Perfil::class)->create(['user_id' => $admin->id]);
    }
}

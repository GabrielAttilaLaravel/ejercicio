<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'username' => 'gabrielattila',
            'first_name' => 'Gabriel',
            'last_name' => 'Moreno',
            'email' => 'gabrieljmorenot@gmail.com',
            'password' => bcrypt('123123'),
            'role_id' => 1
        ]);

        factory(User::class)->create([
            'username' => 'mila',
            'first_name' => 'Milagros',
            'last_name' => 'Silva',
            'email' => 'msilvasuarez.silva@gmail.com',
            'password' => bcrypt('123123')
        ]);

        factory(User::class, 20)->create();
    }
}

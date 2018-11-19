<?php

use App\Models\Continent;
use Illuminate\Database\Seeder;

class ContinentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $continents = [
            'América',
            'África',
            'Europa',
            'Asia',
            'Oceanía',
        ];

        foreach ($continents as $continent) {
            factory(Continent::class)->create([
                'nameC' => $continent
            ]);
        }
    }
}

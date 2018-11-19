<?php

use App\Models\Split;
use Illuminate\Database\Seeder;

class SplitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisions = [
            'América del Norte',
            'Islas del Caribe',
            'América Central',
            'América del Sur',
        ];

        foreach ($divisions as $division) {
            factory(Split::class)->create([
                'division' => $division
            ]);
        }
    }
}

<?php

use App\Models\Continent;
use App\Models\Pais;
use App\Models\PrefixPhone;
use Illuminate\Database\Seeder;

class PaisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $continents = Continent::all();

        $dataCountries =
            [
                'América' => [
                    ['nameP' => 'Canadá', 'name_short' => 'can', 'prefix' => ['+1']],
                    ['nameP' => 'Estados Unidos', 'name_short' => 'usa', 'prefix' => ['+1']],
                    ['nameP' => 'Islas Vírgenes de USA', 'name_short' => 'vir', 'prefix' => ['+1-340']],
                    ['nameP' => 'Islas Marianas del Norte', 'name_short' => 'nmp', 'prefix' => ['+1-670']],
                    ['nameP' => 'Guam', 'name_short' => 'gum', 'prefix' => ['+1-671']],
                    ['nameP' => 'Samoa Americana', 'name_short' => 'asm', 'prefix' => ['+1-684']],
                    ['nameP' => 'Puerto Rico', 'name_short' => 'pri', 'prefix' => ['+1-787', '+1-939']],
                    ['nameP' => 'Hawái', 'name_short' => 'hi', 'prefix' => ['+1-808']],
                    ['nameP' => 'Bermudas', 'name_short' => 'bmu', 'prefix' => ['+1-441']],
                    ['nameP' => 'México', 'name_short' => 'mex', 'prefix' => ['+52']],
                    ['nameP' => 'San Pedro y Miquelón', 'name_short' => 'spm', 'prefix' => ['+508']],
                ],

                'África' => [
                    ['nameP' => 'Egipto', 'name_short' => 'egy', 'prefix' => ['+20']],
                    ['nameP' => 'Sudán del Sur', 'name_short' => 'sds', 'prefix' => ['+211']],
                ]
            ];

        foreach ($continents as $continent) {

            if (array_key_exists($continent->nameC, $dataCountries)){

                foreach ($dataCountries[$continent->nameC] as $dataCountry) {

                    $pais = factory(Pais::class)->create([
                        'nameP' => $dataCountry['nameP'],
                        'name_short' => $dataCountry['name_short'],
                        'continent_id' => $continent->id
                    ]);

                    $pais->fileUpload()->create([
                        'nameF' => 'img/flags/'.$dataCountry['name_short'].'.png'
                    ]);

                    foreach ($dataCountry['prefix'] as $prefix) {

                        $prefixPhone = PrefixPhone::where('prefix', $prefix)->first();

                        if (! $prefixPhone){
                            $prefixPhone = factory(PrefixPhone::class)->create([
                                'prefix' => $prefix
                            ]);
                        }

                        $pais->prefixesPhones()->attach($prefixPhone);
                    }
                }
            }
        }
    }
}

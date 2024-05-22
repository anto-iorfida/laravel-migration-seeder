<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $faker = Faker::create();

        
        for ($i = 0; $i < 10; $i++) {
            
            $newTrain = new Train();
            $newTrain->azienda = $faker->company;
            $newTrain->stazione_di_partenza = $faker->city;
            $newTrain->stazione_di_arrivo = $faker->city;
            $newTrain->orario_di_partenza = $faker->time($format = 'H:i:s');
            $newTrain->orario_di_arrivo = $faker->time($format = 'H:i:s');
            $newTrain->codice_treno = $faker->unique()->regexify('[A-Z]{2}[0-9]{4}');
            $newTrain->numero_carrozze = $faker->numberBetween(1, 20);
            $newTrain->in_orario = $faker->boolean(80); 
            $newTrain->cancellato = $faker->boolean(10); 
            $newTrain->save();
        }
    }
}

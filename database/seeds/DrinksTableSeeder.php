<?php

use Illuminate\Database\Seeder;

class DrinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100; $i++)
        {
            $drink_type = \App\DrinksType::find(rand(1,3));
            $created_at = now()->subDays(rand(1,90));

            $drink = [
                'barista_id' => 1,
                'drink_type_id' => $drink_type->id,
                'price' => $drink_type->price,
                'created_at' => $created_at,
                'completed_at' => $created_at->addMinutes(rand(1,10))
            ];

            \App\Drink::create($drink);
        }
    }
}

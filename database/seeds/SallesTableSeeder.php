<?php

use Illuminate\Database\Seeder;

class SallesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('salles')->insert([
      [
        "name"=> "Halle tony garnier",
      ],
      [
        "name"=> "la cigale",
      ],
      [
        "name"=> "olympia",
      ],
      [
        "name"=> "opera",
      ],
    ]);
    }
}

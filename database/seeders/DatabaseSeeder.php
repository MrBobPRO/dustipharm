<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call([
      AdvantageSeeder::class,
      DrugstoreSeeder::class,
      MissionSeeder::class,
      PartnerSeeder::class,
      ServiceSeeder::class,
      ValueSeeder::class
    ]);
  }
}

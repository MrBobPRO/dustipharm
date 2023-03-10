<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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
    $user = new User();
    $user->name = 'Admin';
    $user->email = 'admin@mail.ru';
    $user->password = bcrypt('12345');
    $user->save();

    $this->call([
      AdvantageSeeder::class,
      DrugstoreSeeder::class,
      MissionSeeder::class,
      PartnerSeeder::class,
      ServiceSeeder::class,
      ValueSeeder::class,
      GallerySeeder::class
    ]);
  }
}

<?php

namespace Database\Seeders;

use App\Models\Drugstore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function App\Support\transliterateIntoLatin;

class DrugstoreSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $items = [
      [
        'title' => 'Нусратулло Махсум',
        'working_hours' => '08:00 - 20:00',
        'working_days' => 'понедельник - суббота',
        'phone' => '+992 918 00 00 00',
        'email' => 'nm@dustipharma.com',
        'image' => 'test.png'
      ],

      [
        'title' => 'Нусратулло Махсум',
        'working_hours' => '08:00 - 20:00',
        'working_days' => 'понедельник - суббота',
        'phone' => '+992 918 00 00 00',
        'email' => 'nm@dustipharma.com',
        'image' => 'test.png'
      ],

      [
        'title' => 'Нусратулло Махсум',
        'working_hours' => '08:00 - 20:00',
        'working_days' => 'понедельник - суббота',
        'phone' => '+992 918 00 00 00',
        'email' => 'nm@dustipharma.com',
        'image' => 'test.png'
      ],

      [
        'title' => 'Нусратулло Махсум',
        'working_hours' => '08:00 - 20:00',
        'working_days' => 'понедельник - суббота',
        'phone' => '+992 918 00 00 00',
        'email' => 'nm@dustipharma.com',
        'image' => 'test.png'
      ],

      [
        'title' => 'Нусратулло Махсум',
        'working_hours' => '08:00 - 20:00',
        'working_days' => 'понедельник - суббота',
        'phone' => '+992 918 00 00 00',
        'email' => 'nm@dustipharma.com',
        'image' => 'test.png'
      ],

      [
        'title' => 'Нусратулло Махсум',
        'working_hours' => '08:00 - 20:00',
        'working_days' => 'понедельник - суббота',
        'phone' => '+992 918 00 00 00',
        'email' => 'nm@dustipharma.com',
        'image' => 'test.png'
      ],
    ];

    foreach ($items as $item) {
      Drugstore::create($item);
    }
  }
}

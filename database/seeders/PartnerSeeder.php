<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function App\Support\transliterateIntoLatin;

class PartnerSeeder extends Seeder
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
        'title' => 'Sanofi',
        'body' => 'Экспортёр лекарственных препаратов.',
        'link' => 'https://evolet.tj'
      ],

      [
        'title' => 'Sandoz',
        'body' => 'Экспортёр лекарственных препаратов.',
        'link' => 'https://evolet.tj'
      ],

      [
        'title' => 'Bionorica',
        'body' => 'Экспортёр лекарственных препаратов.',
        'link' => 'https://evolet.tj'
      ],

      [
        'title' => 'Букаев',
        'body' => 'Экспортёр лекарственных препаратов.',
        'link' => 'https://evolet.tj'
      ],

      [
        'title' => 'Takeda',
        'body' => 'Экспортёр лекарственных препаратов.',
        'link' => 'https://evolet.tj'
      ],

      [
        'title' => 'Octa Pharma',
        'body' => 'Экспортёр лекарственных препаратов.',
        'link' => 'https://evolet.tj'
      ],

      [
        'title' => 'Apharma',
        'body' => 'Компания обладаем всем необходимым для создания благоприятных условий транспортировки',
        'link' => 'https://evolet.tj'
      ],

      [
        'title' => 'Мировой опыт',
        'body' => 'Экспортёр лекарственных препаратов.г',
        'link' => 'https://evolet.tj'
      ],
    ];

    foreach ($items as $item) {
      Partner::create($item);
    }

    Partner::get()->each(function ($item) {
      $item->image = strtolower(transliterateIntoLatin($item->title)) . '.png';
      $item->save();
    });
  }
}

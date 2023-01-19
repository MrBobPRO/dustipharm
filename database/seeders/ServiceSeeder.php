<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function App\Support\transliterateIntoLatin;

class ServiceSeeder extends Seeder
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
        'title' => 'Большой <br>выбор',
        'body' => 'Более 5 000 наименований, включая рецептурные и безрецептурные лекарственные препараты'
      ],

      [
        'title' => 'Гибкое <br>ценообразование',
        'body' => 'Доступные цены на препараты, гибкое ценообразование и выгодные условия для наших клиентов'
      ],

      [
        'title' => 'Особые условия <br>партнерам',
        'body' => 'Предоставление особых условий, исходя из объема закупок, ассортимента, кредитной истории'
      ],

      [
        'title' => 'Доступность <br>24/7',
        'body' => 'Продукцию можно заказать круглосуточно через операторов по телефону или электронной почте'
      ],

      [
        'title' => 'Представление <br>программного обеспечения',
        'body' => 'Специальное ПО для заказа с места работы клиента. Техническая поддержка по эксплуатации программ электронного заказа'
      ],

      [
        'title' => 'Оперативная сборка <br>заказов',
        'body' => 'Быстрая и точная сборка заказов с помощью автоматизированной системы работы'
      ],

      [
        'title' => 'Безопасная доставка <br>заказов',
        'body' => 'Двух- и трехразовая доставка товаров независимо от суммы с помощью нашего подразделения «Express Pharm»'
      ],

      [
        'title' => 'Маркетинговое <br>продвижение',
        'body' => 'Увеличиваем эффективность продаж и предоставляем наработанные маркетинговые схемы, подобранные для рынка фармпродукции'
      ],
    ];

    foreach($items as $item) {
      Service::create($item);
    }

    Service::get()->each(function ($item) {
      $item->image = strtolower(transliterateIntoLatin($item->title)) . '.png';
      $item->save();
    });
  }
}

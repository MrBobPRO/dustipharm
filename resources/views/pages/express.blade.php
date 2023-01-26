@extends('layouts.app', ['pageClass' => 'express-page'])

@section('main')

<section class="page-base">
  <div class="page-base__inner main-container">
    <h1 class="page-base__title">Express Pharm</h1>
    <p class="page-base__desc">Вся необходимая информация о нашем <br>подразделении по логистике препаратов</p>
  </div>
  <img class="page-base__image" src="{{ asset('img/express/banner.png') }}" alt="drugstore">
</section>

<section class="express-page__desc">
  <div class="express-page__desc-inner main-container">
    <p class="express-page__desc-txt">
      «Express Pharm» – это современный складской комплекс, соответствующий всем нормам хранения и транспортировки лекарств с автоматизированной системой доставки препаратов. Этот комплекс всецело позволяет обеспечить оптимальные условия хранения препаратов и своевременную отгрузку продукции.
    </p>

    <p class="express-page__desc-txt">
      Наша компания, имея многолетний опыт работы в оптовой продаже медикаментов, сможет качественно и в срок удовлетворить потребность наших клиентов в доставке необходимых препаратов.
    </p>
  </div>
</section>

@endsection

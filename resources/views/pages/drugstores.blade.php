@extends('layouts.app', ['pageClass' => 'drugstores-page'])

@section('main')

<section class="page-base">
  <div class="page-base__inner main-container">
    <h1 class="page-base__title">Сеть аптек</h1>
    <p class="page-base__desc">Распространяем препараты через <br>свою сеть аптек для вашего удобства</p>
  </div>
  <img class="page-base__image" src="{{ asset('img/drugstores/banner.png') }}" alt="drugstore">
</section>

<section class="drugstores-page__desc">
  <div class="drugstores-page__desc-inner main-container">
    <p class="drugstores-page__desc-txt">
      Наша компания стремительно растет и развивается. Одним из примеров такого неуклонного развития является постоянно увеличивающаяся сеть фирменных аптек, отвечающих всем
      высоким стандартам качества.
    </p>
  </div>
</section>

<section class="drugstores">
  <div class="drugstores__inner main-container">
    <h2 class="drugstores__title main-title">Наши аптеки</h2>
    <p class="drugstores__desc">
      Ниже Вы можете виртуально ознакомиться с нашими аптеками, увидев их время работы и контакты, необходимые для оперативного реагирования на ваши вопросы и пожелания.
    </p>

    <div class="drugstores-list">
      @foreach ($drugstores as $drugstore)
      <div class="drugstores-card secondary-card">
        <h3 class="secondary-card__title">{!! $drugstore->title !!}</h3>
        <p class="secondary-card__desc">
          Время работы: {{ $drugstore->working_hours }}
          <br>Рабочие дни: {{ $drugstore->working_days }}
          <br>Тел: {{ $drugstore->phone }}
          <br>Email: {{ $drugstore->email }}
        </p>
        <img class="secondary-card__image" src="{{ asset('img/drugstores/' . $drugstore->image) }}" alt="{{ $drugstore->title }}">
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="drugstores-map-txt">
  <div class="drugstores-map-txt__inner main-container">
    <h2 class="drugstores-map-txt__title main-title">Карта аптек</h2>
    <p class="drugstores-map-txt__desc">
      С помощью наглядной карты Вы можете ознакомиться с месторасположением наших аптек для еще более быстрого и удобного доступа к лекарственным препаратам.
    </p>
  </div>

  <script> let drugstores = {{ Js::from($drugstoresArray) }}; </script>
  <div class="drugstores-map" id="drugstores-map"></div>
</section>
@endsection

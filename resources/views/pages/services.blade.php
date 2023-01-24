@extends('layouts.app', ['pageClass' => 'services-page'])

@section('main')

<section class="page-base">
  <div class="page-base__inner main-container">
    <h1 class="page-base__title">Наши услуги</h1>
    <p class="page-base__desc">Перечень наших услуг показывает <br>ответственный подход к заботе о здоровье </p>
  </div>
  <img class="page-base__image" src="{{ asset('img/services/banner.png') }}" alt="about">
</section>

<section class="services-page__desc">
  <div class="services-page__desc-inner main-container">
    <p class="services-page__desc-txt">
      С помощью предоставления услуг высокого уровня мы стремимся удовлетворить потребности населения в качественных медицинских товарах. Основополагающей целью деятельности ООО
      «Дусти Фарма» является постоянный мониторинг и удовлетворение текущих потребностей наших клиентов и партнеров.
    </p>
  </div>
</section>

<section class="services">
  <div class="services__inner main-container">
    <h2 class="services__title main-title">Мы предоставляем нашим клиентам <br>и партнерам следующие услуги:</h2>

    <div class="services-list">
      @foreach ($services as $service)
      <div class="main-card services-card">
        <div class="main-card__image-container">
          <img src="{{ asset('img/services/' . $service->image) }}" alt="{{ $service->title }}">
          <span class="main-card__counter">{{ $loop->index + 1 }}</span>
        </div>

        <h3 class="main-card__title">{!! $service->title !!}</h3>
        <p class="main-card__body">{{ $service->body }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection

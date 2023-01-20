@extends('layouts.app', ['pageClass' => 'home-page'])

@section('main')
<section class="banner">
  <div class="banner__inner main-container">
    <div class="banner__txt">
      <h1 class="banner__title">Ваше здоровье <br>– наша обязанность</h1>
      <p class="banner__body">Ваше здоровье для нас самое важное, поэтому мы ежедневно работаем над улучшением всех звеньев нашей работы, начиная с поиска новых, более
        инновационных лекарственных средств, заканчивая вопросами логистики.</p>
      <a class="button button--main banner__button" href="{{ route('services.index') }}">
        Наши услуги <span class="material-icons">chevron_right</span>
      </a>
    </div>
  </div>
</section>

<section class="home-about">
  <div class="home-about__inner main-container">
    <h2 class="home-about__title main-title">О компании</h2>
    <p class="home-about__desc">
      С 1996 года компания «Дусти Фарма» начала свою фармацевтическую деятельность на территории Республики Таджикистан. Мы занимаемся дистрибьюцией импортных лекарственных средств, последовательно расширяя свою сеть оптовых и розничных аптек, а также распространяя лекарственные препараты через другие аптеки страны.
    </p>

    <div class="home-about__foot">
      <p class="home-about__foot-desc">
        Основной задачей нашей компании является решение <br>актуальных проблем медицины и здравоохранения <br>Таджикистана путем предоставление безопасных, эффективных<br> и инновационных лекарственных средств и других<br> товаров медицинского назначения.
      </p>

      <a class="button button--main home-about__button" href="{{ route('about.index') }}">
        Подробнее <span class="material-icons">chevron_right</span>
      </a>
    </div>

    <img class="home-about__foot-image" src="{{ asset('img/home/about.png') }}" alt="pharmacy">
  </div>
</section>
@endsection

<header class="header">
  <div class="header__inner main-container">
    <x-logo class="header__logo" />

    <nav class="navbar">
      <ul class="navbar__list">
        <li>
          <a class="navbar__link @if(request()->route()->named('about.index')) navbar__link--active @endif" href="{{ route('about.index') }}">О компании</a>
        </li>

        <li>
          <a class="navbar__link @if(request()->route()->named('services.index')) navbar__link--active @endif" href="{{ route('services.index') }}">Услуги</a>
        </li>

        <li>
          <a class="navbar__link @if(request()->route()->named('partners.index')) navbar__link--active @endif" href="{{ route('partners.index') }}">Партнеры</a>
        </li>

        <li>
          <a class="navbar__link @if(request()->route()->named('drugstores.index')) navbar__link--active @endif" href="{{ route('drugstores.index') }}">Сеть аптек</a>
        </li>

        <li>
          <a class="navbar__link @if(request()->route()->named('express-pharm.index')) navbar__link--active @endif" href="{{ route('express-pharm.index') }}">Express Pharm</a>
        </li>

        <li>
          <a class="navbar__link @if(request()->route()->named('contacts.index')) navbar__link--active @endif" href="{{ route('contacts.index') }}">Контакты</a>
        </li>
      </ul>
    </nav>

    <div class="header__phones">
      <div class="header__phone-icon">
        <span class="material-icons">call</span>
      </div>

      <div class="header__phones-links">
        <a class="header__phone-item" href="tel:+992918000000">+992 918 00 00 00</a>
        <a class="header__phone-item" href="tel:+992918111111">+992 918 11 11 11</a>
      </div>
    </div>
  </div>
</header>

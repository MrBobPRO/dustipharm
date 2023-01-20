<header class="header">
  <div class="header__inner main-container">
    <x-logo class="header__logo" />

    <nav class="navbar">
      <ul class="navbar__list">
        <li>
          <a class="navbar__link" href="{{ route('about.index') }}">О компании</a>
        </li>

        <li>
          <a class="navbar__link" href="{{ route('services.index') }}">Услуги</a>
        </li>

        <li>
          <a class="navbar__link" href="{{ route('partners.index') }}">Партнеры</a>
        </li>

        <li>
          <a class="navbar__link" href="{{ route('drugstores.index') }}">Сеть аптек</a>
        </li>

        <li>
          <a class="navbar__link" href="{{ route('express-pharm.index') }}">Express Pharm</a>
        </li>

        <li>
          <a class="navbar__link" href="{{ route('contacts.index') }}">Контакты</a>
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

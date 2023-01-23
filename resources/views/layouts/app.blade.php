<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Дусти Фарма</title>

  {{-- Source sans pro Font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700&display=swap" rel="stylesheet">

  {{-- Material Icons --}}
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons">

  {{-- Normalize CSS --}}
  <link rel="stylesheet" href="{{ asset('plugins/normalize.css') }}">

  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
  @include('layouts.header')
  <main class="main @isset($pageClass){{ $pageClass }}@endisset">
    @yield('main')
  </main>
  @include('layouts.footer')

  {{-- JQuery --}}
  <script src="{{ asset('plugins/jquery-3.6.0.min.js') }}"></script>

  {{-- Yandex Map --}}
  <script src="https://api-maps.yandex.ru/2.1/?apikey=33a7de30-2310-4469-8b08-d11b5c952eca&lang=ru_RU"></script>

  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>

@extends('dashboard.layouts.app')
@section('main')

<form class="main-form" action="{{ route($modelTag . '.update') }}" method="POST" data-on-submit="show-spinner" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="id" value="{{ $item->id }}">

  <div class="form-group">
    <label class="form-label required">Заголовок</label>

    <input class="form-input" type="text" name="title" value="{{ old('title', $item->title) }}" required />
  </div>

  <div class="form-group">
    <label class="form-label required">Телефон</label>

    <input class="form-input" type="text" name="phone" value="{{ old('phone', $item->phone) }}" required />
  </div>

  <div class="form-group">
    <label class="form-label required">Эль. почта</label>

    <input class="form-input" type="email" name="email" value="{{ old('email', $item->email) }}" required />
  </div>

  <div class="form-group">
    <label class="form-label required">Рабочие дни</label>

    <input class="form-input" type="text" name="working_days" value="{{ old('working_days', $item->working_days) }}" required />
  </div>

  <div class="form-group">
    <label class="form-label required">Рабочие часы</label>

    <input class="form-input" type="text" name="working_hours" value="{{ old('working_hours', $item->working_hours) }}" required />
  </div>

  <div class="form-group">
    <label class="form-label required">Координаты Х (широта) - на карте</label>

    <input class="form-input" type="text" name="x_coordinates" value="{{ old('x_coordinates', $item->x_coordinates) }}" required />
  </div>

  <div class="form-group">
    <label class="form-label required">Координаты Y (долгота) - на карте</label>

    <input class="form-input" type="text" name="y_coordinates" value="{{ old('y_coordinates', $item->y_coordinates) }}" required />
  </div>

  <div class="form-group">
    <label class="form-label">Изображение</label>

    <input class="form-input" type="file" name="image" accept=".png, .jpg, .jpeg" data-action="display-local-image" data-target="local-image">
    <img class="form-image form-image--dark-bg" data-id="local-image" src="{{ asset('img/drugstores/' . $item->image) }}">
  </div>

  <div class="form-actions">
    @include('dashboard.components.form.update-button')
    @include('dashboard.components.form.destroy-button')
  </div>

</form>

@include('dashboard.modals.destroy-single-item', ['itemId' => $item->id ])

@endsection

@extends('layouts.app')

@section('title', 'Создать место')

@section('content')
<h1>Создать место</h1>

<form method="POST" action="{{ route('places.store') }}">
  {{ csrf_field() }}
  <div class="mdc-text-field mdc-text-field--outlined">
    <label class="mdc-floating-label" for="name">Название</label>
    <input class="mdc-text-field__input" id="name" name="name" type="text" maxlength="255" required>
    <div class="mdc-notched-outline"><svg><path class="mdc-notched-outline__path"/></svg></div>
    <div class="mdc-notched-outline__idle"></div>
  </div>

  <div class="mdc-text-field mdc-text-field--textarea">
    <label class="mdc-floating-label" for="description">Описание</label>
    <textarea class="mdc-text-field__input" id="description" name="description" maxlength="255" required></textarea>
    <div class="mdc-line-ripple"></div>
  </div>

  <p class="mdc-text-field-helper-text mdc-text-field-helper-text--persistent mdc-text-field-helper-text--validation-msg" id="pw-validation-msg">Не более 255 символов</p>

  <div class="mdc-form-field">
    <input class="mdc-button mdc-button--raised" type="submit" value="Создать место">
    <a class="mdc-button" href="{{ url()->previous() }}">Отменить</a>
  </div>
</form>
@endsection

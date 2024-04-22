@extends('layout')
@section('content')
<div class="d-flex align-items-center py-4 bg-body-tertiary m-0 h-100">
    <main class="form-signin w-50 m-auto p-5">
  <form method="POST" action="{{URL::to('/register')}}" onsubmit="event.preventDefault(); Validate();">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Регистрация<a href="{{URL::to('/login')}}">Войти</a></h1>
    <div class="form-floating m-2">
      <input class="form-control" id="floatingInput surname" placeholder="Surname" name="surname">
      <label for="floatingInput">Фамилия</label>
      @error('surname')
          <p>{{$message}}</p>
      @enderror
    </div>
    <div class="form-floating m-2">
      <input class="form-control" id="floatingInput name" placeholder="Name" name="name">
      <label for="floatingInput">Имя</label>
      @error('name')
          <p>{{$message}}</p>
      @enderror
    </div>
    <div class="form-floating m-2">
      <input class="form-control" id="floatingInput" placeholder="Patronymic" name="patr">
      <label for="floatingInput">Отчество</label>
      @error('patr')
          <p>{{$message}}</p>
      @enderror
    </div>
    <div class="form-floating m-2">
      <input class="form-control" id="floatingInput login" placeholder="Login" name="login">
      <label for="floatingInput">Логин</label>
      @error('login')
          <p>{{$message}}</p>
      @enderror
    </div>
    <div class="form-floating m-2">
      <input type="email" class="form-control" id="floatingInput email" placeholder="name@example.com" name="email">
      <label for="floatingInput">Электронная почта</label>
      @error('email')
          <p>{{$message}}</p>
      @enderror
    </div>
    <div class="form-floating m-2">
      <input type="password" class="form-control password" id="floatingPassword " placeholder="Password" name="password">
      <label for="floatingPassword">Пароль</label>
      @error('password')
          <p>{{$message}}</p>
      @enderror
    </div>
    <div class="form-floating m-2">
      <input type="password" class="form-control rpassword" id="floatingPassword d" placeholder="Password" name="password_repeat">
      <label for="floatingPassword">Повторите пароль</label>
    </div>
    <div class="m-2">
        <input type="checkbox" class=" rules" id="floatingPassword" name="rules">
      <label for="floatingPassword">Согласен с правилами</label>
    </div>
    <button class="btn btn-primary w-100 py-2 m-auto" type="submit">Готово</button>
  </form>
    </main>
</div>
<script src="../public/signUp.js">
@endsection
@show

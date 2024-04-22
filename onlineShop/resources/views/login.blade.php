@extends('Layout')
@section('content')

<div class="d-flex align-items-center py-4 bg-body-tertiary m-0 h-100">
    <main class="form-signin w-50 m-auto p-5">
  <form method="POST" action="{{URL::to('/login')}}">
  @csrf
    <h1 class="h3 mb-3 fw-normal">Войти | <a href="{{URL::to('/reg')}}">Регистрация</a></h1>

    <div class="form-floating m-2">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Логин</label>
    </div>
    <div class="form-floating m-2">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Пароль</label>
    </div>
    <button class="btn btn-primary w-100 py-2 m-auto" type="submit">Войти</button>
  </form>
    </main>
</div>
@endsection
@show

@extends('layouts.default')

@section('content')
  @if (Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>

        <h4>微博列表</h4>
        <hr>
        @include('shared._feed')
      </div>

      <aside class="col-md-4">
        <section class="user_info">
          @include('shared._user_info', ['user' => Auth::user()])
        </section>
      </aside>

    </div>
  @else
    <div class="jumbotron">
      <h1>Hello Laravel</h1>
      <p class="lead">你現在所在的是Weibo App主頁</p>
      <p>歡迎加入</p>
      <p>
        <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">註冊</a>
      </p>
    </div>
  @endif
@stop

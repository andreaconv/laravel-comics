@php
  $menu = config('header-menu');
@endphp

<header>

    <div class="container">

        <div class="image">
            <a href="#"><img src="{{ Vite::asset('public/img/dc-logo.png') }}" alt="logo"></a>
        </div>

        {{-- per la calsse active --}}
        {{-- {{ Route::currentRouteName() === '$item['text']' ? 'active' : ''  }} --}}

        <ul>
          @foreach ($menu as $item)
            <li class=""><a href="#">{{ $item['text'] }}</a></li>
          @endforeach
        </ul>

    </div>

</header>

<div class="jumbotron"></div>

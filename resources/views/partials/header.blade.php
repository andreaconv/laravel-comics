@php
  $menu = config('header-menu');
@endphp

<header>

    <div class="container">

        <div class="image">
            <a href="{{ route('home')}}"><img src="{{ Vite::asset('public/img/dc-logo.png') }}" alt="logo"></a>
        </div>

        {{-- per la calsse active --}}
        {{-- {{ Route::currentRouteName() === '$item['text']' ? 'active' : ''  }} --}}

        <ul>
          @foreach ($menu as $item)
            <li class="{{ Route::currentRouteName() === $item['text'] ? 'active' : ''  }}"><a href="{{ $item['link'] }}">{{ $item['text'] }}</a></li>
          @endforeach
        </ul>

    </div>

</header>

<div class="jumbotron"></div>

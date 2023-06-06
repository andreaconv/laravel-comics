@php
  $menu = config('brands-menu');
@endphp

<div class="brands">

    <div class="container">

      <ul>
        @foreach ( $menu as $item )
          <li><img src="{{$item['path']}}" alt=""><a href="#">{{$item['text']}}</a></li>
        @endforeach
      </ul>

    </div>

  </div>

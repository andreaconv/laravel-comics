@php
  $menu = config('footer-menu');
@endphp

<footer>

  {{-- @dd($menu) --}}

    <div class="myFooterTop">

        <div class="container">

          <div class="col">
            <ul>
              @foreach ($menu['dcComics'] as $item)
                <li><a href="#">{{ $item['text'] }}</a></li>
              @endforeach
            </ul>

            <ul>
              @foreach ($menu['shop'] as $item)
                <li><a href="#">{{ $item['text'] }}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col">
            <ul>
              @foreach ($menu['dc'] as $item)
                <li><a href="#">{{ $item['text'] }}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col">
            <ul>
              @foreach ($menu['sites'] as $item)
                <li><a href="#">{{ $item['text'] }}</a></li>
              @endforeach
            </ul>
          </div>


          <div class="image">
            <img src="/img/dc-logo-bg.png" alt="">
          </div>

        </div>

      </div>

      <div class="myFooterBottom">

        <div class="container">

          <div class="btn"><a href="#">SING-UP NOW!</a></div>

          <div class="cta">

            <span>FOLLOW US</span>

            <ul>
              @foreach ($menu['cta'] as $item)
                <li><a href="#"><img src="{{ $item['path'] }}" alt=""></a></li>
              @endforeach
            </ul>

          </div>

        </div>

      </div>

</footer>

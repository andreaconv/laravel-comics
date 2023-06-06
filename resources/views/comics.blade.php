@extends('layout.main')

@section('content')

  <div class="comics">

    <div class="container">

      <span id="abs">CURRENT SERIES</span>

      <div class="main-wrapper">

        @foreach ($comics as $item)
          <div class="card"> <a href="{{ route('fumetto', ['slug' => $item['slug']])  }}"><img src="{{$item['thumb']}}"></a> <span>{{$item['title']}}</span> </div>
        @endforeach


      </div>

      <div class="btn">LOAD MORE</div>

    </div>

  </div>

@endsection


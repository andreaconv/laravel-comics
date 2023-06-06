@extends('layout.main')

@section('content')

  <div class="myMain">

    <div class="container">

      <span id="abs">CURRENT SERIES</span>

      <div class="main-wrapper">

        @foreach ($comics as $item)
          <div class="card"> <img src="{{$item['thumb']}}"> <span>{{$item['title']}}</span> </div>
        @endforeach


      </div>

      <div class="btn">LOAD MORE</div>

    </div>

  </div>

@endsection


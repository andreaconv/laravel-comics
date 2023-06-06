@extends('layout.main')

@section('content')

  <div class="fumetto">

    <div class="container">

      {{-- @dd($fumetto) --}}

      <div class="single-comics">
        <img src="{{ $fumetto['thumb']}}" alt="">
      </div>

      <div class="details">
        <h1>{{ $fumetto['title'] }}</h1>
        <p>{{ $fumetto['description'] }}</p>

        <table>
          <thead>
            <tr>
              <th>price</th>
              <th>series</th>
              <th>sale_date</th>
              <th>type</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $fumetto['price'] }}</td>
              <td>{{ $fumetto['series'] }}</td>
              <td>{{ $fumetto['sale_date'] }}</td>
              <td>{{ $fumetto['type'] }}</td>
            </tr>
          </tbody>
        </table>
      </div>



    </div>

  </div>


@endsection


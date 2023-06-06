<header>

    <div class="container">

        <div class="image">
            {{-- TODO: trovare il percorso dell'immagine --}}
            <a href="#"><img src="{{ Vite::asset('public/img/dc-logo.png') }}" alt="logo"></a>
        </div>

        <ul>
            {{-- TODO: mettere il tag a all'interno degli li --}}
            <li>characters</li>
            <li class="active"><a href="#">comics</a></li>
            <li>movies</li>
            {{-- <li
            v-for="(item, index) in headerMenu"
            :key="index"
            :class="{'active' : counter === index}">
            <a @click="counter = index" href="#">
            {{item.text}}</a>
            </li> --}}
        </ul>

    </div>

</header>

<div class="jumbotron"></div>

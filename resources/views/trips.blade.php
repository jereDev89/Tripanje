@extends('layouts.layout')
  @section('content')
    <div id="container">

      <div id="navi" class="">
        <ul>
          <a href="/"><li>Home</li></a>
          <a href="#"><li>Logout</li></a>
        </ul>
      </div>

      <div id="logo">
        <img src="/images/logo.png" alt="Logo" class="logo_slika animated rotateIn"/>
      </div>

      <div id="popis_izleta">

        <h1 class="popis_izleta_naslov">Popis izleta</h1>
        <hr class="crta"/>

        <div class="izlet">

          <div class="">
            <img src="/images/rijeka.jpg" alt="" class="slika_izleta">
          </div>

          <div class="opis_izleta">
            <h1 class="plava_boja">Rijeka</h1>
            <p>Apart from the rapid economic growth, the period encompassing the second half of the 19th century and up to World War I also saw a shift in the ethnic composition of the city. The Kingdom of Hungary, which administered the city during that period, favoured the Hungarian</p>
            <h4 class="saznaj">Saznaj više &gt;&gt;</h4>
          </div> <br> <br> <br> <br> <br> <br>


        <div class="izlet">

          <div class="opis_izleta">
            <h1 class="plava_boja">Naziv izleta</h1>
            <p>Opis izleta</p>
            <p></p>
            <h4 class="saznaj" href="">Saznaj više >></h4>
          </div>

        </div>
        {% endfor %}
      </div>


      <div id="footer">
        <p>Bootcamp <span class="bold_text">Strumfovi</span> Production &copy 2019</p>
      </div>

    </div>
@endsection('content')

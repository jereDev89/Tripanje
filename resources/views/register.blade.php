@extends('layouts.layout')
  @section('content')
    <div id="container">

      <div id="navi" class="">
        <ul>
          <a href="/"><li>Home</li></a>
          <a href="/popisIzleta"><li>Trips</li></a>
        </ul>
      </div>

      <div id="logo">
        <img src="/images/logo.png" alt="Logo" class="logo_slika animated rotateIn"/>
      </div>

      <div id="header">
        <h1 class="main_header animated bounceInDown">Trip App</h1>
      </div>

      <div>

        <div id="registracija_form" class="">
          <form action="" method="post" novalidate>

            <h2>Registracija</h2>

            <input type="text" name="name" value="" placeholder="Ime i prezime"/><br>

            <input type="email" name="email" value="" placeholder="E-mail"/><br>

            <input type="text" name="mjesto_stanovanja" value="" placeholder="Mjesto stanovanja"/><br>

            <input type="text" name="username" value="" placeholder="Korisničko ime"/><br>

            <input type="password" name="password" value="" placeholder="Lozinka"/><br>

            <input type="password" name="password_repeat" value="" placeholder="Ponovite Lozinku"/><br>

            <a href="/login"><button type="button" name="registracija_form" class="button_class">Registriraj se!</button></a><br>
          </form>
        </div>



      <div id="footer">
        <p>Bootcamp <span class="bold_text">Strumfovi</span> Production &copy 2019</p>
      </div>

    </div>
@endsection('content')

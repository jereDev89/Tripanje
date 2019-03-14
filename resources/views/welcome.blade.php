@extends('layouts.layout')
  @section('content')
    <div id="container" class="background_image">

        <div id="navi">
          <ul>
            <a href="#"><li>Home</li></a>
            <a href="/trips"><li>Trips</li></a>
            <a href="/register"><li>Register</li></a>
            <a href="#"><li>Logout</li></a>
          </ul>
        </div>

        <div id="logo">
          <img src="/images/logo.png" alt="Logo" class="logo_slika animated rotateIn"/>
        </div>

        <div id="header">
          <h1 class="main_header animated bounceInDown">Trip App</h1>
        </div>



          <div id="login" class="">
            <form action="" method="post" novalidate>

              <h2>Login</h2>

              <input type="text" name="username" value="" placeholder="Username"/><br>

              <input type="password" name="password" value="" placeholder="Password"/><br>

              <button type="button" name="button" class="button_class">SUBMIT</button><br>

            </form>

            <p class="registracija_rec">Molimo Vas da se registrirate ukoliko niste naš član!</p>
            <a href="#"><button type="button" name="registracija" class="button_class">Registracija</button></a>
          </div>


          <div id="footer">
            <p>Bootcamp <span class="bold_text">Strumfovi</span> Production &copy 2019</p>
          </div>

    </div>
@endsection('content')

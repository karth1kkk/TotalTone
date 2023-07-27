<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recipes</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/recipes.css">
    </head>

    <body class="antialiased">
      <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
        <div class="flex items-center">
          <h3 class="rew sm:fixed sm:top-0 sm:left-0 p-6 text-left z-10">
            <b>TotalTone </b></h3>
            <ion-icon class="dg sm:fixed sm:top-0 sm:left-0 p-6 text-left z-10" style="padding-left: 108px;font-size:50px;padding-top:10px" name="analytics-outline">
              <ion-icon name="analytics-outline"></ion-icon>
        </div>
        @if (Route::has('login'))
          <div class="ho sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">        
            @auth
              <a href="/" style="text-decoration: none" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"aria-current="page" href="/">Home</a>
              <a href="/recipes" style="text-decoration: none" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Recipes</a>
              <a href="{{ route('profile.show') }}" style="text-decoration: none" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ Auth::user()->name }}</a>
            @else
              <a href="/" style="text-decoration: none" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"aria-current="page" href="/">Home</a>
              <a href="/recipes" style="text-decoration: none" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Recipes</a>  
              <a href="{{ route('login') }}" style="text-decoration: none" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
            @if (Route::has('register'))
              <a href="{{ route('register') }}" style="text-decoration: none" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
            </div>
            @endif
    </body>

<main>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="gw col-lg-6 col-md-8 mx-auto">
    <h1 class="fw-light" style="font-size: 30px"><b>Recipes</b></h1>
        <br>
      <p class="lead text-body-primary" style="font-weight: 400">These are recipes which may be helpful<br>  in terms of lower caloric intake<br> while providing nutritious <br> benefits.</p>
        <br>
      <p><a href="{{url('/welcome')}}" class="btn btn-primary btn-block"><b>Add Your Own Recipe</b></a></p>
  </div>
  <section class="py-10 text-center container" >
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light" style="font-size: 30px"><b>Recipes</b></h1>
            <br>
          <p class="lead text-body-primary" style="font-weight: 400">These are recipes which may be helpful<br>  in terms of lower caloric intake<br> while providing nutritious <br> benefits.</p>
            <br>
          <p><a href="{{url('/welcome')}}" class="btn btn-primary btn-block"><b>Add Your Own Recipe</b></a></p>
      </div>
    </div>
  </section>
  <br><br><br><br>
  <label class="g" style="padding-left: 330px;font-size: 50px"><b>Recipes</b></label>
    <div class="post-container">
      @foreach($post as $post)
        <div class="{{$post}}">
          <label style="padding-left: 40px;font-size: 20px"><b>{{$post->name}}</b></label>
            <img style="border-radius: 10px" width="300" height="225" src="post/{{$post->image}}" alt="">
          <label style="font-size: 15px">Category: <b>{{$post->category}}</b></label>
            <br><br>
          <label style="font-size: 15px">By: <b>{{$post->username}}</b></label>
            <details>
              <summary style="font-size: 15px">View</summary>
              <a style="font-size: 15px"><b>Recipe: </b><br><br>{{$post->recipe}}</a><br><br>
              <a style="font-size: 15px"><b>Instructions: </b><br><br>{{$post->instructions}}</a>
            </details>
        @endforeach
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js" nomodule></script>
<br><br><br>
    <p class="md col-md-4 mb-0 text-body-secondary">&copy; By Karthik</p>
    </div>
</html>


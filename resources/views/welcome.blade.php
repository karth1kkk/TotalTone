<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Homepage</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/welcome.css">
    </head>
          
    <body class="antialiased">
      <div class="flex items-center">
        <h3 class="sm:fixed sm:top-0 sm:left-0 p-6 text-left z-10">
           <b>TotalTone </b></h3>
             <ion-icon class="he sm:fixed sm:top-0 sm:left-0 p-6 text-left z-10" style="padding-left: 108px;font-size:50px;padding-top:10px" name="analytics-outline">
           <ion-icon name="analytics-outline"></ion-icon>
      </div>
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">

            @if (Route::has('login'))
                <div class=" ho sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="/" style="text-decoration: none" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"aria-current="page" href="/">Home</a>
                <a href="/recipes"  style="text-decoration: none" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Recipes</a>
                <a href="{{ route('profile.show') }}"  style="text-decoration: none" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ Auth::user()->name }}</a>
            @else
                <a href="/" style="text-decoration: none" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"aria-current="page" href="/">Home</a>
                <a href="/recipes"  style="text-decoration: none" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Recipes</a>  
                <a href="{{ route('login') }}" style="text-decoration: none" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" style="text-decoration: none" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
            @endif 
    </body>

    <main class="p h-100 text-center" style="padding-top: 300px">
        <section class="px-3">
            <h1><b>Calculate Your Calories here</b></h1>
            <br>
            <p class="lead" style="font-weight: 400"><b>TotalTone </b> is a calorie calculating page that helps out <br> people who wants to build, sculpt and change<br> their physique and lifestyle.</p>
            <br>
            <p class="lead"><a href="/calculate" class="btn btn-primary "><b>Calculate</b></a></p>
        </section>

        <br><br><br><br><br>
        
        <button id="scrollButton"><ion-icon name="caret-down-circle-outline"></ion-icon></button>

        <br><br><br><br><br>
        <main class="p h-100 text-center" id='content' style="padding-top: 300px">
            <section class="px-3">
                <h1><b>Create Your Own Workout plan</b></h1>
                <br>
                <p class="lead" style="font-weight: 400"><b>TotalTone </b> can also help you create your own <br> personalized workout plan based on <br> your lifestyle and availability</p>
                <br>
                <p class="lead"><a href="/workout-planner" class="btn btn-primary "><b>Create</b></a></p>
            </section>
            <br><br><br><br><br>
            <button id="upButton"><ion-icon name="caret-up-circle-outline"></ion-icon></button>    
          
          <div class="container" style="padding-top: 280px;margin-left:150px;margin-right:300px;padding-right:200px;padding-left:100px">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
              <p class="col-md-4 mb-0 text-body-secondary">&copy; By Karthik</p>
          
              <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <ion-icon style="padding-left: 108px;font-size:50px;padding-top:10px" name="analytics-outline">
                  <ion-icon name="analytics-outline"></ion-icon>
              </a>
          
              <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="https://github.com/karth1kkk/TotalTone" class="nav-link px-2 text-body-secondary">Github</a></li>
                <li class="nav-item"><a href="https://github.com/karth1kkk/CodeLingual" class="nav-link px-2 text-body-secondary">CodeLingual</a></li>
                <li class="nav-item"><a href="https://github.com/karth1kkk/YourProjects.com" class="nav-link px-2 text-body-secondary">YourProjects.com</a></li>
              </ul>
            </footer>
          </div>
          <p class="hj col-md-4 mb-0 text-body-secondary">&copy; By Karthik</p>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="../js/workout.js"></script>
    </main>
</html>

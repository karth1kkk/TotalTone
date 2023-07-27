<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Workout</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/welcome.css">
        <link rel="stylesheet" href="../css/workout.css">
    </head>
          
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            
      <div class="flex items-center">
        <h3 class="sm:fixed sm:top-0 sm:left-0 p-6 text-left z-10">
           <b>TotalTone </b></h3>
             <ion-icon class="he sm:fixed sm:top-0 sm:left-0 p-6 text-left z-10" style="padding-left: 108px;font-size:50px;padding-top:10px" name="analytics-outline">
           <ion-icon name="analytics-outline"></ion-icon>
      </div>
            @if (Route::has('login'))
                <div class="ho sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
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
<head>
    <title>Workout Planner</title>
</head>
<section style="padding-top:200px;padding-left:100px;">
    @if (isset($workoutPlan) && !empty($workoutPlan))
    <div id="workoutPlanContainer">
        <h2><b>Your Workout Plan:</b> </h2>
        <br>
        <ul>
            @foreach ($workoutPlan as $day => $exercises)
                @if (is_array($exercises))
                    <li><strong>{{ $day }}:</strong>
                        <ul>
                            @foreach ($exercises as $muscleGroup => $exercisesList)
                                <li><strong>{{ $muscleGroup }}</strong></li>
                                <ul>
                                    @foreach ($exercisesList as $exercise => $setsAndReps)
                                        <li>{{ $exercise }} - {{ $setsAndReps }}</li>
                                    @endforeach
                                </ul>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li><strong>{{ $day }}:</strong> {{ $exercises }}</li>
                @endif
            @endforeach
        </ul>
    </div>
    @else
        <form method="post" class="workout" action="{{ route('workout-planner') }}">
            @csrf
            <h1>Workout Planner</h1>
            <h2> <b>Select Your Workout Split:</b></h2>
            <br>
            <label class="kj" style="padding-left:150px ">
                <input type="radio" name="split" value="Push-Pull-Legs"> Push-Pull-Legs
            </label>
            <label class="kj" style="padding-left:150px ">
                <input type="radio" name="split" value="Bro Split"> Bro Split
            </label>
            <label class="kj" style="padding-left:150px ">
                <input type="radio" name="split" value="Upper-Lower"> Upper-Lower
            </label>

            <br><br>
            <input type="submit" class="btn btn-primary btn-block" style="color: black" value="Create Workout Plan">
        </form>
        <br>
    @endif
      
      <div class="container" style="padding-top: 330px;margin-left:160px;margin-right:300px;padding-right:200px;padding-left:100px">
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
        </footer>
      </div>
    </section>
</html><p class="as col-md-4 mb-0 text-body-secondary">&copy;By Karthik</p>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <title>Calorie Calculator</title>
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
      <link rel="stylesheet" href="../css/calculate.css">
    </head>

<div class="flex items-center">
  <h3 class="sm:fixed sm:top-0 sm:left-0 p-6 text-left z-10">
    <b>TotalTone </b></h3>
      <ion-icon class="he sm:fixed sm:top-0 sm:left-0 p-6 text-left z-10" style="padding-left: 108px;font-size:50px;padding-top:10px" name="analytics-outline">
    <ion-icon name="analytics-outline"></ion-icon>
</div>

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
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
   <body>
      <div class="container">
        <div class="card">
          <h1>Calorie Calculator</h1>
            <form id="calorie-form">
              <label for="age">Age (15-80):</label>
                <input type="number" class="form-control" id="age" min="15" max="80" required>
                  <fieldset class="form-group">
                    <div class="row">
                      <legend class="col-form-label col-sm-2 pt-0 text-black bg-white">Gender</legend>
                        <div class="col-sm-10" id="form-radio">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="male" name="customRadioInline1" class="custom-control-input" checked="checked">
                            <label class="custom-control-label text-black bg-white" for="male">Male</label>
                          </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="female" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label text-black bg-white" for="female">Female</label>
                    </div>  
        </div>
      </div> 
        </fieldset> 
            <label for="weight">Weight (in kg):</label>
            <input type="number" class="form-control" id="weight" required>
            <label for="height">Height (in cm):</label>
            <input type="number"  class="form-control" id="height" required>
          <div class="form-group row">
                <legend class="col-form-label col-sm-2 pt-0 text-black bg-white">Activity</legend>
                <select class="custom-select col-sm-10" id="list">
                  <option selected value="1">Sedentary (little or no exercise)</option>
                  <option value="2">Lightly active (light exercise/sports 1-3 days/week)</option>
                  <option value="3">Moderately active (moderate exercise/sports 3-5 days/week)</option>
                  <option value="4">Very active (hard exercise/sports 6-7 days a week)</option>
                  <option value="5">Extra active (very hard exercise/sports & physical job or 2x training)</option>
                </select>
          </div>
              <div class="form-group row">
                <label for="goal" class="col-sm-2 col-form-label text-black bg-white">Goal</label>
                <select class="custom-select col-sm-10" id="goal">
                  <option selected value="maintain">Maintain weight</option>
                  <option value="extreme-loss">Extreme weight loss</option>
                  <option value="moderate-loss">Moderate weight loss</option>
                  <option value="slow-loss">Slow weight loss</option>
                  <option value="extreme-gain">Extreme weight gain</option>
                  <option value="moderate-gain">Moderate weight gain</option>
                  <option value="slow-gain">Slow weight gain</option>
                </select>
              </div>
              <div class="form-group">
                <input type="submit" value="Calculate" class="btn btn-primary btn-block">
              </div>
            <div id="loading" class="pt-4 text-black bg-white" style="display: none;">Loading...</div>
            <div id="results" class="pt-4 text-black bg-white">
              <h5>Total Calories</h5>
              <div class="form-group">
                <div class="input-group">
                  <input type="number" class="form-control" id="total-calories" disabled>
                </div>
              </div>                       
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
 
    <div id="zig2" style="display: none;">
      <h2> <b>Average Caloric Intake</b> </h2>
        <table id="caloric-intake-table2">
         <thead>
          <tr>
            <th>Day</th>
            <th>Caloric Intake</th>
          </tr>
        </thead>
      <tbody class="tbody2"></tbody>
      </table>
    </div>
    <br><br>
    <div id="zig1" style="display: none;">
      <h2> <b>Zigzag Caloric Intake</b></h2>
        <table id="caloric-intake-table1">
          <thead>
            <tr>
              <th>Day</th>
              <th>Caloric Intake</th>
            </tr>
          </thead>
          <tbody class='tbody1'></tbody>
        </table>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
      </symbol>
      <symbol id="facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
      </symbol>
      <symbol id="instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
      </symbol>
      <symbol id="twitter" viewBox="0 0 16 16">
        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
      </symbol>
    </svg>
    
    <div class="container1" style="padding-top: 280px;">
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
  </body>
  </main>
  <p class="fg col-md-4 mb-0 text-body-secondary">&copy; By Karthik</p>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="../js/calculate.js"></script>
    </body>
</html>

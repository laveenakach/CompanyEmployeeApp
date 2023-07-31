<!DOCTYPE html>
<html>
   <head>
      <title>Admin Dashboard</title>
      <!-- Bootstrap CSS CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

   </head>
   <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               
                     <ul class="nav navbar-nav ml-auto">
                        @guest
                        <li>
                           <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @else
                        <li>
                           <a class="nav-link" href="/home">Home</a>
                        </li>
                        <li>
                           <a class="nav-link" href="companies">Companies</a>
                        </li>
                        <li>
                           <a class="nav-link" href="employees">Employees</a>
                        </li>
                        <form id="logout-form" action="{{ url('logout') }}" method="POST">
            {{ csrf_field() }}
    <button type="submit">Logout</button>
</form>
                        
                        @endguest
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      @yield('content')
     
   </body>
</html>
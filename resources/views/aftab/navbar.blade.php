<div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="/">IUB Doc</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#services">Services</a></li>
        <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
        <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>

        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        {{-- @if(Route::has('login'))
        @auth
        <li class="nav-item">
          <a class="nav-link bg-info text-white" href="{{url('myappointment')}}">My Appointment</a>
        </li>
        <x-app-layout>


        </x-app-layout>
        @else
        <li class="nav-item">
          <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
        </li>

        @endauth
        @endif --}}
           @if(Route::has('login'))
          @auth
          
          <li >
            <a class="nav-link scrollto" href="{{url('myappointment')}}">My Appointments</a>
          </li>
          <li >
            <a class="nav-link scrollto" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          </li>
          @else

          <li >
            <a class="nav-link scrollto" href="{{route('login')}}">Login</a>

          </li>
          <li >
            <a class="nav-link scrollto" href="{{route('register')}}">Register</a>

          </li>

          @endauth
          @endif

      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    {{-- <a href="#appointment" class="appointment-btn nav-link scrollto"> Appointment</a> --}}
     {{-- <a href="" class="appointment-btn scrollto"> Login</a>  
    <a href="#appointment" class="appointment-btn scrollto">register</a>  --}}


  </div>
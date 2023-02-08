<!DOCTYPE html>
<html lang="en">

<head>
 
@include('aftab.headlink')
</head>

<body>

  <!-- ======= Top Bar ======= -->
@include('aftab.topbar')

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">

  @if(session()->has('message'))
  <div class="alert alert-success" role="alert">
      {{session()->get('message')}}

       </div>

           @endif
   <!-- End Header -->
   <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="/">IUB Doc</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto active" href="/">Home</a></li>
        {{-- <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#services">Services</a></li>
        <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
        <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>

        <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
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
  </header>
  <!-- ======= Hero Section ======= -->
 <!-- End Hero -->
 <main id="main">

    <section id="departments" class="departments mt-5">
        <div class="container">
    
          <div class="section-title ">
            <h2 class="mt-5">Appointments</h2>
          </div>
          <div class="row  table-responsive">
        <table class="table">
<thead>
<tr>
  <th scope="col">Patient Name</th>
  <th scope="col">Doctor Name</th>
  <th scope="col">Date</th>
  <th scope="col">Message</th>
  <th scope="col">Status</th>


</tr>
</thead>
<tbody>
@foreach($appoint as $appoints)
<tr>
   <td>{{$appoints->name}}</td>
  <td>{{$appoints->doctor}}</td>
  <td>{{$appoints->date}}</td>
  <td>{{$appoints->message}}</td>
  <td>{{$appoints->status}}</td>
  {{-- <td><a class="btn btn-danger" onclick="return confirm('are you sure to delete')" href="{{url('cancel_appoint',$appoints->id)}}" >Cancel </a></td> --}}


 
</tr>
@endforeach

</tbody>
</table>
</div>
        </div>
    </section>
  <!-- End #main -->
 </main>
  <!-- ======= Footer ======= -->
  @include('aftab.footer')
 <!-- End Footer -->


</body>

</html>
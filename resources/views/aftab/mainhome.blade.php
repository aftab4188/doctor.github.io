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
   @include('aftab.navbar')
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to IUB Doc</h1>
      <h2>Talk to Professional Doctors at your Home</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    @include('aftab.why')
    <!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    @include('aftab.about')
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    @include('aftab.counts')
   <!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    @include('aftab.service')
    <!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    @include('aftab.appointment')
   <!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
   <!-- End Departments Section -->
   @include('aftab.department')

    <!-- ======= Doctors Section ======= -->
    @include('aftab.doctor')
    <!-- End Doctors Section -->
          
    <!-- ======= Frequently Asked Questions Section ======= -->
    @include('aftab.question')
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('aftab.testimonial')
   <!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    @include('aftab.gallery')
    <!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    @include('aftab.contact')
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('aftab.footer')
 <!-- End Footer -->


</body>

</html>

<div class="page-section">

    <div class="container">
      <div class="section-title">
        <h2>Services</h2>
      </div>
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>


      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
         @foreach($doctor as $doctors)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="doctorimage/{{$doctors->image}}" class="img-fluid" alt="image">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doctors->name}}</p>
              <span class="text-sm text-grey">{{$doctors->specility}}</span>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>


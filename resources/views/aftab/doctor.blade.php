<section id="doctors" class="doctors">
  
    <div class="container">

      <div class="section-title">
        <h2>Doctors</h2>
        <p>Doctors also known as physicians, are licensed health professionals who maintain and restore human health through the practice of medicine. They examine patients, review their medical history, diagnose illnesses or injuries, administer treatment, and counsel patients on their health and well-being.</p>
        
      </div>

      <div class="row">
        @foreach($doctor as $doctors)

        <div class="col-lg-6 mt-4 ">
          <div class="member d-flex align-items-start">

        
            <div class="pic">
              <img src="doctorimage/{{$doctors->image}}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>{{$doctors->name}}</h4>
              <span>{{$doctors->specility}}</span>
              
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          
        </div>
        </div>
        @endforeach
      </div>
       
  </div>
   
  </section>

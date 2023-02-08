<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2> Map Location</h2>
        
      </div>
    </div>

  
    <div ><iframe width="100%" height="350px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=350px&amp;hl=en&amp;q=The%20Islamia%20University%20of%20Bahawalpur%20Rahim%20yar%20khan%20campus%20+(IUB%20Lab)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">distance maps</a></iframe></div>
    <div class="section-title mt-5">
      <h2>Are you a five-star doctor?</h2>
      <p>Sign-up to reach millions of patients <br>Get more appointments through online bookings <br>So If u are a professional doctor then join Iub Doc</p>
    </div>
  </div>

    <div class="container">
      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>IUB RAHIM YAR KHAN CAMPUS</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">
          <form class="main-form" action="{{url('regdoc')}}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control"  placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email"  placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="specility"  placeholder="Specility" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            
            <button type="submit" class="btn text-center btn-success mt-5 wow zoomIn">Submit</button>

          </form>

        </div>

      </div>

    </div>
  </section>
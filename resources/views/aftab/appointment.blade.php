<section id="appointment" class="appointment section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Make an Appointment</h2>
        <p>Book appointments with the best Doctors and Specialists such as Gynecologists, Skin Specialists, Child Specialists, Surgeons, etc. Avail test services such as MRI, CT scan, Ultrasound, X-Ray, etc. and Online Doctor Video Consultations all across Pakistan conveniently.</p>
      </div>

      {{-- <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="department" id="department" class="form-select">
              <option value="">Select Department</option>
              <option value="Department 1">Department 1</option>
              <option value="Department 2">Department 2</option>
              <option value="Department 3">Department 3</option>
            </select>
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="doctor" id="doctor" class="form-select">
              <option value="">Select Doctor</option>
              <option value="Doctor 1">Doctor 1</option>
              <option value="Doctor 2">Doctor 2</option>
              <option value="Doctor 3">Doctor 3</option>
            </select>
            <div class="validate"></div>
          </div>
        </div>

        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Make an Appointment</button></div>
      </form> --}}
      
      <form class="main-form" action="{{url('appoint')}}" method="POST" enctype="multipart/form-data">

        @csrf
       <div class="row mt-5 ">
         <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
           <input type="text" name="name" class="form-control" placeholder="Full name">
         </div>
         <div class="col-12 col-sm-6 py-2 wow fadeInRight">
           <input type="text"  name="email" class="form-control" placeholder="Email address..">
         </div>
         <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
           <input type="date" name="date" class="form-control">
         </div>
         <div class=" col-12 col-sm-6 py-2 form-group " data-wow-delay="300ms">
           <select name="doctor" id="doctor" class="form-select">
             <option> --Select Doctor-- </option>

             @foreach($doctor as $doctors)
             <option value="{{$doctors->name}}">{{$doctors->name}}--speciality--{{$doctors->specility}}</option>

          
              @endforeach

           </select>
         </div>
         

         <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
           <input type="text" name="phone" class="form-control" placeholder="Number..">
         </div>
         <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
           <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
         </div>
         <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <label  class="form-label">Upload Payment Screen shot</label>
          <input type="file" name="file" required>
         <div>
       </div>
       <!-- <a  type="submit" class="btn btn-primary mt-3 wow zoomIn" href="">Submit</a> -->

       <button type="submit" class="btn btn-success mt-5 wow zoomIn">Submit</button>
     </form>

    </div>
  </section>
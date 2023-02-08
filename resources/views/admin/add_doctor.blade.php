

<!DOCTYPE html>
<html lang="en">
  <head>
   
 @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
              </div>
            </div>
            
          </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
       @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper ">
            <div class="container ">
                <div class=" col-md-6 pt-5 ms-5">
                    @if(session()->has('message'))
                      <div class="alert alert-success" role="alert">
                        <button type="button" class="btn-close" aria-label="Close"></button>
                        {{session()->get('message')}}

                      </div>

                       @endif
                      <form  action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                         @csrf
                         
                   <div class="mb-3 ">
                    <label  class="">Doctor Name </label>
                    <input type="text"  class="text-black " style="width: 100%"; name="name"  placeholder="Write the name" required>
                   <div>
                   <div class="mb-3 ">
                    <label  class="">Phone </label>
                    <input type="text"  class=" text-black" style="width: 100%";  name="phone"  placeholder="Write the number"required>
                   <div>
                   <div class="mb-3 ">
                    <label  class="">Specility</label>
                    <select  name="specility" class="form-select" id="specificSizeSelect" required>
                      <option selected>Choose...</option>
                        <option value="skin">skin</option>
                         <option value="heart">heart</option>
                          <option value="eye">eye</option>
                          <option value="nose">nose</option>

                             </select>
                   <div>
                   <div class="mb-3 ">
                    <label  class="">Room no</label>
                    <input type="text"  class="  text-black" style="width: 100%"; name="room"  placeholder="Write the room number" required>
                   <div>
                   <div class="mt-3 ">
                    <label  class="form-label">Doctor image</label>
                    <input type="file" name="file" required>
                   <div>
                    <button type="submit" class="btn btn-warning mt-5 ">Submit</button>

                </form>
                </div>
            </div>

     </div>
    
          
         
    <!-- container-scroller -->
   @include('admin.scripts')
  </body>
</html>

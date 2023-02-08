

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
        <div class="container-fluid page-body-wrapper">
            <div class="container ">
                <div class=" col-md-6 pt-5 ms-5">
                @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                    <button type="button" class="btn-close" aria-label="Close"></button>
                        {{session()->get('message')}}

                         </div>

                    @endif
                <form  action="{{url('sendemail',$data->id)}}" method="POST">
                    @csrf

                   <div class="mb-3 ">
                    <label  class="form-label">Greeting</label>
                    <input type="text"  class="  form-control text-black"  name="greeting"  required>
                   <div>
                   <div class="mb-3 ">
                    <label  class="form-label">Body </label>
                    <input type="text"  class="  form-control text-black"  name="body" required>
                   <div>
                 
                   <div class="mb-3 ">
                    <label  class="form-label">Action text</label>
                    <input type="text"  class="  form-control text-black"  name="actiontext"  required>
                   <div>
                   <div class="mb-3 ">
                    <label  class="form-label">Action url</label>
                    <input type="text"  class="  form-control text-black"  name="actionurl"  required>
                   <div>
                   <div class="mb-3 ">
                    <label  class="form-label">End part</label>
                    <input type="text"  class="  form-control text-black"  name="endpart"  required>
                   <div>
                  
                         <button type="submit" class="btn mt-3 btn-success">Submit</button>
                    
                  
                </form>
                </div>
            </div>

     </div>
    
          
         
    <!-- container-scroller -->
   @include('admin.scripts')
  </body>
</html>

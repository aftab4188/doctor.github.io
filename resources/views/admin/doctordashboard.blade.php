

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
     @include('admin.docdashsidebar')
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
       @include('admin.navbar')
        <!-- body starts -->
        <div class="container-fluid page-body-wrapper">

          <div class="main-panel">
            <div class="">
              <div class="row ms-4">
                <div class="card text-white bg-warning ms-3 mb-3" style="max-width: 18rem;">
                  <div class="card-header">Admin
                  </div>
                  <div class="card-body">
                    <h1 class="card-title" style="font-size: 40px";>{{ $admino}}</h1>
                  </div>
                </div>
                <div class="card text-white bg-warning ms-3 mb-3" style="max-width: 18rem;">
                  <div class="card-header">Patients
                  </div>
                  <div class="card-body">
                    <h1 class="card-title" style="font-size: 40px";>{{ $appoints}}</h1>
                  </div>
                </div>
                <div class="card text-white bg-warning  ms-3 mb-3" style="max-width: 18rem;">
                  <div class="card-header">Doctors
                  </div>
                  <div class="card-body">
                    <h1 class="card-title" style="font-size: 40px";>{{ $doc }}</h1>
                  </div>
                </div>
                <div class="card text-white bg-warning  ms-3 mb-3" style="max-width: 18rem;">
                  <div class="card-header">Users
                  </div>
                  <div class="card-body">
                    <h1 class="card-title" style="font-size: 40px";>{{ $userr}}</h1>
                  </div>
                  
                  
                </div>
              </div>
            </div>
          </div>
         

    <!-- container-scroller -->
   @include('admin.scripts')
  </body>
</html>

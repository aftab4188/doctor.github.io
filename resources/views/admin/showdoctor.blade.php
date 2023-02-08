

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
        <div class="container-fluid page-body-wrapper">
        <div class="main-panel ">
          <div class="">

            <div class="row">
          <div class="col-sm-12 col-xs-12 ">
            <div class="table-responsive">
      <table  class="table table-hover table-dark text-light">
    <thead>
    <tr>
      <td scope="col">id</td>
      <td scope="col">Cus</td>
      <td scope="col">Email</td>
        <td scope="col">Phone</td>
       <td scope="col">Doctor </td>
         <td scope="col">Date </td>
         <td scope="col">Message</td>
           <td scope="col">Status </td>
   

    </tr>
  </thead>
  <tbody>
  @foreach($data as $doctor)

    <tr>
       <td>{{$doctor->id}}</td>
       <td>{{$doctor->name}}</td>
       <td>{{$doctor->phone}}</td>
       <td>{{$doctor->specility}}</td>
       <td>{{$doctor->room}}</td>
       <td><a href="doctorimage/{{$doctor->image}}"><img src="doctorimage/{{$doctor->image}}"></a></td>


       <td><a class="btn btn-primary"  href="{{url('updatedoctor',$doctor->id)}}" >Update </a></td>

      <td><a class="btn btn-danger" onclick="return confirm('are you sure to delete')" href="{{url('deletedoctor',$doctor->id)}}" >Delete </a></td>


    </tr>
    @endforeach
  
   
  </tbody>
</table>
          </div>
            </div>
            </div>
           </div>
          </div>
        </div>
            
         
    <!-- container-scroller -->
   @include('admin.scripts')
  </body>
</html>

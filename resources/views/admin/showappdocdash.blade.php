

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
        <!-- partial -->
        {{-- <div class="container-fluid page-body-wrapper">

          <div class="main-panel">
            <div class=""> --}}
        <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="table-responsive">
            <div class="row col-sm-12 col-xs-12">
            <table class="table table-hover table-dark text-light">
           <thead>
              <tr>
                <td scope="col">SS</td>
               <td scope="col">Cus</td>
               <td scope="col">Email</td>
                 <td scope="col">Phone</td>
                <td scope="col">Doctor </td>
                  <td scope="col">Date </td>
                  <td scope="col">Message</td>
                    <td scope="col">Status </td>
                    <td scope="col">Approved </td>
                    <td scope="col">Cancel </td>
                     <td scope="col"> Mail </td>
                       </tr>
                       </thead>
                        <tbody>
   
                 @foreach($data as $appoint)
    <tr>
      <td><a href="doctorimage/{{$appoint->image}}"><img src="doctorimage/{{$appoint->image}}"></a></td>

       <td>{{$appoint->name}}</td>
       <td>{{$appoint->email}}</td>
       <td>{{$appoint->phone}}</td>
       <td>{{$appoint->doctor}}</td>
       <td>{{$appoint->date}}</td>
       <td>{{$appoint->message}}</td>
       <td>{{$appoint->status}}</td>

       <td><a class="btn btn-success" onclick="return confirm('are you sure to approve')" href="{{url('approved',$appoint->id)}}" >Approve </a></td>

      
     <td><a class="btn btn-danger" onclick="return confirm('are you sure to delete')" href="{{url('canceled',$appoint->id)}}" >Cancel </a></td>
    
    <td><a class="btn btn-warning"  href="{{url('emailview',$appoint->id)}}" >Send Mail </a></td>
    </tr>
    @endforeach
  
   
  </tbody>
</table>
            </div>
           </div>
          </div>
        
        </div>
  
          
         
    <!-- container-scroller -->
   @include('admin.scripts')
  </body>
</html>

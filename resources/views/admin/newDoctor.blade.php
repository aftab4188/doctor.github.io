

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
               <td scope="col">Doctor Name</td>
               <td scope="col">Email</td>
                 <td scope="col">Specility</td>
           
                  <td scope="col">Message</td>
                    
                    <td scope="col">Cancel </td>
                     <td scope="col"> Mail </td>
                       </tr>
                       </thead>
                        <tbody>
   
                 @foreach($data as $add)
    <tr>

       <td>{{$add->name}}</td>
       <td>{{$add->email}}</td>
       <td>{{$add->specility}}</td>
       <td>{{$add->message}}</td>
      

       {{-- <td><a class="btn btn-success" onclick="return confirm('are you sure to approve')" href="{{url('approved',$appoint->id)}}" >Approve </a></td> --}}

      
     <td><a class="btn btn-danger" onclick="return confirm('are you sure to delete')" href="{{url('canceled',$add->id)}}" >Cancel </a></td>
    
    <td><a class="btn btn-warning"  href="{{url('emailview',$add->id)}}" >Send Mail </a></td>
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


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            
            <div  style="padding-top:50px; padding-right:250px;">

                <table style="padding-right:5px;">
                    <tr style="background-color:black;">
                        <th style="padding:5px">Customer name</th>
                        <th style="padding:5px">Email</th>
                        <th style="padding:5px">Phone</th>
                        <th style="padding:5px">Doctor Name</th>
                        <th style="padding:5px">Date</th>
                        <th style="padding:5px">Message</th>
                        <th style="padding:5px">Status</th>
                        <th style="padding:5px">Approved</th>
                        <th style="padding:5px">Cancelled</th>
                        <th style="padding:5px">Send Mail</th>


                    </tr>
                    @foreach($data as $appoint)
                    <tr  style="background-color:white;">
                        <td style="color:black;">{{$appoint->name}}</td>
                        <td style="color:black;">{{$appoint->email}}</td>
                        <td style="color:black;">{{$appoint->phone}}</td>
                        <td style="color:black;">{{$appoint->doctor}}</td>
                        <td style="color:black;">{{$appoint->date}}</td>
                        <td style="color:black;">{{$appoint->message}}</td>
                        <td style="color:black;">{{$appoint->status}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('cancelled',$appoint->id)}}">Cancelled</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a>
                        </td>

</tr>
@endforeach
</table>
</div>
          
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
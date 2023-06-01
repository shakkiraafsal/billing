@section("title","SGOU|CIEP")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
        <a href="{{route('admin.user-ac')}}" style="color:white" ><i class="bi bi-plus-circle-fill"></i> Map Academic Counsellor </a> 
       </div>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
     
          <div class="card" style="padding-top:10px;">

            <div class="card-body">
            
   <div class="card-title">ACADEMIC COUNSELLOR LIST</div>
   
     <div class="table-responsive">
     

       <div class="table-responsive">
        <table id="example" class="table datatable" style="width:100%">
                <thead>
                    <tr>
                    <th>Sl.no</th>
                    <th>Name</th>
                    <th>LSC Name</th>
                    <th>Course</th>
                    <th>Status</th>
                    <th>Action</th>  
                    </tr>
                </thead>
                 <tbody>
                            @foreach($user as $user)
                           <tr>
                           
                            <td>{{$loop->iteration}}</td>  
                           <td>{{$user->fetchUserDetails->user_name}}</td>
                         
                            <td>{{$user->fetchLscDetails->lsc_name}}</td>
                            <td>{{$user->user_ac_course}}</td>
                            <td> @if($user->user_ac_status == 1)
                        <span class="badge bg-success">ACTIVE </span>
                      @else
                        <span class="badge bg-danger">INACTIVE </span>
                        @endif</td>

                            <td><a href="{{route('admin.removeAcademiccounsellor',[$user['id']])}}" onclick="return confirm('Are you sure you want to delete');" class="btn btn-danger" id="action_btn-del"><i class='bi bi-trash-fill'></i></a>
                            </td>
                            
                           
                        
                          </tr>
                            @endforeach
                            </tbody>
              </table>
              </div>
              <!-- End Table with stripped rows -->
     

              </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
      <script type="text/javascript">
        function myFunction() {
  var input = document.getElementById("Search");
  var filter = input.value.toLowerCase();
  var nodes = document.getElementsByClassName('accordion-item');

  for (i = 0; i < nodes.length; i++) 
  {
    if (nodes[i].innerText.toLowerCase().includes(filter))
     {
      nodes[i].style.display = "block";
       

    }
     else 
     {
      nodes[i].style.display = "none";

    }
  }
}
      </script>

       <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
    </script>
    </section>
    @endsection
  
@section("title","SGOU|CIEP")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
        <a href="{{route('admin.user-creation')}}" style="color:white" ><i class="bi bi-plus-circle-fill"></i> Create User</a> 
       </div>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
     
          <div class="card" style="padding-top:10px;">

            <div class="card-body">
            
   <div class="card-title">USERS LIST</div>
     <div class="table-responsive">
     

      
        <table id="example" class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        
                          <th>Sl No.</th>
                          <th>Email</th>
                          <th width="10px">Username </th>
                          <th>User Mobile </th>
                          <th>Role</th>
                          <th>Action</th>
                        
                        </tr>
                </thead>
              
                 <tbody>
                   @foreach($user as $user)
                           <tr>
                             
                              <td>{{$loop->iteration}}</td>  
                             
                              <td>{{$user->email}}</td>
                              <td>{{$user->user_name}}</td>
                              <td>{{$user->user_mobile}}</td>
                              <td>

                                @if($user->role == 2)
                                
                                 <span class="badge bg-success">CE</span>


                                 @elseif($user->role == 3)
                                 <span class="badge bg-warning">CEO</span>

                                 @elseif($user->role == 4)
                                 <span class="badge bg-secondary">LSC Co-ordinator</span>
                                  @elseif($user->role == 5)
                                 <span class="badge bg-secondary">Academic Counsellor</span>
                                  @elseif($user->role == 6)
                                 <span class="badge bg-secondary">RCD</span>
                                  @elseif($user->role == 7)
                                 <span class="badge bg-secondary">Question Paper Setter</span>
                                @endif
                              </td>
                             
                             <td> 
                                @if($user->email_verified == 1)
                                <a href="{{route('admin.userstatuschange',[$user['id'],'0'])}}" onclick="return confirm('Are you sure you want to make inactive');" class="btn btn-outline-success" style="" id="">Disable </a>
                              
                               @else
                               <a href="{{route('admin.userstatuschange',[$user['id'],'1'])}}" onclick="return confirm('Are you sure you want to make active');" class="btn btn-outline-danger" id="">Enable</a>
                             
                            @endif
                                  <a href="{{route('admin.userremove',[$user['id']])}}" onclick="return confirm('Are you sure you want to delete');" class="btn btn-danger" id="action_btn-del"><i class='bi bi-trash-fill'></i></a>
                     
                       
                                
                              </td>
                            
                           
                          
                          </tr>
                         @endforeach
                            </tbody>
                             
              </table>
          
              <!-- End Table with stripped rows -->
     

              </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
  

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
  
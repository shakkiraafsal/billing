
@section("title","SGOU|CIEP")
@extends("adminlayouts.theme")
@section("maincontent")

  
        <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
        <a href="{{route('admin.qps-list')}}" style="color:white" ><i class="bi bi-plus-circle-fill"></i> QP Setter List  </a> 
       </div>
    </div><!-- End Page Title --><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">QP Setter-Mapping</h5>

   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             
                 <form class="row g-3" method="post" action="{{route('admin.storeqpdetails')}}" autocomplete="off">
                       @csrf

                        <div class="col-6">
                        <label for="exampleInputName1" class="form-label">USER : </label>
                         <select class="form-control" name="user_qp" required>
                         <option value="">-Select-</option>
                          @foreach($user as $user)
                          <option value="{{$user->id}}">{{$user->user_name}}</option>
                     @endforeach

                        </select>
                          @error("user_qp")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("user_qp")}}
                                 
                            </div>
                             @enderror
                      </div>

          <div class="col-6">
                        <label for="exampleInputName1" class="form-label">ADDRESS : </label>
                        <input type="text" name="address" class="form-control" required>
                        
                          @error("address")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("address")}}
                                 
                            </div>
                             @enderror
                      </div>

        
        <div class="col-12">
 
    <div class="table-responsive">
         
         <h3 class="card-title"></h3> 

        
     
    <TABLE id="dataTable" class="table table-bordered">
      
                        
    <TR>
      <TD><INPUT type="checkbox" name="chk"/></TD>
     
      
     
      <TD>
      <center><strong>Course</strong></center>

 <select class="form-control" name="user_qp_course[]" required>
                          <option value="">-Select-</option>
                         @foreach($course as $course)
                       <option value="{{$course->id}}">{{$course->cou_name}}</option>
                         @endforeach 
              </select>
   </TD>

   <TD>
      <center><strong>Category</strong></center>

 <select class="form-control" name="pgm_category[]" required>
                          <option value="">-Select-</option>
                       
                       <option value="UG">UG</option>
                       <option value="PG">PG</option>
                        
              </select>
   </TD>
    
   
 <TD>
        <center><strong>Allignment</strong></center>
        <select class="form-control" name="qp_alignment[]" required>

                  
                      <option value="">-Select-</option>
                      <option value="0">R-L</option>
                      <option value="1">L-R</option>
                     
                     
                           
                 </select>
        @error("qp_alignment")
                           
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("qp_alignment")}}</span>
                            @enderror
   </TD>
    
  <td> 
     <center><strong>Action</strong></center>
    <button class="btn btn-outline-success" type="button" onclick="addRow('dataTable')" ><i class="bi bi-plus-circle"></i></button>
      <button class="btn btn-outline-danger" type="button" onclick="deleteRow('dataTable')" ><i class="bi bi-trash-fill"></i></button> </td>
    
     
      

      

    </TR>
  </TABLE>
    </div>
</div>






                       <div class="text-left">
                  <button type="submit" class="btn btn-primary">SAVE</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                    
              </form><!-- Vertical Form -->

            </div>
          </div>
          

        </div>
      </div>






       <script type="text/javascript">
          function addRow(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      var colCount = table.rows[0].cells.length;

      for(var i=0; i<colCount; i++) {

        var newcell = row.insertCell(i);

        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
        //alert(newcell.childNodes);
        switch(newcell.childNodes[0].type) {
          case "text":
              newcell.childNodes[0].value = "";
              break;
          case "checkbox":
              newcell.childNodes[0].checked = false;
              break;
          case "select-one":
              newcell.childNodes[0].selectedIndex = 0;
              break;
        }
      }
    }

     function deleteRow(tableID) {
      try {
      var table = document.getElementById(tableID);
      var rowCount = table.rows.length;

      for(var i=0; i<rowCount; i++) {
        var row = table.rows[i];
        var chkbox = row.cells[0].childNodes[0];
        if(null != chkbox && true == chkbox.checked) {
          if(rowCount <= 1)
           {
            alert("Cannot delete all the rows.");
            break;
          }
          table.deleteRow(i);
          rowCount--;
          i--;
        }


      }
      }catch(e) {
        alert(e);
      }
    }


      </script>
    </section>
 
    @endsection





@section("title","SGOU|CIEP")
@extends("adminlayouts.theme")
@section("maincontent")

  
        <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
        <a href="{{route('admin.rcdirector-list')}}" style="color:white" ><i class="bi bi-plus-circle-fill"></i> RC Director List  </a> 
       </div>
    </div><!-- End Page Title --><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">RC Director-Mapping</h5>

   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             
                 <form class="row g-3" method="post" action="{{route('admin.storercdetails')}}" autocomplete="off">
                       @csrf

                        <div class="col-6">
                        <label for="exampleInputName1" class="form-label">USER : </label>
                         <select class="form-control" name="user_rcd">
                         <option value="">-Select-</option>
                          @foreach($user as $user)
                          <option value="{{$user->id}}">{{$user->user_name}}</option>
                     @endforeach

                        </select>
                          @error("user_rcd")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("user_rcd")}}
                                 
                            </div>
                             @enderror
                      </div>


                      <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Regional Centre Name :</label>
                         <select class="form-control" name="user_rcname">
                         <option value="">--Select --</option>
                     
                            @foreach($rc as $rc)
                          <option value="{{$rc->id}}">{{$rc->rc_name}}</option>
                     @endforeach

                    
                        </select>
                          @error("user_rcname")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("user_rcname")}}
                                 
                            </div>
                             @enderror
                      </div>



     
            <div class="col-md-6">
  <label for="inputName5" class="form-label">LSC : </label>
    <div class="table-responsive">
         
    
    <TABLE id="dataTable" class="table" style="width: 100%;">
      
                        
    <TR>
      <TD><INPUT type="checkbox" name="chk"/></TD>
     
      
       <TD> <select class="form-control" name="user_rc_lsc[]" required>
                         <option value="">-Select-</option>
                         @foreach($lsc as $lsc)
                       
                         <option value="{{$lsc->id}}">{{$lsc->lsc_name}}</option>
                         @endforeach 

                        </select>
       
   </TD>
    
    
    
      
     
       <TD>
        
   
      <button class="btn btn-outline-success" type="button" onclick="addRow('dataTable')" ><i class="bi bi-plus-circle"></i></button>
           <button class="btn btn-outline-danger" type="button" onclick="deleteRow('dataTable')" ><i class="bi bi-trash-fill"></i></button> 
      </TD>

      

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




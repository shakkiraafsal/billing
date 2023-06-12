@section("title","EnteBill")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:aliceblue;color: black;text-transform: uppercase;">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal" >
                CREATE PARTY
              </button>
                 @if(session()->has('message'))
              <div class="alert-box" id="hideDiv">{{ session()->get('message') }}</div>
                   @endif
       </div>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
     
          <div class="card" style="padding-top:10px;">

            <div class="card-body">
           

            
   <div class="card-title">PARTY LIST</div>
     <div class="table-responsive">
     

      
        <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        
                        <th>Sl No.</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Gst</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Email</th>
                         
                        
                        </tr>
                </thead>
              
                 <tbody>
                   @foreach($party as $party)
                           <tr> 
                            <td>{{$loop->iteration}}</td>  
                            <td>{{$party->pname}}</td>
                            <td>{{$party->pcode}}</td>
                            <td>{{$party->pgst}}</td>
                            <td>{{$party->pmobile}}</td>
                            <td>{{$party->padress}}</td>
                            <td>{{$party->pemail}}</td>
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
<div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                     <h5 class="card-title">CREATE PARTY</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                <form class="row g-3" method="post" action="{{route('admin.post-party')}}" autocomplete="off">
                       @csrf


                      
                          <div class="col-12">
                        <label for="exampleInputName1" class="form-label">Part Name</label>
                       <input type="text" name="pname" class="form-control" value="{{old('pname')}}" required>
                          @error("pname")
                            <div class="badge bg-danger">
                               {{$errors->first("pname")}}
                                 
                            </div>
                             @enderror
                           </div>

                                <div class="col-12">
                        <label for="exampleInputName1" class="form-label">Paty Code</label>
                       <input type="text" name="pcode" class="form-control" value="{{old('pcode')}}">
                          @error("pcode")
                            <div class="badge bg-danger">
                               {{$errors->first("pcode")}}
                                 
                            </div>
                             @enderror
                           </div>
                 
                        <div class="col-12">
                        <label for="exampleInputName1" class="form-label">GST</label>
                       <input type="text" name="pgst" class="form-control" value="{{old('pgst')}}" required>
                          @error("pgst")
                            <div class="badge bg-danger">
                               {{$errors->first("pgst")}}
                                 
                            </div>
                             @enderror
                           </div>
                 
                        <div class="col-12">
                        <label for="exampleInputName1" class="form-label">Mobile</label>
                       <input type="number" name="pmobile" class="form-control" value="{{old('pmobile')}}" required>
                          @error("pmobile")
                            <div class="badge bg-danger">
                               {{$errors->first("pmobile")}}
                                 
                            </div>
                             @enderror
                           </div>

                        <div class="col-12">
                        <label for="exampleInputName1" class="form-label">Address</label>
                       <input type="text" name="padress" class="form-control" value="{{old('padress')}}">
                          @error("padress")
                            <div class="badge bg-danger">
                               {{$errors->first("padress")}}
                                 
                            </div>
                             @enderror
                           </div>

                            <div class="col-12">
                        <label for="exampleInputName1" class="form-label">Email</label>
                       <input type="email" name="pemail" class="form-control" value="{{old('pemail')}}">
                          @error("pemail")
                            <div class="badge bg-danger">
                               {{$errors->first("pemail")}}
                                 
                            </div>
                             @enderror
                           </div>
                 
                 
                 


                       <div class="text-left">
                  <button type="submit" class="btn btn-primary">SAVE</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                    
              </form><!-- Vertical Form -->
                    </div>
                  
                  </div>
                </div>
              </div><!-- End Basic Modal-->

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
    <script type="text/javascript">
        $(function() {
setTimeout(function() { $("#hideDiv").fadeOut(1500); }, 5000)

})
    </script>
    </section>
    @endsection
  
@section("title","EnteBill")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:transparent;color: black;text-transform: uppercase;">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal" >
                CREATE CATEGORY
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
           

            
   <div class="card-title">CATEGORY LIST</div>
     <div class="table-responsive">
     

      
        <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        
                          <th>Sl No.</th>
                          <th>Category</th>
                         
                        
                        </tr>
                </thead>
              
                 <tbody>
                   @foreach($category as $category)
                           <tr>
                             
                              <td>{{$loop->iteration}}</td>  
                             
                              <td>{{$category->cname}}</td>
                            
                            
                            
                           
                          
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
                     <h5 class="card-title">CTEGORY CREATION</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                <form class="row g-3" method="post" action="{{route('admin.post-category')}}" autocomplete="off">
                       @csrf


                      
                          <div class="col-12">
                        <label for="exampleInputName1" class="form-label">Category</label>
                       <input type="cname" name="cname" class="form-control" value="{{old('cname')}}" required>
                          @error("cname")
                            <div class="badge bg-danger">
                               {{$errors->first("cname")}}
                                 
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
  
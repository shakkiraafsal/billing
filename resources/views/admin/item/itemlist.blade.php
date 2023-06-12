@section("title","EnteBill")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:transparent;color: black;text-transform: uppercase;">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fullscreenModal">
               CREATE ITEM
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
           

            
   <div class="card-title">ITEM LIST</div>
     <div class="table-responsive">
     

      
        <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        
                          <th>Sl No.</th>
                          <th>Name</th>
                          <th>Category</th>
                           <th>Code</th>
                          <th>Alert Qty</th>
                          <th>SP</th>
                          <th>PR</th>
                          <th>MRP</th>
                          <th>EXP Date</th>
                         
                        
                        </tr>
                </thead>
              
                 <tbody>
                   @foreach($item as $item)
                           <tr>
                             
                            <td>{{$loop->iteration}}</td>    
                            <td>{{$item->itemname}}</td>
                            <td>{{$item->itemcode}}</td>
                            <td>{{$item->itemcategory}}</td>  
                            <td>{{$item->itemalertqty}}</td>
                            <td>{{$item->itemsp}}</td>
                            <td>{{$item->itempp}}</td>
                            <td>{{$item->itemmrp}}</td>
                            <td>{{$item->itemexpdate}}</td>
                            
                            
                            
                            
                           
                          
                          </tr>
                         @endforeach
                            </tbody>
                             
              </table>
          
              <!-- End Table with stripped rows -->
     

              </div>
              <!-- End Table with stripped rows -->


              <div class="modal fade" id="fullscreenModal" tabindex="-1">
                <div class="modal-dialog modal-fullscreen">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">CREATE YOUR ITEM</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <form class="row g-3" method="post" action="{{route('admin.post-item')}}" autocomplete="off">
                       @csrf


                      
                          <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Item Name</label>
                       <input type="text" name="itemname" class="form-control" value="{{old('itemname')}}" required>
                          @error("hsncode")
                            <div class="badge bg-danger">
                               {{$errors->first("itemname")}}
                                 
                            </div>
                             @enderror
                           </div>

                                <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Item Code</label>
                       <input type="text" name="itemcode" class="form-control" value="{{old('itemcode')}}" required>
                          @error("itemcode")
                            <div class="badge bg-danger">
                               {{$errors->first("itemcode")}}
                                 
                            </div>
                             @enderror
                           </div>
                 
                      

                           <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Item Category</label>
                      <select class="form-control" required  name="itemcategory" >
                          <option value="">---SELECT CATEGORY---</option>
                           @foreach($category as $category)
                            <option value="{{$category->id}}">{{$category->cname}}</option>
                            @endforeach

                      </select>
                          @error("itemcategory")
                            <div class="badge bg-danger">
                               {{$errors->first("itemcategory")}}
                                 
                            </div>
                             @enderror
                           </div>

                             <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Item HSN</label>
                      <select class="form-control" required name="itemhsn">
                          <option value="">---SELECT HSN---</option>
                           @foreach($hsn as $hsn)
                            <option value="{{$hsn->id}}" >{{$hsn->hsncode}}</option>
                            @endforeach

                      </select>
                          @error("itemhsn")
                            <div class="badge bg-danger">
                               {{$errors->first("itemhsn")}}
                                 
                            </div>
                             @enderror
                           </div>

                               
                 
                        <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Alert Quantity</label>
                       <input type="number" name="itemalertqty" class="form-control" value="{{old('itemalertqty')}}" required>
                          @error("itemalertqty")
                            <div class="badge bg-danger">
                               {{$errors->first("itemalertqty")}}
                                 
                            </div>
                             @enderror
                           </div>

                      <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Selling Price</label>
                       <input type="text" name="itemsp" class="form-control" value="{{old('itemsp')}}" required>
                          @error("itemsp")
                            <div class="badge bg-danger">
                               {{$errors->first("itemsp")}}
                                 
                            </div>
                             @enderror
                           </div>


                        <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Purchase Rate</label>
                       <input type="text" name="itempp" class="form-control" value="{{old('itempp')}}" required>
                          @error("itempp")
                            <div class="badge bg-danger">
                               {{$errors->first("itempp")}}
                                 
                            </div>
                             @enderror
                           </div>



                        <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Mrp</label>
                       <input type="text" name="itemmrp" class="form-control" value="{{old('itemmrp')}}" required>
                          @error("itemmrp")
                            <div class="badge bg-danger">
                               {{$errors->first("itemmrp")}}
                                 
                            </div>
                             @enderror
                           </div>

                        <div class="col-6">
                        <label for="exampleInputName1" class="form-label">MF Date</label>
                       <input type="date" name="itemfdate" class="form-control" value="{{old('itemfdate')}}">
                          @error("itemfdate")
                            <div class="badge bg-danger">
                               {{$errors->first("itemfdate")}}
                                 
                            </div>
                             @enderror
                           </div>
                            <div class="col-6">
                           <label for="exampleInputName1" class="form-label">EXP Date</label>
                       <input type="date" name="itemexpdate" class="form-control" value="{{old('itemexpdate')}}">
                          @error("itemexpdate")
                            <div class="badge bg-danger">
                               {{$errors->first("itemexpdate")}}
                                 
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
              </div><!-- End Full Screen Modal-->


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
    <script type="text/javascript">
        $(function() {
setTimeout(function() { $("#hideDiv").fadeOut(1500); }, 5000)

})
    </script>
    </section>
    @endsection
  
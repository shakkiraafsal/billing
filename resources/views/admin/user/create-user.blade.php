
@section("title","SGOU|CIEP")
@extends("adminlayouts.theme")
@section("maincontent")

  
        <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
        <a href="{{route('admin.userslist')}}" style="color:white" ><i class="bi bi-plus-circle-fill"></i> USER LIST </a> 
       </div>
    </div><!-- End Page Title --><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">USER CREATION</h5>

   
   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

              <!-- Vertical Form -->
             
                 <form class="row g-3" method="post" action="{{route('admin.storeuserdetails')}}" autocomplete="off">
                       @csrf

                      
                          <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Email</label>
                       <input type="email" name="email" class="form-control" value="{{old('email')}}">
                          @error("email")
                            <div class="badge bg-danger">
                               {{$errors->first("email")}}
                                 
                            </div>
                             @enderror
                           </div>
                       <div class="col-6">
                        <label for="exampleInputName1" class="form-label">Password</label>
                       <input type="password" name="password" class="form-control">
                          @error("password")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("password")}}
                                 
                            </div>
                             @enderror
                      </div>
                             <div class="col-4">
                        <label for="exampleInputName1" class="form-label">User Name</label>
                       <input type="text" name="user_name" class="form-control" value="{{old('user_name')}}">
                          @error("user_name")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("user_name")}}
                                 
                            </div>
                             @enderror
                      </div>
              
                         <div class="col-4">
                        <label for="exampleInputName1" class="form-label">User Mobile</label>
                       <input type="tel" onkeypress="return onlyNumberKey(event)"   maxlength="10"  name="user_mobile" class="form-control" value="{{old('user_mobile')}}">

                          @error("user_mobile")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("user_mobile")}}
                                 
                            </div>
                             @enderror
                      </div>
                    <div class="col-4">
                        <label for="exampleInputName1" class="form-label">Role:</label>
                         <select class="form-control" name="role">
                          <option value="">Select Role</option>
                     
                       <option value="2">CE</option>
                       <option value="3">CEO</option>

                      <option value="4">LSC Co-ordinator</option>

                      <option value="5">Academic Counsellor</option>

                      <option value="6">RC Director</option>
                       <option value="7">Question Paper Setter</option>
                        <option value="8">Scrutiny</option>



                  

              
                        </select>
                          @error("role")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("role")}}
                                 
                            </div>
                             @enderror
                      </div>




                       <div class="text-left">
                  <button type="submit" class="btn btn-primary">SAVE</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                    
              </form><!-- Vertical Form -->

            </div>
          </div>

          
  <script>
    function onlyNumberKey(evt) {
      
      // Only ASCII character in that range allowed
      var ASCIICode = (evt.which) ? evt.which : evt.keyCode
      if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
      return true;
    }
  </script>











          

        </div>
      </div>
    </section>
 
    @endsection




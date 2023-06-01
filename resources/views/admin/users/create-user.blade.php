
@section("title","SGOU|CREATE-USER")
@extends("adminlayouts.theme")
@section("maincontent")

    <div class="pagetitle">
  
     <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
      <a href="{{route('admin.user-list')}}" class="btn  btn-primary"><i class="bi bi-caret-left-fill"></i> USER LIST</a> 
     </div>          
      
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">CREATE USER</h5>

   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             
                       <form class="row g-3" method="POST" action="{{ route('admin.userreg') }}" autocomplete="off">
                                     @csrf
                      
                                     <div class="col-md-4">
                                         <label for="inputName5" class="form-label">Full Name</label>
                                         <input id="" type="text" class="form-control" name="user_name"
                                             value="{{ old('user_name') }}" autocomplete>

                                         @error('user_name')
                                             <span class="badge bg-danger"><i
                                                     class="bi bi-exclamation-octagon me-1"></i>{{ $errors->first('user_name') }}</span>
                                         @enderror
                                     </div>
                                       <div class="col-md-4">
                                         <label for="inputName5" class="form-label">Role</label>
                                       <select class="form-control" name="role">
                                           <option value="">Select Role</option>
                                           <option value="2">Section Authority</option>
                                            <option value="3">Section Assistant</option>
                                            <option value="4">Viewer</option>
                                       </select>
                            
                                         @error('role')
                                             <span class="badge bg-danger"><i
                                                     class="bi bi-exclamation-octagon me-1"></i>{{ $errors->first('role') }}</span>
                                         @enderror
                                     </div>
                                     <div class="col-md-4">
                                         <label for="inputName5" class="form-label">Email</label>

                                         <input id="" type="email" class="form-control" name="email"
                                             value="{{ old('email') }}" autocomplete="name">

                                         @error('email')
                                             <span class="badge bg-danger"><i
                                                     class="bi bi-exclamation-octagon me-1"></i>{{ $errors->first('email') }}</span>
                                         @enderror
                                     </div>

                                    


                                     <div class="col-md-4">
                                         <label for="inputCity" class="form-label">Password</label>
                                          <div class="input-group has-validation">
                                          <span class="input-group-text" id="inputGroupPrepend"  onclick="showPassword()"><i class="bi bi-eye-fill"></i></span>
                                         <input id="password" type="password" class="form-control" name="password">
                                      </div>
                                         @error('password')
                                             <span class="badge bg-danger"><i
                                                     class="bi bi-exclamation-octagon me-1"></i>{{ $errors->first('password') }}</span>
                                         @enderror
                                     </div>

                                     <div class="col-md-4">
                                         <label for="inputCity" class="form-label">Confirm Password</label>
                                         <input id="cpassword" type="password" class="form-control" name="cpassword">

                                         @error('cpassword')
                                             <span class="badge bg-danger"><i
                                                     class="bi bi-exclamation-octagon me-1"></i>{{ $errors->first('cpassword') }}</span>
                                         @enderror
                                     </div>

                                     <div class="text-center">
                                         <button type="submit" class="btn btn-primary">Submit</button>
                                         <button type="reset" class="btn btn-secondary">Reset</button>
                                     </div>
                                   
                                 </form><!-- End Multi Columns Form -->

            </div>
          </div>

          

          

        </div>
      </div>
              <script>
function showPassword() {

  var y = document.getElementById("password").value;
  
  if(y=="")
  {
    alert('Please enter a password to show')
  }
  else
  {
  var x = document.getElementById("password");
  if (x.type === "password") 
  {
    x.type = "text";
  } 
  else
   {
    x.type = "password";
  }
  }
}
</script>
    </section>
 
    @endsection

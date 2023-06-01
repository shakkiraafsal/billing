
@section("title","SGOU|CIEP")
@extends("adminlayouts.theme")
@section("maincontent")

  
        <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
        <a href="{{route('admin.academiccounsellor-list')}}" style="color:white" ><i class="bi bi-plus-circle-fill"></i> Academic Counsellor List  </a> 
       </div>
    </div><!-- End Page Title --><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">Academic Counsellor - Mapping </h5>

    @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             
                 <form class="row g-3" method="post" action="{{route('admin.storeacdetails')}}" autocomplete="off">  
                       @csrf

                        <div class="col-6">
                        <label for="exampleInputName1" class="form-label">USER : </label>
                         <select class="form-control" name="user_ac">
                         <option value="">-Select-</option>
                          @foreach($user as $user)
                          <option value="{{$user->id}}">{{$user->user_name}}</option>
                          @endforeach
                  

              
                        </select>
                          @error("user_ac")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("user_ac")}}
                                 
                            </div>
                             @enderror
                      </div>
                      <div class="col-6">
                        <label for="exampleInputName1" class="form-label">LSC: </label>
                         <select class="form-control" name="user_ac_lsc">
                          
                        
                          <option value="">-Select-</option>
                         @foreach($lsc as $lsc)
                       
                         <option value="{{$lsc->id}}">{{$lsc->lsc_name}}</option>
                         @endforeach 
                  

              
                        </select>
                          @error("user_ac_lsc")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("user_ac_lsc")}}
                                 
                            </div>
                             @enderror
                      </div>

       
   


                                  
                    <div class="col-6">
                        <label for="exampleInputName1" class="form-label">COURSE :</label>



                       <select class="form-control" name="user_ac_course">
                          
                        
                          <option value="">-Select-</option>
                         @foreach($course as $course)
                       <option value="{{$course->id}}">{{$course->cou_name}}</option>
                         @endforeach 
              </select>



                          @error("user_ac_course")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("user_ac_course")}}
                                 
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
          

        </div>
      </div>
    </section>
 
    @endsection




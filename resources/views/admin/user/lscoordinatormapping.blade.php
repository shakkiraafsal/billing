
@section("title","SGOU|CIEP")
@extends("adminlayouts.theme")
@section("maincontent")

  
        <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
        <a href="{{route('admin.lsccoordinatorlist')}}" style="color:white" ><i class="bi bi-plus-circle-fill"></i> LSC Co-ordinatorList  </a> 
       </div>
    </div><!-- End Page Title --><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title">LSC CO-ORDINATOR  MAPPING </h5>

   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <!-- Vertical Form -->
             
                 <form class="row g-3" method="post" action="{{route('admin.storelscdetails')}}" autocomplete="off">
                       @csrf

                        <div class="col-4">
                        <label for="exampleInputName1" class="form-label">User : </label>

                         <select class="form-control" name="user_lsc_coordinator" >
                         <option value="">-Select-</option>
                          @foreach($user as $user)
                          <option value="{{$user->id}}">{{$user->user_name}}</option>
                     @endforeach
                      
                        </select>
                          @error("user_lsc_coordinator")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("user_lsc_coordinator")}}
                                 
                            </div>
                             @enderror
                      </div>

                      <div class="col-md-4">
              <label for="inputName5" class="form-label">Learner Support Centres : </label>
                   
                  
                         <select class="form-control" name="user_lsc">
                         <option value="">-Select-</option>
                         @foreach($lsc as $lsc)
                       
                         <option value="{{$lsc->id}}">{{$lsc->lsc_name}}</option>
                         @endforeach 
                   </select>

                                 @error("user_lsc")
                         
                                <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>{{$errors->first("user_lsc")}}</span>
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




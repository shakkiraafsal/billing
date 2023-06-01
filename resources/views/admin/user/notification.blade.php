
@section("title","SGOU|CIEP")
@extends("adminlayouts.theme")
@section("maincontent")

  
        <div class="pagetitle">
      <div class="alert alert-primary" style="background-color:#1E2F97;color: white;text-transform: uppercase;">
        <a href="" class="btn  btn-primary" ><i class="bi bi-plus-circle-fill"></i> NOTIFICATION LIST</a> 
       </div>
    </div><!-- End Page Title --><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
      <h5 class="card-title"> NOTIFICATION</h5>

   
   @if(session()->has('message'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                 {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

              <!-- Vertical Form -->
             
                 <form class="row g-3" method="post" action="{{route('admin.storenotification')}}" autocomplete="off">
                       @csrf

                      
                          <div class="col-4">
                        <label for="exampleInputName1" class="form-label">Title</label>
                       <input type="text" name="notification_title" class="form-control">
                          @error("notification_title")
                            <div class="badge bg-danger">
                               {{$errors->first("notification_title")}}
                                 
                            </div>
                             @enderror
                           </div>
                 
                             <div class="col-8">
                        <label for="exampleInputName1" class="form-label">Message</label>
                       <input type="text" name="notification_message" class="form-control">
                          @error("notification_message")
                            <div class="badge bg-danger">
                               
                                 {{$errors->first("notification_message")}}
                                 
                            </div>
                             @enderror
                      </div>
              
                      <div class="text-left">
                  <button type="submit" class="btn btn-primary">Send</button>
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




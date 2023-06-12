 @section("title","EnteBill")
@extends("adminlayouts.theme")
  @section("maincontent")
 <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a  href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Admin Dashboard</li>
        </ol>
      </nav>
      <div class="pagetitle">

      <div class="alert alert-primary" style="background-color:#1E2F97 ;color: white;">You are logged in as {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->  email }}}   
                      
         <a href="" style="color: white;"> </a> </div>
    </div><!-- End Page Title -->
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

      <div>


 
      </div> 


          

          

        </div>

       
       

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->




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
    </section>
    @endsection
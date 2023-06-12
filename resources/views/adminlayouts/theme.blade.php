<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield("title")</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('backend/assets/img/icon.ico')}}" rel="icon">
  <link href="{{asset('backend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  
 <link href="{{asset('backend/assets/css/datatable/jquery.dataTables.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/assets/css/datatable/buttons.dataTables.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('backend/assets/css/styledashboard.css')}}" rel="stylesheet">
  <script src="{{asset('backend/assets/js/function.js')}}"></script>
  <script src="{{asset('backend/assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/selectize.min.js')}}"></script>
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="{{asset('backend/assets/js/datatable/jquery-3.5.1.js')}}"></script>
  <script src="{{asset('backend/assets/js/datatable/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/datatable/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/datatable/jszip.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/datatable/pdfmake.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/datatable/vfs_fonts.js')}}"></script>
  <script src="{{asset('backend/assets/js/datatable/buttons.html5.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/datatable/buttons.print.min.js')}}"></script>

 <script>
      $(document).ready(function() {
          $('body').bind('cut copy', function(e) {
              e.preventDefault();
            });
        });
    </script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

   <div class="d-flex align-items-center justify-content-between">
      <!-- <a href="" class="logo d-flex align-items-center" style="color: white;">
        <img src="{{asset('backend/assets/img/header.png')}}" alt="" id="responsive">
        
      </a> -->
      <h3>EnteBill</h3>
     <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
   
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
 
    


        <li class="nav-item dropdown pe-3">
@if (Auth::check())
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            
         <span class="d-none d-md-block dropdown-toggle ps-2"><i class="bi bi-person-circle"> </i>

 {{ Auth::user()->email ?? ""}}

@endif</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>@if (Auth::check())

 {{ Auth::user()->name ?? ""}}

@endif</h6>
             
           
            </li>

           
            

       

           
               <li class="nav-item d-none d-sm-inline-block">
        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                              <i class="bi bi-box-arrow-right"></i> 
                               <span class="menu-title"> {{ __('Logout') }}</span>
              
         
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.category-list')}}">
          <i class="bi bi-list"></i>
          <span>Category</span>
        </a>
      </li>
 <li class="nav-item">
        <a class="nav-link " href="{{route('admin.hsn-list')}}">
        <i class="bi bi-upc"></i>
          <span>HSN Code</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.category-list')}}">
         <i class="bi bi-grip-vertical"></i>
          <span>Unit</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.item-list')}}">
        <i class="bi bi-cart"></i>
          <span>Items</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.party-list')}}">
        <i class="bi bi-people"></i>
          <span>Party</span>
        </a>
      </li>

<li class="nav-item">
        <a class="nav-link" data-bs-target="#tables-centre" data-bs-toggle="collapse" href="#">
         <i class="bi bi-bank"></i><span>Centres</span>
        </a>
     <ul  id="tables-centre" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>RC List</span>
            </a>
          </li>
            <li>
            <a href="">
              <i class="bi bi-circle"></i><span>LSC List</span>
            </a>
          </li>
       
       
        </ul>   
      </li><!-- End Dashboard Nav -->

    





   
      

     


   











         <!-- End Tables Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
 

     @yield("maincontent")

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Szept Tech</span></strong>. All Rights Reserved|   Designed by <a href="https://szepttech.com" target="_blank">Szept Tech</a>
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
   
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
    <script src="{{asset('backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/quill/quill.min.js')}}"></script>

  <script src="{{asset('backend/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('backend/assets/js/main.js')}}"></script>

</body>

</html>

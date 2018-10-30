<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="{{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Department of Computing and Information Systems</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          
          </a>
        
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          
          </a>
        
       
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          
            
            
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Final Exam Results</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Year:</h6>
            <a class="dropdown-item" href="first.html">First Year</a>
            <a class="dropdown-item" href="second.html">Second Year</a>
            <a class="dropdown-item" href="third.html">Third Year</a>
            <a class="dropdown-item" href="fourth.html">Fourth Year</a>
            <div class="dropdown-divider"></div>
           
            
          </div>
        </li>
        
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Assignment Results</span></a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Year:</h6>
            <a class="dropdown-item" href="first.html">First Year</a>
            <a class="dropdown-item" href="second.html">Second Year</a>
            <a class="dropdown-item" href="third.html">Third Year</a>
            <a class="dropdown-item" href="fourth.html">Fourth Year</a>
            <div class="dropdown-divider"></div>
       </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Medical Details</span></a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Year:</h6>
            <a class="dropdown-item" href="first.html">First Year</a>
            <a class="dropdown-item" href="second.html">Second Year</a>
            <a class="dropdown-item" href="third.html">Third Year</a>
            <a class="dropdown-item" href="fourth.html">Fourth Year</a>
            <div class="dropdown-divider"></div>
       </div>
        </li>
      </ul>

      <div id="content-wrapper">

       
        </div>
        <!-- /.container-fluid -->
        
        <div class="container">
        <div class="row justify-content-center">
        <div class="card card-login mx-auto mt-5">
            <div class="card">
                

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">

                    
                        <form action=" " method="post" enctype="multipart/form-data">
                        <label>Select immage to upload</label>
                        <input type="file" name="file" id="file">
                        <input type="submit" value="upload" name="submit">
                        @csrf
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('current password') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('current password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('current password') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                        </div>

                        @csrf

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control{{ $errors->has('new password') ? ' is-invalid' : '' }}" name="year" value="{{ old('year') }}" required autofocus>

        @if ($errors->has('new password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('new password') }}</strong>
            </span>
        @endif
    </div>
</div>

 @csrf

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Conform Password') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="student reg. no." value="{{ old('student reg. no.') }}" required autofocus>

        @if ($errors->has('conform password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('student reg. no.') }}</strong>
            </span>
            <a class="btn btn-primary btn-block" href="index.html">Login</a>
        @endif
       
    </div>
    <a class="btn btn-primary btn-block" href="index.html">Save Changes</a>
</div>

                        </div>
                        </form>
                        </div>
                        </div>
                      
          
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
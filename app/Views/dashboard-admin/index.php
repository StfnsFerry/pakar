<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Sneakers Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
  

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet" />
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="<?= base_url('/admin')?>"
        >
          <!-- <div class="sidebar-brand-icon">
            S
          </div> -->
          <div class="sidebar-brand-text mx-3">Sneakers Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url('/admin')?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Manage</div>

        <!-- Nav Item - Product -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/admin/toko')?>">
            <i class="fas fa-solid fa-store"></i>
            <span>Toko</span></a
          >
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/admin/transaksi')?>">
            <i class="fas fa-dollar-sign"></i>
            <span>Transaksi</span></a
          >
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/admin/pengembalian')?>">
            <i class="fas fa-arrow-left"></i>
            <span>Pengembalian</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-dark bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form
              class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
            >
              <div class="input-group">
                <input
                  type="text"
                  class="form-control bg-light border-0 small"
                  placeholder="Search for..."
                  aria-label="Search"
                  aria-describedby="basic-addon2"
                />
                <div class="input-group-append">
                  <button class="btn btn-dark" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="searchDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown"
                >
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control bg-light border-0 small"
                        placeholder="Search for..."
                        aria-label="Search"
                        aria-describedby="basic-addon2"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-dark" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>
              
              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    ><?= user()->username;?></span
                  >
                  <img
                    class="img-profile rounded-circle"
                    src="<?= base_url();?>assets/img/<?= user()->user_image;?>"
                  />
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
              <a
                href="#"
                class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"
                ><i class="fas fa-download fa-sm text-white-50"></i> Generate
                Report</a
              >
            </div>

            <!-- Content Row -->
            <div class="row">
               <!-- Earnings (Monthly) Card Example -->
               <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-dark shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      <div
                          class="text-xs font-weight-bold text-dark text-uppercase mb-1"
                        >
                          Total Toko
                        </div>
                       <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                         
                      </div>
                      <div class="col-auto">
                        <i
                          class="fas fa-solid fa-store fa-2x text-gray-300"
                        ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Earnings (Monthly) Card Example -->
              

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-success text-uppercase mb-1"
                        >
                          Total Transaksi
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                          
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

             

              <!-- Pending Requests Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-warning text-uppercase mb-1"
                        >
                          Total Konsumen
                        </div>
                       <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                          
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-solid fa-users fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-info text-uppercase mb-1"
                        >
                          Pengajuan Pengembalian
                        </div>
                       
                           <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                         
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-solid fa-box fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 

            <!-- Content Row -->
            <div class="row">   
              <div class="col-lg-6 mb-4">
                <div class="card shadow mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">Detail Toko</h6>
                        <div class="dropdown no-arrow">
                          <a
                            class="dropdown-toggle"
                            href="#"
                            role="button"
                            id="dropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i
                              class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"
                            ></i>
                          </a>
                          <div
                            class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink"
                          >
                            <div class="dropdown-header">Pilih:</div>
                            <a class="dropdown-item" href="<?= base_url('/admin/toko')?>">Lihat Selengkapnya</a>
                          </div>
                        </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table
                            class="table table-bordered"
                            id="dataTable"
                            width="100%"
                            cellspacing="0"
                          >
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID Toko</th>
                                    <th>Nama Toko</th>            
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>1.</td>
                                  <td>1</td>
                                  <td>Nike</td>                                                                                                                                      
                                </tr>
                                <tr>
                                  <td>2.</td>
                                  <td>2</td>
                                  <td>Adidas</td>                                                                                                                                      
                                </tr>
                                <tr>
                                  <td>3.</td>
                                  <td>3</td>
                                  <td>Puma</td>                                                                                                                                      
                                </tr>                                                                                   
                            </tbody>
                        </table>
                      </div>
                    </div>  
                </div>
              </div>

              <div class="col-lg-6 mb-4">
                <div class="card shadow mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">Detail Transaksi</h6>
                        <div class="dropdown no-arrow">
                          <a
                            class="dropdown-toggle"
                            href="#"
                            role="button"
                            id="dropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i
                              class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"
                            ></i>
                          </a>
                          <div
                            class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink"
                          >
                            <div class="dropdown-header">Pilih:</div>
                            <a class="dropdown-item" href="<?= base_url('/admin/transaksi')?>">Lihat Selengkapnya</a>
                          </div>
                        </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table
                            class="table table-bordered"
                            id="dataTable"
                            width="100%"
                            cellspacing="0"
                          >
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID Transaksi</th>
                                    <th>Nama Barang</th>            
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>1.</td>
                                  <td>1</td>
                                  <td>Nike Air Force 1 Triple White</td>                                                                                                                                       
                                </tr>
                                <tr>
                                  <td>2.</td>
                                  <td>2</td>
                                  <td>Adidas Super 100</td>                                                                                                                                      
                                </tr>
                                <tr>
                                  <td>3.</td>
                                  <td>3</td>
                                  <td>Puma Pumi Pume Pumo Pumu</td>                                                                                                                                      
                                </tr>                                                                                   
                            </tbody>
                        </table>
                      </div>
                    </div>  
                </div>
              </div>
            </div>

            <div class="row">               
              <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">Detail Pengembalian</h6>
                        <div class="dropdown no-arrow">
                          <a
                            class="dropdown-toggle"
                            href="#"
                            role="button"
                            id="dropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i
                              class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"
                            ></i>
                          </a>
                          <div
                            class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink"
                          >
                            <div class="dropdown-header">Pilih:</div>
                            <a class="dropdown-item" href="<?= base_url('/admin/pengembalian')?>">Lihat Selengkapnya</a>
                          </div>
                        </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table
                            class="table table-bordered"
                            id="dataTable"
                            width="100%"
                            cellspacing="0"
                          >
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID Pengembalian</th>
                                    <th>ID Transaksi</th>            
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>1.</td>
                                  <td>1</td>
                                  <td>1</td>                                                                                                                                       
                                </tr>                                                                               
                            </tbody>
                        </table>
                      </div>
                    </div>  
                </div>
              </div>
            </div>

    
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Sneakers e-Commerce 2023</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <a class="btn btn-dark" href="<?= base_url('logout')?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('assets/js/sb-admin-2.min.js')?>"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url('assets/vendor/chart.js/Chart.min.js')?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url('assets/js/demo/chart-area-demo.js')?>"></script>
    <script src="<?=base_url('assets/js/demo/chart-pie-demo.js')?>"></script>
  </body>
</html>

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

    <title>Sneakers Seller - Product</title>

    <!-- Custom fonts for this template-->
  
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="<?= base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet" />

    <link
      href="<?=base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css')?>"
      rel="stylesheet"
    />

    
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
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
          href="<?= base_url('/penjual')?>"
        >
          <!-- <div class="sidebar-brand-icon">
            S
          </div> -->
          <div class="sidebar-brand-text mx-3">Sneakers Seller</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/penjual')?>">
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
          <a class="nav-link" href="<?= base_url('/penjual/pesanan')?>">
          <i class="fas fa-solid fa-store"></i>
            <span>Pesanan</span></a
          >
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url('/penjual/produk')?>">
          <i class="fas fa-solid fa-box"></i>
            <span>Produk</span></a
          >
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/penjual/transaksi')?>">
            <i class="fas fa-dollar-sign"></i>
            <span>Transaksi</span></a
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
                    src="<?= base_url('assets/img/default.svg')?>"
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
              <h1 class="h3 mb-0 text-gray-800">Data Produk</h1>
              <a
                href="#"
                class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"
                ><i class="fas fa-download fa-sm text-white-50"></i> Generate
                Report</a
              >
            </div>
            <!-- Content Row -->
            <div class="row">
             
            <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">Detail Produk</h6>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#tambahProduk">
                    + Tambah Produk
                    </button>
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
                                <th>Foto</th>
                                <th>Nama Produk</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Aksi</th>   
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1;
                            foreach($produk as $produk){
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><img src="<?= $produk['foto']?>" width="50"></td>
                                <td><?= $produk['nama_produk']?></td>
                                <td><?= substr($produk['deskripsi'],0,60)?>...</td>  
                                <td>Rp <?= number_format($produk['harga'],0,',','.');?></td>     
                                <td><?= $produk['stok']?></td>   
                                <td>
                                    <div class="wrap d-flex justify-content-center align-items-center">
                                        <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editProduk<?= $produk['id']?>">
                                        Edit
                                        </button>
                                        <form action="<?= base_url('penjual/' . $produk['id']) ?>" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <?= csrf_field() ?>
                                            <button class="btn btn-danger">
                                                <i class="fas fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form> 
        
                                    </div>
                                </td>                                                                                                                    
                            </tr>

                            <!-- Modal edit produk -->
                            <div class="modal fade" id="editProduk<?=$produk['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Produk</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?=base_url('/penjual/' . $produk['id'])?>" method="POST" enctype="multipart/form-data">
                                                <?= csrf_field() ?>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_produk" value="<?=$produk['nama_produk']?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"><?=$produk['deskripsi']?></textarea>
                                                </div>
                                                <label class="form-label">Harga</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">Rp</span>
                                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="harga" value="<?=$produk['harga']?>">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="stok" class="form-label">Stok</label>
                                                    <input type="number" class="form-control" id="stok" name="stok" value="<?=$produk['stok']?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Foto</label> <br>
                                                    <img src="<?=$produk['foto']?>" width="100" class="mb-3">
                                                    <input class="form-control" type="file" id="formFile" name="foto">
                                                </div>
                                                <input type="hidden" name="_method" value="PUT">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Tambah Produk</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>                                                                                                               
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
            <a class="btn btn-dark" href="<?=base_url('logout')?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal tambah data-->
    <div class="modal fade" id="tambahProduk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?=base_url('/penjual/create')?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_produk">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                        </div>
                        <label class="form-label">Harga</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="harga">
                            <span class="input-group-text">.00</span>
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="stok" name="stok">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto</label>
                            <input class="form-control" type="file" id="formFile" name="foto">
                        </div>
                        <input type="hidden" name="id_toko" value="<?=$user_id;?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Produk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script src="<?=base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('assets/js/sb-admin-2.min.js')?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js')?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/js/demo/datatables-demo.js')?>"></script>    
  </body>
</html>

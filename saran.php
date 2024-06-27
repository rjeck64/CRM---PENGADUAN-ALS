<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Skydas</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="admin/vendors/feather/feather.css">
        <link rel="stylesheet" href="admin/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
        
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="admin/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="admin/js/select.dataTables.min.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="admin/css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="admin/images/favicon.png" />
        <link rel="stylesheet" href="css/style.css">
      </head>
<body>
    <div class="main">
    </div>
        <div class="container-xl">
            <nav >
                <p>ALS</p>
                <ul class="d-flex align-items-center">
                    <li>TENTANG ALS</li>
                    <li>LIHAT LAPORAN</li>
                </ul>
            </nav>
          <div class="content">
                <h1>Layanan Saran Penumpang ALS </h1>
                <h2>Sampaikan laporan Anda langsung kepada pihak ALS</h2>
            </div>
            <div class="form col-12 stretch-card">
                <div class="card p-5">
                  <div class="card-body">
                    <h4 class="card-title">Sampaikan Saran Anda</h4>
                    <form class="forms-sample" method="POST" action="saran_input.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul Saran Anda *" name="judul_saran">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3" name="isi_saran" placeholder="Isi Saran Anda *"></textarea>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectGender">Kategori Saran *</label>
                                  <select class="form-control" id="exampleSelectGender" name="kategori_saran">
                                    <option value="Pelayanan">Pelayanan</option>
                                    <option value="Infrastruktur">Infrastruktur</option>
                                    <option value="Kebersihan">Kebersihan</option>
                                    <option value="Fasilitas">Fasilitas</option>
                                    <option value="Keamanan">Keamanan</option>
                                    <option value="Kualitas Produk">Kualitas Produk</option>
                                    <option value="Proses Administrasi">Proses Administrasi</option>
                                    <option value="Layanan Online">Layanan Online</option>
                                    <option value="Kepuasan Pelanggan">Kepuasan Pelanggan</option>
                                    <option value="Lainnya">Lainnya..</option>
                                  </select>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectGender">Tanggal Pengajuan *</label>
                                <input type="date" class="form-control" id="exampleInputName1" placeholder="Tujuan *" readonly>
                              </div>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectGender">Upload Lampiran</label>
                                <input type="file" class="form-control" id="exampleInputName1" placeholder="Asal *" name="lampiran">
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectGender">Dilihat Sebagai</label>
                                  <select class="form-control" id="exampleSelectGender" name="anonim_rahasia"> 
                                    <option value="1">Anonim</option>
                                    <option value="0">Rahasia</option>
                                  </select>
                                </div>
                        </div>
                      </div>
                      <div class="d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a class="btn btn-light" href="index.php">Back</a>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
            </div>
</body>
</html>
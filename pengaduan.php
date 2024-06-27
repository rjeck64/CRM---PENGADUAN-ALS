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
                <h1>Layanan Pengaduan Penumpang ALS </h1>
                <h2>Sampaikan laporan Anda langsung kepada pihak ALS</h2>
            </div>
            <div class="form col-12 stretch-card">
                <div class="card p-5">
                  <div class="card-body">
                    <h4 class="card-title">Sampaikan Pengaduan Anda</h4>
                    <form class="forms-sample" method="POST" action="pengaduan_input.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <input type="text" class="form-control" name="judul_laporan" id="exampleInputName1" placeholder="Judul pengaduan Anda *">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control form-control-lg" name="isi_laporan" id="exampleFormControlTextarea1" rows="3" placeholder="Isi pengaduan Anda *"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Tanggal Kejadian</label>
                        <input type="date" class="form-control" name="tanggal_kejadian" id="exampleInputName1">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputName1" name="plat_kendaraan" placeholder="Plat Kendaraan">
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputName1" name="asal" placeholder="Asal *">
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputName1" name="tujuan" placeholder="Tujuan *">
                              </div>
                        </div>
                      </div>
                      <div class="form-group mb-4">
                        <label for="exampleSelectGender">Jam Keberangkatan</label>
                        <input type="time" class="form-control" id="exampleInputName1" name="jam_keberangkatan">
                      </div>
                      <div class="form-group mb-4">
                        <label for="exampleSelectGender">Tanggal Keberangkatan</label>
                        <input type="date" class="form-control" id="exampleInputName1" name="tanggal_keberangkatan">
                      </div>
                      <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lampiran">Upload Lampiran</label>
                                <input type="file" class="form-control-file" id="lampiran" name="lampiran">
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
                        <button type="submit" class="btn btn-primary mr-2">Adukan!</button>
                        <a class="btn btn-light" href="index.php">Back</a>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
          </div>
</body>
</html>
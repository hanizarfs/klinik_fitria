<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <title>Tambah Obat</title> 
    <!-- load bootstrap css file --> 
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"> 
  </head> 
  <body> 
    <h3>Tambah Obat</h3>
 
    <div class="container"> 
    <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="<?php echo base_url('obat/insert') ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="judul" class="form-label">ID Obat</label>
                                    <input type="text" name="id" class="form-control" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="penulis" class="form-label">Harga</label>
                                    <input type="text" name="harga" class="form-control" id="email">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

    </div>
 
    </div> 
    <!-- load bootstrap js file --> 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script> 
  </body> 
</html> 
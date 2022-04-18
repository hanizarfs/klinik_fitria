<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <title>Tambah Tindakan</title> 
  </head> 
  <body>
  <?php
    $this->load->view('layout/navbar');
  ?>   
    <div class="container">
    <h3>Tambah Tindakan</h3>
    <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="<?php echo base_url('tindakan/insert') ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="judul" class="form-label">ID Tindakan</label>
                                    <input type="text" name="id_tindakan" class="form-control" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Nama Tindakan</label>
                                    <input type="text" name="nama_tindakan" class="form-control" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="penulis" class="form-label">Biaya</label>
                                    <input type="text" name="biaya" class="form-control" id="email">
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
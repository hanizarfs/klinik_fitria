<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <title>Edit Obat</title> 
  </head> 
  <body>  
  <?php
    $this->load->view('layout/navbar');
  ?> 
 <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Pengguna</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="<?php echo base_url('obat/update/' . $data_obat['id_obat']) ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="'id_obat'" class="form-label">ID Obat</label>
                                    <input type="text" name="id_obat" class="form-control" id="nama" value="<?php echo $data_obat['id_obat'] ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="'nama_obat'" class="form-label">Nama Obat</label>
                                    <input type="text" name="nama_obat" class="form-control" id="nama" value="<?php echo $data_obat['nama_obat'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" name="harga" class="form-control" id="email" value="<?php echo $data_obat['harga'] ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

    <!-- load bootstrap js file --> 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script> 
  </body> 
</html> 

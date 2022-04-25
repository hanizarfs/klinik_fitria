<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <title>Edit Tindakan</title> 
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
                            <form action="<?php echo base_url('tindakan/update/' . $detail['id_tindakan']) ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nama_tindakan" class="form-label">Nama Tindakan</label>
                                    <input type="text" name="nama_tindakan" class="form-control" id="nama_tindakan" value="<?php echo $detail['nama_tindakan'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="biaya" class="form-label">Biaya</label>
                                    <input type="text" name="biaya" class="form-control" id="biaya" value="<?php echo $detail['biaya'] ?>">
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
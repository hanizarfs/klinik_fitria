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
                                    <label class="form-label" for="id_rawat">ID Rawat</label>
                                    <input class="form-control" type="text" name="id_rawat"><br>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="tgl_rawat">Tanggal Rawat</label>
                                    <input class="form-control" type="date" name="tgl_rawat"><br>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="total_tindakan">Total Tindakan</label>
                                    <input class="form-control" type="number" name="total_tindakan"><br>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="total_obat">Total Obat</label>
                                    <input class="form-control" type="text" name="total_obat"><br>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="total_harga">Total Harga</label>
                                    <input class="form-control" type="text" name="total_harga"><br>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="uang_muka">Uang Muka</label>
                                    <input class="form-control" type="text" name="uang_muka"><br>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="kurang">Kurang</label>
                                    <input class="form-control" type="text" name="kurang"><br>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="id_pasien">ID Pasien</label>
                                    <input class="form-control" type="number" name="id_pasien"><br>
                                </div>
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
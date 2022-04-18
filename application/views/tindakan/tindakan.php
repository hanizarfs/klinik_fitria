<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <title>Tindakan</title> 
  </head> 
  <body> 
  <?php
    $this->load->view('layout/navbar');
  ?> 


    <div class="container"> 
        <h1><center>Daftar Tindakan</center></h1> 
      <table class="table table-striped">
      <a href="tindakan/add" class="btn btn-success">Tambah Data</a> 
      
      <form action="<?php base_url('tindakan/search')?>" method="POST" class="my-4">
        <div class="input-group">
          <input type="text" name="keyword" placeholder="search">
          <button class="btn btn-primary px-4" type="submit">Search</button>
        </div>
      </form>
        <tr>
            <th>ID Tindakan</th>
            <th>Nama Tindakan</th>
            <th>Biaya</th>
            <th>Aksi</th>

        </tr>
        <?php foreach ($data as $item) {?>
            <tr>
                <td><?php echo $item['id_tindakan'];?></td>
                <td><?php echo $item['nama_tindakan'];?></td>
                <td><?php echo $item['biaya'];?></td>
                <td>
                  <a href="tindakan/edit/<?php echo $item['id_tindakan']; ?>" class="btn btn-warning">Edit</a>
                  <a href="tindakan/delete/<?php echo $item['id_tindakan']; ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php } ?>
      </table> 
 
    </div> 
    <!-- load bootstrap js file --> 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script> 
  </body> 
</html> 
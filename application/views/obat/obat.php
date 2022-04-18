<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <title>Obat</title> 
  </head> 
  <body> 

  <?php
    $this->load->view('layout/navbar');
  ?> 


    <div class="container"> 
        <h1><center>Daftar Obat</center></h1> 
      <table class="table table-striped">
      <a href="obat/add" class="btn btn-success">Tambah Data</a> 
      
      <form action="<?php base_url('obat/search')?>" method="POST" class="my-4">
        <div class="input-group">
          <input type="text" name="keyword" placeholder="search">
          <button class="btn btn-primary px-4" type="submit">Search</button>
        </div>
      </form>
        <tr>
            <th>ID Obat</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>

        </tr>
        <?php foreach ($data as $item) {?>
            <tr>
                <td><?php echo $item['id_obat'];?></td>
                <td><?php echo $item['nama_obat'];?></td>
                <td><?php echo $item['harga'];?></td>
                <td>
                  <a href="obat/edit/<?php echo $item['id_obat']; ?>" class="btn btn-warning">Edit</a>
                  <a href="obat/delete/<?php echo $item['id_obat']; ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php } ?>
      </table> 
 
    </div> 
    <!-- load bootstrap js file --> 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script> 
  </body> 
</html> 
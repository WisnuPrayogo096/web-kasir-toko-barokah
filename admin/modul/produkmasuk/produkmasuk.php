<?php include 'comp/header.php'; ?>
 <?php 

  date_default_timezone_set("Asia/Jakarta");
  $tanggalSekarang = date("d-m-Y");
  $jamSekarang = date("H:i:s");


  if (isset($_POST['simpan'])) {
  	
  	
  	produk_masuk();
  	echo '<script>window.history.back()</script>';

  
  }

  ?>
<div class="content-wrapper">
	
		<div class="container-fluid">
			  <div class="col-sm-12">
      <!-- Button trigger modal -->
 


       <div class="row">
        <div class="col-sm-12 mb-3">
          <div class="well">
            <form action="" method="POST" enctype="multipart/form-data">

  <div class="form-group">
    <label>No Invoice</label>
    <input type="text" class="form-control" id="exampleInputEmail1" autofocus="" name="noinv" aria-describedby="emailHelp">
  
  </div>
    <div class="form-group">
    <label>Tanggal</label>
    <input type="text" class="form-control" readonly="" id="exampleInputEmail1" name="tanggal" aria-describedby="emailHelp" value="<?= $tanggalSekarang;?>">

  </div>
      <div class="form-group">
    <label>Jam</label>
    <input type="text" name="jam" class="form-control" readonly="" value="<?= $jamSekarang;?>">

  </div>
    <div class="form-group">
    <label>Kode Produk</label>
    <input type="text" class="form-control" id="kdproduk" readonly="" name="kdproduk" aria-describedby="emailHelp"><span class="input-group-btn">
        <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal_produk">Cari Kode Produk</button>
        </span>
 
  </div>
    <div class="form-group">
    <label>Nama Produk</label>
    <input type="text" class="form-control" readonly="" id="nm_produk" name="nm_produk">
    </select>
  
  </div>
      <div class="form-group">
    <label>Kategori</label>
  <input type="text" class="form-control" readonly="" id="kategori" name="kategori">
 
  </div>
    <div class="form-group" style="display: none;">
    <label>Rak</label>
    <input type="text" class="form-control" readonly="" id="rak" name="rak">
  
  </div>
      <div class="form-group" style="display: none;">
    <label>Supplier</label>
    <input type="text" class="form-control" readonly="" id="supplier" name="supplier">
  
  </div>
      <div class="form-group">
    <label>Stok</label>
    <input type="text" class="form-control" readonly="" id="stok" name="stok">
  
  </div>
      <div class="form-group">
    <label>Jumlah Masuk</label>
    <input type="text" class="form-control" name="jml_masuk" id="jml_masuk">
  
  </div>
      <div class="form-group">
    <label>Admin</label>
    <input type="text" value="<?= $key['nama'];?>" readonly="" class="form-control" name="admin">
  
  </div>

  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="goBack()">Close</button>
        <button type="submit" name="simpan" class="btn btn-primary" id="saveButton" disabled>Save changes</button>
      </div>
        </form>
                        </div>
                       

          </div>
           
        </div>

      </div> 
			
			 <!--   -->
		
		<!--  -->

		 <!--  -->

         <div id="modal_produk" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form role="form" id="form-tambah" method="post" action="input.php">
        <div class="modal-header">
          
            <b><p class="modal-title" style="text-align: center; font-size: 25px; margin-left: 10px">Pilih Produk</p></b>
          <!-- <h3 class="modal-title">Pilih Produk EA</h3> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          
        </div>
          <div class="modal-body">
            
            
            
            
              <table width="100%" class="table table-hover"  id="example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Kategori</th>
                                        <!-- <th>Rak</th>
                                        <th>Supplier</th> -->
                                        <th>Stok</th>
                                        <!--<th>Jenis Kelamin</th>
                                        <th>Tempat</th>
                                        <th>Alamat</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                    <?php
                      $no = 1;
                      $data = mysqli_query ($koneksi, " SELECT  *
                                            from 
                                            tb_produk
                                            order by id ASC");
                      foreach ($data as $sa):
                        
                      
                    ?>
                  <tr id="tb_produk" data-kdproduk="<?= $sa['kdproduk'];?>" data-nm_produk="<?= $sa['nm_produk'];?>" data-kategori="<?= $sa['kategori'];?>" data-stok="<?= $sa['stok'];?>">
                    <td>
                      <?php echo $no++; ?>
                    </td>
                    <td>
                      <?php echo $sa['kdproduk']; ?>
                    </td>
                    <td>
                      <?php echo $sa['nm_produk']; ?>
                    </td>
                    <td>
                      <?php echo $sa['kategori']; ?>
                    </td>
                    <td>
                      <?php echo $sa['stok']; ?>
                    </td>
                    
                  </tr>
                  <?php
                    endforeach;
                  ?>
                            </table>
            
            
          </div>  
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          </div>
      </div>
    </div>
  </div>

        <!--  -->

		<!--  -->
	</section>
</div>
<script>
  function goBack() {
    window.history.back();
  };

  document.addEventListener("DOMContentLoaded", function() {
  // Menangani perubahan pada input "jml_masuk"
  const jmlMasukInput = document.getElementById("jml_masuk");
  const saveButton = document.getElementById("saveButton");

  jmlMasukInput.addEventListener("input", function() {
    // Memeriksa apakah input "jml_masuk" tidak kosong
    if (jmlMasukInput.value.trim() !== "") {
      // Mengaktifkan tombol "Save changes" jika input diisi
      saveButton.removeAttribute("disabled");
    } else {
      // Menonaktifkan tombol "Save changes" jika input kosong
      saveButton.setAttribute("disabled", "disabled");
    }
  });
});
</script>
<?php include 'comp/footer.php'; ?>
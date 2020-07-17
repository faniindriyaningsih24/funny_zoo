 <?php
  include('koneksi.php');
  if(isset($_POST['simpan']))
  {


    $fileName = $_FILES['foto_promo']['name'];
    // Simpan ke Database
    $a="INSERT INTO tbl_promo values ('".$_POST['kd_promo']."','".$_POST['judul_promo']."','".$_POST['isi_promo']."','$fileName','".$_POST['tgl_promo']."','".$_POST['kd_status']."')";
    $proses=mysqli_query($koneksi,$a);
    // Simpan di Folder Gambar
    move_uploaded_file($_FILES['foto_promo']['tmp_name'], "images/promo/".$_FILES['foto_promo']['name']);
    if($proses){
      echo '<script> alert("Berhasil Menyimpan Data");</script>';
    }
    else{
      echo '<script> alert("Gagal Menyimpan Data");</script>';
    } 

  }

if(isset($_POST['ubah']))
  {
    if (empty($_POST['kd_promo']) or empty($_POST['judul_promo']) or empty($_POST['isi_promo']) or empty($_POST['tgl_promo']) or empty($_POST['kd_status'])) {
      ?>
      <script> alert("Gagal Mengubah Data")</script>
      <?php
    }
    else{
      $query = 
      "
        update tbl_promo set 
        judul_promo = '{$_POST['judul_promo']}',
        isi_promo = '{$_POST['isi_promo']}',
        tgl_promo = '{$_POST['tgl_promo']}',
        kd_status = '{$_POST['kd_status']}'
        where kd_promo = '{$_POST['kd_promo']}'
      ";
    }
      if (!empty($_FILES['foto_promo']['name'])) {
        
        // timpah query baru dengan tambahan gambar
        $query = 
        "
          update tbl_promo set 
          judul_promo = '{$_POST['judul_promo']}',
          isi_promo = '{$_POST['isi_promo']}',
          foto_promo = '{$_FILES['foto_promo']['name']}',
          tgl_promo = '{$_POST['tgl_promo']}',
          kd_status = '{$_POST['kd_status']}'
          where kd_promo = '{$_POST['kd_promo']}'
        ";
        move_uploaded_file($_FILES['foto_promo']['tmp_name'], "images/promo/".$_FILES['foto_promo']['name']);
      }
      if (mysqli_query($koneksi, $query))
       {
        echo"<script>alert('Berhasil Mengubah Data !');</script>"; 
      }
}

 if(isset($_POST['hapus']))
  {
    if (empty($_POST['kd_promo']))
    {
      ?>
      <script> alert("Pilih Kode Terlebih Dahulu")</script>
      <?php
    }
    else{
    $a="DELETE FROM tbl_promo where kd_promo='".$_POST['kd_promo']."'";
    $proses=mysqli_query($koneksi,$a);
    if($proses){
      echo '<script> alert("Berhasil Menghapus Data");</script>';
    }
    else{
      echo '<script> alert("Gagal Menghapus Data");</script>';
    } 
      }
  }
  if(isset($_GET['kode'])) 
  {
    $c="select * from tbl_promo where kd_promo='".$_GET['kode']."'";
    $run2=mysqli_query($koneksi, $c);
    $data3=mysqli_fetch_object($run2);
  }

?>


          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Promo</h3>
            </div>
            <!-- /.box-header -->
 
          
            <div class="box-body" >
              <form role="form" action="" method="post" enctype="multipart/form-data">
                <!-- text input -->

              <div class="form-group">
                  <label>Kode promo</label>
                  <input class="form-control" type="text" name="kd_promo" placeholder="Kode Otomatis" value="<?php echo $data3->kd_promo; ?>"></input>
                </div>

                <div class="form-group">
                  <label>Judul promo</label>
                  <input class="form-control" type="text" name="judul_promo" placeholder="Judul promo" value="<?php echo $data3->judul_promo; ?>"></input>
                </div>

                <div class="form-group">
                  <label>Isi promo</label>
                  <textarea id="ckeditor" class="ckeditor" type="text" rows="3" name="isi_promo"><?php echo $data3->isi_promo; ?></textarea>
                </div>


                <div class="form-group">
                <div class="btn btn-default btn-file">
                  <label>Foto promo</label>
                  <input class="form-control" type="file" name="foto_promo" value="<?php echo $data3->foto_promo; ?>">
                  <img src="images/promo/<?php echo $data3->foto_promo; ?>" style="width:50px;height:50px;background-color:blue;"></img>
                </div>
                </div>


                <div class="form-group">
                  <label>Tanggal promo</label>
                   <input type="date" name="tgl_promo" class="form-control" value="<?php echo date('Y-m-d') ?>">
                </div>


                <div class="form-group">
                  <label>Status promo</label>
                  <select name="kd_status" class="form-control" >
                    <?php
                      if(isset($_GET['kode']))
                      {
                        $cc="select * from tbl_status where kd_status=".$data3->kd_status;
                        $dd=mysqli_query($koneksi, $cc);
                        while ($data=mysqli_fetch_object($dd))
                        {
                    ?>
                      <option value="<?php echo $data->kd_status ; ?>">  <?php echo $data->status ; ?></option>
                    <?php
                        }
                      }
                    ?>
                    <option value="">----------Pilih Status-----------</option>
                     <?php
                      $aa="select * from tbl_status";
                      $sbb=mysqli_query($koneksi,$aa);
                      while($opt=mysqli_fetch_object($sbb))  
                      {
                      ?>
                        <option value="<?php echo $opt->kd_status;?>"> <?php echo $opt->status;?></option>
                      <?php
                      }
                      ?>
                       
                    </select>
                </div>


              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-primary" href="index3.php?id=7">Refresh</a>
                <input type="submit" name="hapus" value="Delete" class="btn btn-primary pull-right">
                <input type="submit" name="ubah" value="Update" class="btn btn-primary pull-right">
                <input type="submit" name="simpan" value="Save" class="btn btn-primary pull-right">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Promo</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Kode promo</th>
                    <th>Judul promo</th>
                    <th>Isi promo</th>
                    <th>Foto promo</th>
                    <th>Tanggal promo</th>
                    <th>Status promo</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                      <?php
                        include('koneksi.php');
                        $sql="SELECT * FROM tbl_promo";
                        $run=mysqli_query($koneksi,$sql);
                        $no=1;
                        while($data=mysqli_fetch_object($run))
                        {
                      ?>
                      <tr>
                        <td><?php echo $data->kd_promo; ?></td>
                        <td><?php echo $data->judul_promo; ?></td>
                        <td><?php echo $data->isi_promo; ?></td>
                        <td><img width="100px" height="100px" src="images/promo/<?php echo $data->foto_promo; ?>"></td>
                        <td><?php echo $data->tgl_promo; ?></td>
                        <td>
                          <?php
                              $sql2="select * from tbl_status where kd_status ='".$data->kd_status ."'";
                              $query2=mysqli_query($koneksi,$sql2);
                              $data2=mysqli_fetch_object($query2);
                              echo $data2->status; 
                          ?>
                        </td>
                        <td>
                          <a class="btn btn-primary" href="index3.php?id=7&kode=<?php echo $data->kd_promo ?>">View</a>
                        </td>
                      </tr>
                      <?php
                      $no++; 
                      } 
                      ?>
                </tbody>
                </table>
               </div>
            </div>
        </div>
    </div>
</section>
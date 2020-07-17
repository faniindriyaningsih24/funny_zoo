 <?php
  include('koneksi.php');
  if(isset($_POST['simpan']))
  {


    $fileName = $_FILES['foto_ip']['name'];
    // Simpan ke Database
    $a="INSERT INTO tbl_ip values ('".$_POST['kd_ip']."','".$_POST['judul_ip']."','".$_POST['isi_ip']."','$fileName','".$_POST['tgl_ip']."','".$_POST['kd_status']."')";
    $proses=mysqli_query($koneksi,$a);
    // Simpan di Folder Gambar
    move_uploaded_file($_FILES['foto_ip']['tmp_name'], "images/ip/".$_FILES['foto_ip']['name']);
    if($proses){
      echo '<script> alert("Berhasil Menyimpan Data");</script>';
    }
    else{
      echo '<script> alert("Gagal Menyimpan Data");</script>';
    } 

  }

if(isset($_POST['ubah']))
  {
    if (empty($_POST['kd_ip']) or empty($_POST['judul_ip']) or empty($_POST['isi_ip']) or empty($_POST['tgl_ip']) or empty($_POST['kd_status'])) {
      ?>
      <script> alert("Gagal Mengubah Data")</script>
      <?php
    }
    else{
      $query = 
      "
        update tbl_ip set 
        judul_ip = '{$_POST['judul_ip']}',
        isi_ip = '{$_POST['isi_ip']}',
        tgl_ip = '{$_POST['tgl_ip']}',
        kd_status = '{$_POST['kd_status']}'
        where kd_ip = '{$_POST['kd_ip']}'
      ";
    }
      if (!empty($_FILES['foto_ip']['name'])) {
        
        // timpah query baru dengan tambahan gambar
        $query = 
        "
          update tbl_ip set 
          judul_ip = '{$_POST['judul_ip']}',
          isi_ip = '{$_POST['isi_ip']}',
          foto_ip = '{$_FILES['foto_ip']['name']}',
          tgl_ip = '{$_POST['tgl_ip']}',
          kd_status = '{$_POST['kd_status']}'
          where kd_ip = '{$_POST['kd_ip']}'
        ";
        move_uploaded_file($_FILES['foto_ip']['tmp_name'], "images/ip/".$_FILES['foto_ip']['name']);
      }
      if (mysqli_query($koneksi, $query))
       {
        echo"<script>alert('Berhasil Mengubah Data !');</script>"; 
      }
}

 if(isset($_POST['hapus']))
  {
    if (empty($_POST['kd_ip']))
    {
      ?>
      <script> alert("Pilih Kode Terlebih Dahulu")</script>
      <?php
    }
    else{
    $a="DELETE FROM tbl_ip where kd_ip='".$_POST['kd_ip']."'";
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
    $c="select * from tbl_ip where kd_ip='".$_GET['kode']."'";
    $run2=mysqli_query($koneksi, $c);
    $data3=mysqli_fetch_object($run2);
  }

?>


          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Info Pengunjung</h3>
            </div>
            <!-- /.box-header -->
 
          
            <div class="box-body" >
              <form role="form" action="" method="post" enctype="multipart/form-data">
                <!-- text input -->

              <div class="form-group">
                  <label>Kode Info Pengunjung</label>
                  <input class="form-control" type="text" name="kd_ip" placeholder="Kode Otomatis" value="<?php echo $data3->kd_ip; ?>"></input>
                </div>

                <div class="form-group">
                  <label>Judul Info Pengunjung</label>
                  <input class="form-control" type="text" name="judul_ip" placeholder="Judul ip" value="<?php echo $data3->judul_ip; ?>"></input>
                </div>

                <div class="form-group">
                  <label>Isi Info Pengunjung</label>
                  <textarea id="ckeditor" class="ckeditor" type="text" rows="3" name="isi_ip"><?php echo $data3->isi_ip; ?></textarea>
                </div>


                <div class="form-group">
                <div class="btn btn-default btn-file">
                  <label>Foto Info Pengunjung</label>
                  <input class="form-control" type="file" name="foto_ip" value="<?php echo $data3->foto_ip; ?>">
                  <img src="images/ip/<?php echo $data3->foto_ip; ?>" style="width:50px;height:50px;background-color:blue;"></img>
                </div>
                </div>


                <div class="form-group">
                  <label>Tanggal Info Pengunjung</label>
                   <input type="date" name="tgl_ip" class="form-control" value="<?php echo date('Y-m-d') ?>">
                </div>

                <div class="form-group">
                  <label>Status Info Pengunjung</label>
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
                <a class="btn btn-primary" href="index3.php?id=2">Refresh</a>
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
              <h3 class="box-title">Info Pengunjung</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Kode Info Pengunjung</th>
                    <th>Judul Info Pengunjung</th>
                    <th>Isi Info Pengunjung</th>
                    <th>Foto Info Pengunjung</th>
                    <th>Tanggal Info Pengunjung</th>
                    <th>Status Info Pengunjung</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                      <?php
                        include('koneksi.php');
                        $sql="SELECT * FROM tbl_ip";
                        $run=mysqli_query($koneksi,$sql);
                        $no=1;
                        while($data=mysqli_fetch_object($run))
                        {
                      ?>
                      <tr>
                        <td><?php echo $data->kd_ip; ?></td>
                        <td><?php echo $data->judul_ip; ?></td>
                        <td><?php echo $data->isi_ip; ?></td>
                        <td><img width="100px" height="100px" src="images/ip/<?php echo $data->foto_ip; ?>"></td>
                        <td><?php echo $data->tgl_ip; ?></td>
                        <td>
                          <?php
                              $sql2="select * from tbl_status where kd_status ='".$data->kd_status ."'";
                              $query2=mysqli_query($koneksi,$sql2);
                              $data2=mysqli_fetch_object($query2);
                              echo $data2->status; 
                          ?>
                        </td>
                        <td>
                          <a class="btn btn-primary" href="index3.php?id=2&kode=<?php echo $data->kd_ip ?>">View</a>
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
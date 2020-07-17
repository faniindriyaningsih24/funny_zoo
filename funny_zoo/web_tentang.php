 <?php
  include('koneksi.php');
  if(isset($_POST['simpan']))
  {


    $fileName = $_FILES['foto_tk']['name'];
    // Simpan ke Database
    $a="INSERT INTO tbl_tk values ('".$_POST['kd_tk']."','".$_POST['judul_tk']."','".$_POST['isi_tk']."','$fileName','".$_POST['tgl_tk']."','".$_POST['kd_status']."')";
    $proses=mysqli_query($koneksi,$a);
    // Simpan di Folder Gambar
    move_uploaded_file($_FILES['foto_tk']['tmp_name'], "images/tk/".$_FILES['foto_tk']['name']);
    if($proses){
      echo '<script> alert("Berhasil Menyimpan Data");</script>';
    }
    else{
      echo '<script> alert("Gagal Menyimpan Data");</script>';
    } 

  }

if(isset($_POST['ubah']))
  {
    if (empty($_POST['kd_tk']) or empty($_POST['judul_tk']) or empty($_POST['isi_tk']) or empty($_POST['tgl_tk']) or empty($_POST['kd_status'])) {
      ?>
      <script> alert("Gagal Mengubah Data")</script>
      <?php
    }
    else{
      $query = 
      "
        update tbl_tk set 
        judul_tk = '{$_POST['judul_tk']}',
        isi_tk = '{$_POST['isi_tk']}',
        tgl_tk = '{$_POST['tgl_tk']}',
        kd_status = '{$_POST['kd_status']}'
        where kd_tk = '{$_POST['kd_tk']}'
      ";
    }
      if (!empty($_FILES['foto_tk']['name'])) {
        
        // timpah query baru dengan tambahan gambar
        $query = 
        "
          update tbl_tk set 
          judul_tk = '{$_POST['judul_tk']}',
          isi_tk = '{$_POST['isi_tk']}',
          foto_tk = '{$_FILES['foto_tk']['name']}',
          tgl_tk = '{$_POST['tgl_tk']}',
          kd_status = '{$_POST['kd_status']}'
          where kd_tk = '{$_POST['kd_tk']}'
        ";
        move_uploaded_file($_FILES['foto_tk']['tmp_name'], "images/tk/".$_FILES['foto_tk']['name']);
      }
      if (mysqli_query($koneksi, $query))
       {
        echo"<script>alert('Berhasil Mengubah Data !');</script>"; 
      }
}

 if(isset($_POST['hapus']))
  {
    if (empty($_POST['kd_tk']))
    {
      ?>
      <script> alert("Pilih Kode Terlebih Dahulu")</script>
      <?php
    }
    else{
    $a="DELETE FROM tbl_tk where kd_tk='".$_POST['kd_tk']."'";
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
    $c="select * from tbl_tk where kd_tk='".$_GET['kode']."'";
    $run2=mysqli_query($koneksi, $c);
    $data3=mysqli_fetch_object($run2);
  }

?>


          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tentang Kami</h3>
            </div>
            <!-- /.box-header -->
 
          
            <div class="box-body" >
              <form role="form" action="" method="post" enctype="multipart/form-data">
                <!-- text input -->

              <div class="form-group">
                  <label>Kode Tentang Kami</label>
                  <input class="form-control" type="text" name="kd_tk" placeholder="Kode Otomatis" value="<?php echo $data3->kd_tk; ?>"></input>
                </div>

                <div class="form-group">
                  <label>Judul Tentang Kami</label>
                  <input class="form-control" type="text" name="judul_tk" placeholder="Judul tk" value="<?php echo $data3->judul_tk; ?>"></input>
                </div>

                <div class="form-group">
                  <label>Isi Tentang Kami</label>
                  <textarea id="ckeditor" class="ckeditor" type="text" rows="3" name="isi_tk"><?php echo $data3->isi_tk; ?></textarea>
                </div>


                <div class="form-group">
                <div class="btn btn-default btn-file">
                  <label>Foto Tentang Kami</label>
                  <input class="form-control" type="file" name="foto_tk" value="<?php echo $data3->foto_tk; ?>">
                  <img src="images/tk/<?php echo $data3->foto_tk; ?>" style="width:50px;height:50px;background-color:blue;"></img>
                </div>
                </div>


                <div class="form-group">
                  <label>Tanggal Tentang Kami</label>
                   <input type="date" name="tgl_tk" class="form-control" value="<?php echo date('Y-m-d') ?>">
                </div>


                <div class="form-group">
                  <label>Status Tentang Kami</label>
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
                <a class="btn btn-primary" href="index3.php?id=1">Refresh</a>
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
              <h3 class="box-title">Tentang Kami</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Kode Tentang Kami</th>
                    <th>Judul Tentang Kami</th>
                    <th>Isi Tentang Kami</th>
                    <th>Foto Tentang Kami</th>
                    <th>Tanggal Tentang Kami</th>
                    <th>Status Tentang Kami</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                      <?php
                        include('koneksi.php');
                        $sql="SELECT * FROM tbl_tk";
                        $run=mysqli_query($koneksi,$sql);
                        $no=1;
                        while($data=mysqli_fetch_object($run))
                        {
                      ?>
                      <tr>
                        <td><?php echo $data->kd_tk; ?></td>
                        <td><?php echo $data->judul_tk; ?></td>
                        <td><?php echo $data->isi_tk; ?></td>
                        <td><img width="100px" height="100px" src="images/tk/<?php echo $data->foto_tk; ?>"></td>
                        <td><?php echo $data->tgl_tk; ?></td>
                        <td>
                          <?php
                              $sql2="select * from tbl_status where kd_status ='".$data->kd_status ."'";
                              $query2=mysqli_query($koneksi,$sql2);
                              $data2=mysqli_fetch_object($query2);
                              echo $data2->status; 
                          ?>
                        </td>
                        <td>
                          <a class="btn btn-primary" href="index3.php?id=1&kode=<?php echo $data->kd_tk ?>">View</a>
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
 <?php
  include('koneksi.php');
  if(isset($_POST['simpan']))
  {


    $fileName = $_FILES['foto_berita']['name'];
    // Simpan ke Database
    $a="INSERT INTO tbl_berita values ('".$_POST['kd_berita']."','".$_POST['judul_berita']."','".$_POST['isi_berita']."','$fileName','".$_POST['tgl_berita']."','".$_POST['kd_status']."')";
    $proses=mysqli_query($koneksi,$a);
    // Simpan di Folder Gambar
    move_uploaded_file($_FILES['foto_berita']['tmp_name'], "images/berita/".$_FILES['foto_berita']['name']);
    if($proses){
      echo '<script> alert("Berhasil Menyimpan Data");</script>';
    }
    else{
      echo '<script> alert("Gagal Menyimpan Data");</script>';
    } 

  }

if(isset($_POST['ubah']))
  {
    if (empty($_POST['kd_berita']) or empty($_POST['judul_berita']) or empty($_POST['isi_berita']) or empty($_POST['tgl_berita']) or empty($_POST['kd_status'])) {
      ?>
      <script> alert("Gagal Mengubah Data")</script>
      <?php
    }
    else{
      $query = 
      "
        update tbl_berita set 
        judul_berita = '{$_POST['judul_berita']}',
        isi_berita = '{$_POST['isi_berita']}',
        tgl_berita = '{$_POST['tgl_berita']}',
        kd_status = '{$_POST['kd_status']}'
        where kd_berita = '{$_POST['kd_berita']}'
      ";
    }
      if (!empty($_FILES['foto_berita']['name'])) {
        
        // timpah query baru dengan tambahan gambar
        $query = 
        "
          update tbl_berita set 
          judul_berita = '{$_POST['judul_berita']}',
          isi_berita = '{$_POST['isi_berita']}',
          foto_berita = '{$_FILES['foto_berita']['name']}',
          tgl_berita = '{$_POST['tgl_berita']}',
          kd_status = '{$_POST['kd_status']}'
          where kd_berita = '{$_POST['kd_berita']}'
        ";
        move_uploaded_file($_FILES['foto_berita']['tmp_name'], "images/berita/".$_FILES['foto_berita']['name']);
      }
      if (mysqli_query($koneksi, $query))
       {
        echo"<script>alert('Berhasil Mengubah Data !');</script>"; 
      }
}

 if(isset($_POST['hapus']))
  {
    if (empty($_POST['kd_berita']))
    {
      ?>
      <script> alert("Pilih Kode Terlebih Dahulu")</script>
      <?php
    }
    else{
    $a="DELETE FROM tbl_berita where kd_berita='".$_POST['kd_berita']."'";
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
    $c="select * from tbl_berita where kd_berita='".$_GET['kode']."'";
    $run2=mysqli_query($koneksi, $c);
    $data3=mysqli_fetch_object($run2);
  }

?>


          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Berita & Acara</h3>
            </div>
            <!-- /.box-header -->
 
          
            <div class="box-body" >
              <form role="form" action="" method="post" enctype="multipart/form-data">
                <!-- text input -->

              <div class="form-group">
                  <label>Kode Berita & Acara</label>
                  <input class="form-control" type="text" name="kd_berita" placeholder="Kode Otomatis" value="<?php echo $data3->kd_berita; ?>"></input>
                </div>

                <div class="form-group">
                  <label>Judul Berita & Acara</label>
                  <input class="form-control" type="text" name="judul_berita" placeholder="Judul berita" value="<?php echo $data3->judul_berita; ?>"></input>
                </div>

                <div class="form-group">
                  <label>Isi Berita & Acara</label>
                  <textarea id="ckeditor" class="ckeditor" type="text" rows="3" name="isi_berita"><?php echo $data3->isi_berita; ?></textarea>
                </div>


                <div class="form-group">
                <div class="btn btn-default btn-file">
                  <label>Foto berita</label>
                  <input class="form-control" type="file" name="foto_berita" value="<?php echo $data3->foto_berita; ?>">
                  <img src="images/berita/<?php echo $data3->foto_berita; ?>" style="width:50px;height:50px;background-color:blue;"></img>
                </div>
                </div>


                <div class="form-group">
                  <label>Tanggal Berita & Acara</label>
                   <input type="date" name="tgl_berita" class="form-control" value="<?php echo date('Y-m-d') ?>">
                </div>


                <div class="form-group">
                  <label>Status Berita & Acara</label>
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
                <a class="btn btn-primary" href="index3.php?id=6">Refresh</a>
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
              <h3 class="box-title">List Berita & Acara</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Kode Berita & Acara</th>
                    <th>Judul Berita & Acara</th>
                    <th>Isi Berita & Acara</th>
                    <th>Foto Berita & Acara</th>
                    <th>Tanggal Berita & Acara</th>
                    <th>Status Berita & Acara</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                      <?php
                        include('koneksi.php');
                        $sql="SELECT * FROM tbl_berita";
                        $run=mysqli_query($koneksi,$sql);
                        $no=1;
                        while($data=mysqli_fetch_object($run))
                        {
                      ?>
                      <tr>
                        <td><?php echo $data->kd_berita; ?></td>
                        <td><?php echo $data->judul_berita; ?></td>
                        <td><?php echo $data->isi_berita; ?></td>
                        <td><img width="100px" height="100px" src="images/berita/<?php echo $data->foto_berita; ?>"></td>
                        <td><?php echo $data->tgl_berita; ?></td>
                        <td>
                          <?php
                              $sql2="select * from tbl_status where kd_status ='".$data->kd_status ."'";
                              $query2=mysqli_query($koneksi,$sql2);
                              $data2=mysqli_fetch_object($query2);
                              echo $data2->status; 
                          ?>
                        </td>
                        <td>
                          <a class="btn btn-primary" href="index3.php?id=6&kode=<?php echo $data->kd_berita ?>">View</a>
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
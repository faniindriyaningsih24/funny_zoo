 <?php
  include('koneksi.php');
  if(isset($_POST['simpan']))
  {
    $a="INSERT INTO tbl_status values ('".$_POST['kd_status']."','".$_POST['status']."')";
    $proses=mysqli_query($koneksi,$a);
    if($proses){
      echo '<script> alert("Berhasil Menyimpan Data");</script>';
    }
    else{
      echo '<script> alert("Gagal Menyimpan Data");</script>';
    }
  }

  if(isset($_POST['ubah']))
  {
     if (empty($_POST['kd_status']) or empty($_POST['status']))
    {
      ?>
      <script> alert("Gagal Mengubah Data")</script>
      <?php
    }
    else{
       $a="UPDATE tbl_status SET stat='".$_POST['status']."' where kd_status='".$_POST['kd_status']."'";
      mysqli_query($koneksi,$a);
    ?>
     <script> alert("Berhasil Mengubah Data")</script>
    <?php
    }
  }

 if(isset($_POST['hapus']))
  {

    $a="DELETE FROM tbl_status where kd_status='".$_POST['kd_status']."'";
     $proses=mysqli_query($koneksi,$a);
    if($proses){
      echo '<script> alert("Berhasil Menghapus Data");</script>';
    }
    else{
      echo '<script> alert("Gagal Menghapus Data");</script>';
    } 

  }

?>


 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><b>FORM STATUS</b></h3>
            </div>
            <!-- /.box-header -->
 
          
            <div class="box-body" >
              <form role="form" action="" method="post">
                <!-- text input -->

              <div class="form-group">
                  <label>Kode status</label>
                  <input class="form-control" type="text" name="kd_status"  placeholder="Kode Otomatis"></input>
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Status</label>
                  <input class="form-control" type="text" name="status"  placeholder="status"></input>
                </div>
                      


              <!-- /.box-body -->
              <div class="box-footer">
                
                <input type="submit" name="simpan" value="Save" class="btn btn-primary pull-right">
                <input type="submit" name="ubah" value="Update" class="btn btn-primary pull-right">
                  <input type="submit" name="hapus" value="Delete" class="btn btn-primary pull-right">
                
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>List Status</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Kode status</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                      <?php
                        include('koneksi.php');
                        $sql="SELECT * FROM tbl_status";
                        $run=mysqli_query($koneksi,$sql);
                        $no=1;
                        while($data=mysqli_fetch_object($run))
                        {
                      ?>
                      <tr>
                        <td><?php echo $data->kd_status; ?></td>
                        <td><?php echo $data->status; ?></td>  
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
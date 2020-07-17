 <?php
  include('koneksi.php');
  if(isset($_POST['simpan']))
  {


    $fileName = $_FILES['foto_user']['name'];
    // Simpan ke Database
    $a="INSERT INTO tbl_user values ('".$_POST['kd_user']."','".$_POST['nama']."','".$_POST['username']."','".$_POST['password']."','$fileName','".$_POST['kd_status']."')";
    $proses=mysqli_query($koneksi,$a);
    // Simpan di Folder Gambar
    move_uploaded_file($_FILES['foto_user']['tmp_name'], "images/user/".$_FILES['foto_user']['name']);
    echo"<script>alert('Berhasil Menyimpan Data !');</script>";

  }
 
 if(isset($_POST['ubah']))
  {
    if (empty($_POST['kd_user']) or empty($_POST['nama']) or empty($_POST['username']) or empty($_POST['password']) or empty($_POST['kd_status'])) {
      ?>
      <script> alert("Gagal Mengubah Data")</script>
      <?php
    }
    else{
      $query = 
      "
        update tbl_user set 
        nama = '{$_POST['nama']}',
        username = '{$_POST['username']}',
        password = '{$_POST['password']}',
        kd_status = '{$_POST['kd_status']}'
        where kd_user = '{$_POST['kd_user']}'
      ";
    }
      if (!empty($_FILES['foto_user']['name'])) {
        
        // timpah query baru dengan tambahan gambar
        $query = 
        "
          update tbl_user set 
          nama = '{$_POST['nama']}',
          username = '{$_POST['username']}',
          password = '{$_POST['password']}',
          foto_user = '{$_FILES['foto_user']['name']}',
          kd_status = '{$_POST['kd_status']}'
          where kd_user = '{$_POST['kd_user']}'
        ";
        move_uploaded_file($_FILES['foto_user']['tmp_name'], "images/user/".$_FILES['foto_user']['name']);
      }
      if (mysqli_query($koneksi, $query))
       {
        echo"<script>alert('Berhasil Mengubah Data !');</script>"; 
      }
}
  
 if(isset($_POST['hapus']))
  {
    if (empty($_POST['kd_user']))
    {
      ?>
      <script> alert("Pilih Kode Terlebih Dahulu")</script>
      <?php
    }
    else{
    $a="DELETE FROM tbl_user where kd_user='".$_POST['kd_user']."'";
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
    $c="select * from tbl_user where kd_user='".$_GET['kode']."'";
    $run2=mysqli_query($koneksi, $c);
    $data3=mysqli_fetch_object($run2);
  }

?>


          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">User</h3>
            </div>
            <!-- /.box-header -->
 
          
            <div class="box-body" >
              <form role="form" action="" method="post" enctype="multipart/form-data">
                <!-- text input -->

              <div class="form-group">
                  <label>Kode User</label>
                  <input class="form-control" type="text" name="kd_user"  placeholder="Kode Otomatis" value="<?php echo $data3->kd_user; ?>"></input>
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input class="form-control" type="text" name="nama"  placeholder="Nama Lengkap" value="<?php echo $data3->nama; ?>"></input>
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input class="form-control" type="text" name="username"  placeholder="Username" value="<?php echo $data3->username; ?>"></input>
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" type="text" name="password"  placeholder="Password" value="<?php echo $data3->password; ?>"></input>
                </div>


                <div class="form-group">
                <div class="btn btn-default btn-file">
                  <label>Foto User</label>
                  <input class="form-control" type="file" name="foto_user" value="<?php echo $data3->foto_user; ?>">
                  <img src="images/user/<?php echo $data3->foto_user; ?>" style="width:50px;height:50px;background-color:blue;"></img>
                </div>
                </div>

                <div class="box-body">
                  <label>Status</label>
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
                <a class="btn btn-primary" href="index3.php?id=8">Refresh</a>
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
              <h3 class="box-title">User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Kode User</th>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Foto User</th>
                    <th>Status User</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                      <?php
                        include('koneksi.php');
                        $sql="SELECT * FROM tbl_user";
                        $run=mysqli_query($koneksi,$sql);
                        $no=1;
                        while($data=mysqli_fetch_object($run))
                        {
                      ?>
                      <tr>
                        <td><?php echo $data->kd_user; ?></td>
                        <td><?php echo $data->nama; ?></td>
                        <td><?php echo $data->username; ?></td>
                        <td><?php echo $data->password; ?></td>
                        <td><img width="100px" height="100px" src="images/user/<?php echo $data->foto_user; ?>"></td>
                        <td>
                          <?php
                              $sql2="select * from tbl_status where kd_status ='".$data->kd_status ."'";
                              $query2=mysqli_query($koneksi,$sql2);
                              $data2=mysqli_fetch_object($query2);
                              echo $data2->status; 
                          ?>
                        </td>
                        <td>
                          <a class="btn btn-primary" href="index3.php?id=8&kode=<?php echo $data->kd_user ?>">View</a>
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
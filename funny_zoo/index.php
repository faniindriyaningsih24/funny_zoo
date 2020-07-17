<?php
  INI_SET("display_errors",0);
?>

<?php
  include('koneksi.php');
?>


<html>
  <head>
    <title>FunnyZoo_FZBogor</title>
    <link rel="stylesheet" type="text/css" href="template/temas.css">
    <link rel="shortcut icon" href="images/gambar/logo.png">
  </head>
  <body>
    <div id="container">
    
        <div class="content">
          <header>
            <img src="images/gambar/logo.png" width="200px" height="200px">
            <br><br><br><br><br><br>
            <div id='cssmenu'>
      <ul>
        <li class='active '><a href='index.php'><span><b>HOME</b></span></a></li>

        <li class='has-sub '><a href='#'><span><b>TENTANG KAMI</b></span></a>
          <ul>
              <li class='has-sub '><span>
                <?php
                  $sql1="select * from tbl_tk order by kd_tk desc";
                  $query1=mysqli_query($koneksi,$sql1);
                    while($data1=mysqli_fetch_object($query1))
          {
                ?>
                  <a href="index.php?id=1&konten=<?php echo $data1->kd_tk;  ?>">
                  <?php echo $data1->judul_tk; ?>
                  <br>
                  </a>
                <?php
                  }
                ?>
              </span></li>
          </ul>
        </li>

        <li class='has-sub '><a href='#'><span><b>INFO PENGUNJUNG</b></span></a>
          <ul>
            <li class='has-sub '><a href='#'><span>History</span></a></li>
          </ul>
        </li>

        <li><a href='#'><span><b>FLORA & FAUNA</b></span></a></li>

        <li class='has-sub '><a href='#'><span><b>FASILITAS</b></span></a>
          <ul>
            <li class='has-sub '><a href='#'><span>Animal</span></a>
                <ul>
                  <li><a href='#'><span>Sub Item</span></a></li>
                  <li><a href='#'><span>Sub Item</span></a></li>
                </ul>
              </li>
            <li class='has-sub '><a href='#'><span>Show</span></a></li>
          </ul>
        </li>
        
        <li><a href='#'><span><b>BERITA & ACARA</b></span></a></li>

        <li><a href='#'><span><b>PROMO</b></span></a></li>
      </ul>
    </div>
          </header>
        </div>

       
    <div id="fotoslide">
      <div id="gambar">
          <img src="images/gallery/a.jpg" width="190px" height="150px">
        <div id="deskripsi"><strong>Baru</strong></div>
      </div>

      <div id="gambar">
          <img src="images/gallery/b.jpg" width="190px" height="150px">
        <div id="deskripsi"><strong>Baru</strong></div>
      </div>

      <div id="gambar">
          <img src="images/gallery/c.jpg" width="190px" height="150px">
        <div id="deskripsi"><strong>Baru</strong></div>
      </div>

      <div id="gambar">
          <img src="images/gallery/d.jpg" width="190px" height="150px">
        <div id="deskripsi"><strong>Baru</strong></div>
      </div>

      <div id="gambar">
          <img src="images/gallery/a.jpg" width="190px" height="150px">
        <div id="deskripsi"><strong>Baru</strong></div>
      </div>
    </div>
    <div id="banner"></div>
    <div id="isi">
      <div class="judul"><h1>
        <?php
        /*Tampil Tentang Kami*/
          if($_GET['id']==1)
          {
            $sql1="select*from tbl_tk where kd_tk='".$_GET['konten']."'";
            $query1=mysqli_query($koneksi,$sql1);
            $data1=mysqli_fetch_object($query1);

            echo $data1->judul_tk;
            echo "<br>";
        ?>
      </h1></div>
      <div class="gambar">
        <img src="images/tk/<?php echo $data1->foto_tk; ?>">
      </div>
      <div class="hasil"><h4><?php
          echo "<br>";
          ?>

          <?php echo $data1->tgl_tk ?></h4></div>
      <div class="hasil"><p>
          <?php echo $data1->isi_tk; ?>
      </div>
          <br>
          <?php
          }
        ?> 
      </p></div>
    </div>
    <div id="footer">
     <div id="footer1">
         <div class="link1"><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.facebook.com"><img src="images/icon/fb.png" width="54px" height="45px"></a></div>
         <div class="link2"><a href="http://www.facebook.com"><strong>www.facebook.com</strong></a></div><br>
         <div class="link1"><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.twitter.com"><img src="images/icon/twit.png" width="54px" height="45px"></a></div>
         <div class="link2"><a href="http://www.twitter.com"><strong>www.twitter.com</strong></a></div><br>
         <div class="link1"><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.instagram.com"><img src="images/icon/insta.png" width="54px" height="45px"></a></div>
         <div class="link2"><a href="http://www.instagram.com"><strong>www.instagram.com</strong></a></div><br>
         <div class="link1"><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.youtube.com"><img src="images/icon/you.png" width="54px" height="45px"></a></div>
         <div class="link2"><a href="http://www.youtube.com"><strong>www.youtube.com</strong></a></div><br>
      </div>
      <div id="footer2"></div>
      <div id="footer3"><br><br><br><strong>Copyright &copy; 2017 Fani Indriyaningsih .</strong> All rights
    reserved.</div> 
    
  </div>
   </div>
  </body>
</html>


















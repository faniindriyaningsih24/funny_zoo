<html>
  <head>
    <title>FunnyZoo_FZBogor</title>
    <link rel="stylesheet" type="text/css" href="asset/template/t_kontak2.css">
    <link rel="shortcut icon" href="asset/images/gambar/logo.png">
    <meta charset="utf-8">
    <meta name="decsription" content="Funny Zoo Bogor" charset="utf-8">
    <meta name="keyword" content="Funny Zoo Bogor, Funny Zoo, Bogor, Kebun Binatang, Tempat Wisata Menarik, 
    Tempat Wisata, Flora, Fauna, Kumpul Keluarga, Family, Keluarga, Liburan">
    <meta name="author" content="Fani Indriyaningsih">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="robots">
  </head>
  <body>
        <div class="content" style="position:relative;">
        <header>
          <!--MENU-->
          <div id='cssmenu' style="position:absolute; top:0px; right:10px;z-index:2;">
              <ul>
                <li><img src="asset/images/gambar/logo.png" width="60px" height="60px" align="left">&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class='has-sub '><a href='index.php'><span><b>HOME</b></span></a></li>

                 <!--TENTANG KAMI-->
                <li class='has-sub active'><a href='#'><span><b>TENTANG KAMI</b></span></a>
                  <ul>
                    <li class='has-sub '><a href="<?php echo site_url ('sejarah') ; ?>" ><span>SEJARAH SINGKAT</span></a></li>
                    <li class='has-sub '><a href="<?php echo site_url ('kontak') ; ?>"><span>KONTAK KAMI</span></a></li>
                  </ul>
                </li>

                <!--INFO PENGUNJUNG-->
                 <li class='has-sub '><a href='#'><span><b>INFO PENGUNJUNG</b></span></a>
                  <ul>
                      <li class='has-sub '><a href="<?php echo site_url ('jadwal') ; ?>"><span>JADWAL MAKAN SATWA</span></a></li>
                      <li class='has-sub '><a href="<?php echo site_url ('pemesanan') ; ?>"><span>PEMESANAN</span></a></li>
                      <li class='has-sub '><a href="<?php echo site_url ('pemandu') ; ?>"><span>PEMANDU WISATA</span></a></li>
                      <li class='has-sub '><a href="<?php echo site_url ('tiket') ; ?>"><span>TIKET</span></a></li>
                      <li class='has-sub '><a href="<?php echo site_url ('peta') ; ?>"><span>PETA dan PETUNJUK ARAH</span></a></li>
                  </ul>
                </li>

                <!--FLORA & FAUNA-->
                <li class='has-sub '><a href='#'><span><b>FLORA & FAUNA</b></span></a>
                  <ul>
                    <li class='has-sub '><a href="<?php echo site_url ('flora') ; ?>"><span>FLORA</span></a></li>
                    <li class='has-sub '><a href="<?php echo site_url ('fauna') ; ?>"><span>FAUNA</span></a></li>
                  </ul>
                </li>

              <!--FASILITAS-->
                <li class='has-sub '><a href='#'><span><b>FASILITAS</b></span></a>
                  <ul>
                    <li class='has-sub '><a href="<?php echo site_url ('sarana') ; ?>"><span>SARANA REKREASI</span></a></li>
                    <li class='has-sub '><a href="<?php echo site_url ('resto') ; ?>"><span>RESTORAN ZOO</span></a></li>
                  </ul>
                </li>
                <!--BERITA & ACARA-->
                <li class='has-sub '><a href="<?php echo site_url ('berita') ; ?>"><span><b>BERITA & ACARA</b></span></a>
                </li>
                <!--PROMO-->
                <li><a href="<?php echo site_url ('promo') ; ?>"><span><b>PROMO</b></span></a></li>
              </ul>
            </div>
         
            <!-- GAMBAR HEADER -->
           <div id="img_header">
           </div>
        </header>
        </div>

    <!--KONTEN KE-1 -->
    <div id="konten1">
         <!--KONTAK KAMI -->        
        <div class="judul">
          <h1><?= $kontak->judul_tk ?></h1>
        </div>
    </div>
        <hr class="onepixel">
    <!--KONTEN KE-2 -->
    <div id="konten2">
      <div id="isi2">
      <div style="">
  
      <img src="http://localhost/funny_zoo/images/tk/<?= $kontak->foto_tk ?>" 
      style="width:200px; height:200px;"><br><br><br><br><br><br><br><br><br><br><br><br><br>
  
    <div id="isi2">
      <div class="hasil">
        <p>
          <?php 
        echo $kontak->isi_tk;
          ?>
        </p>
      </div>
    </div>
      </div>
    </div>
    <!--KUMPULAN INFORMASI ==> TICKET, JADWAL, ARAH -->
     <div id="info">
      <div id="info1">
        <!--TIKET-->
      <div id="subinfo">
         <div class="sub1"><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url ('tiket') ; ?>"><img src="asset/images/icon/icon1.jpg" width="130px" height="130px"></a></div>
         <div class="sub2"><a href="<?php echo site_url ('tiket') ; ?>"><strong>Informasi Ticket</strong></a></div><br>
      </div>
      <!--JADWAL-->
      <div id="subinfo">
        <div class="sub1"><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url ('jadwal') ; ?>"><img src="asset/images/icon/icon2a.jpg" width="130px" height="130px"></a></div>
        <div class="sub2"><a href="<?php echo site_url ('jadwal') ; ?>"><strong>Jadwal Makan Satwa</strong></a></div><br>
      </div>
      <!--PETA-->
      <div id="subinfo">
        <div class="sub1"><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url ('peta') ; ?>"><img src="asset/images/icon/icon3.jpg" width="130px" height="130px"></a></div>
        <div class="sub2"><a href="<?php echo site_url ('peta') ; ?>"><strong>Petunjuk Arah</strong></a></div><br>
      </div>
    </div>
    </div>
    <!--KONTEN KE-3 ==> BAGIAN FOOTER SILUET-->
    <div id="konten3">
    </div>


  <!--FOOTER -->
   <div id="footer">
     <!--SOSIAL MEDIA -->
     <div id="footer1">
          <br><div class="link3"><a href="http://www.facebook.com"><strong>FOLLOW US</strong></a></div><br>
         <!--FACEBOOK-->
         <div class="link1"><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.facebook.com"><img src="asset/images/icon/fb.png" width="54px" height="45px"></a></div>
         <div class="link2"><a href="http://www.facebook.com"><strong>www.facebook.com</strong></a></div><br>
         <!--TWITTER -->
         <div class="link1"><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.twitter.com"><img src="asset/images/icon/twit.png" width="54px" height="45px"></a></div>
         <div class="link2"><a href="http://www.twitter.com"><strong>www.twitter.com</strong></a></div><br>
         <!--INSTAGRAM -->
         <div class="link1"><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.instagram.com"><img src="asset/images/icon/insta.png" width="54px" height="45px"></a></div>
         <div class="link2"><a href="http://www.instagram.com"><strong>www.instagram.com</strong></a></div><br>
         <!--YOUTUBE -->
         <div class="link1"><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.youtube.com"><img src="asset/images/icon/you.png" width="54px" height="45px"></a></div>
         <div class="link2"><a href="http://www.youtube.com"><strong>www.youtube.com</strong></a></div><br>
      </div>
      <!--ALAMAT -->
      <div id="footer2">
        <div class="alamat">
          <p>
            <strong>FUNNY ZOO BOGOR</strong><br>
            Jl. Ir. H. Juanda No. 13 Bogor Jawa Barat, Indonesia<br>
            Telepon (0251) 8311362 - 8336871<br>
            e-mail : fzbogor@mail.go.id<br>
            Phone: (0251) 8322187<br>
            Fax. (0251) 8322187<br>
          </p>
        </div>
      </div>
      <!--COPYRIGHT-->
      <div id="footer3"><br><br><br><strong>Copyright &copy; 2017 Fani Indriyaningsih .</strong> All rights
    reserved.</div> 
    
  </div>

  </body>
</html>


















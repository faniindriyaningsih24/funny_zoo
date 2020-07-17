<html>
  <head>
    <title>FunnyZoo_FZBogor</title>
    <link rel="stylesheet" type="text/css" href="asset/template/t_index.css">
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
                <li class='active '><a href='index.php'><span><b>HOME</b></span></a></li>

                 <!--TENTANG KAMI-->
                <li class='has-sub '><a href='#'><span><b>TENTANG KAMI</b></span></a>
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
            <!--HEADER SLIDER-->
            <div class="slider">
              <ul> 
                <li> 
                  <img alt="Images 1" src="asset/images/header/h1.jpg" width="1349px" height="574px" />
                </li> 
                <li> 
                  <img alt="Images 2" src="asset/images/header/h2.jpg" width="1349px" height="574px" />
                </li> 
                <li>
                  <img alt="Images 3" src="asset/images/header/h3.jpg" width="1349px" height="574px" />
                </li> 
                <li> 
                  <img alt="Images 4" src="asset/images/header/h4.jpg" width="1349px" height="574px" />
                </li>
              </ul> 
            </div>
        </header>
        </div>
    <!--INFO TIKET, JADWAL, PETA-->
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

    <!--KONTEN 1-->
    <h1 style="color:lightgreen; text-align:center; font-family:Cooper Black; margin-bottom:7px;">
      SELAMAT DATANG DI FUNNY ZOO BOGOR<br>
      Wisata Asik Bersama Keluarga</h1>
    <div id="konten1">
    </div>
    <!--KONTEN 3 : SILUET GAJAH-->
    <div id="konten3">
    </div>


   <!--FOOTER--> 
   <div id="footer">
    <!--FOOTER SOSMED: FB, TWITTER, INSTAGRAM--> 
     <div id="footer1">
        <br><div class="link3"><a href="http://www.facebook.com"><strong>FOLLOW US</strong></a></div><br>
         <div class="link1"><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.facebook.com"><img src="asset/images/icon/fb.png" width="54px" height="45px"></a></div>
         <div class="link2"><a href="http://www.facebook.com"><strong>www.facebook.com</strong></a></div><br>

         <div class="link1"><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.twitter.com"><img src="asset/images/icon/twit.png" width="54px" height="45px"></a></div>
         <div class="link2"><a href="http://www.twitter.com"><strong>www.twitter.com</strong></a></div><br>

         <div class="link1"><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.instagram.com"><img src="asset/images/icon/insta.png" width="54px" height="45px"></a></div>
         <div class="link2"><a href="http://www.instagram.com"><strong>www.instagram.com</strong></a></div><br>

         <div class="link1"><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.youtube.com"><img src="asset/images/icon/you.png" width="54px" height="45px"></a></div>
         <div class="link2"><a href="http://www.youtube.com"><strong>www.youtube.com</strong></a></div><br>
      </div>
      <!--FOOTER ALAMAT--> 
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
      <!--FOOTER COPYRIGHT--> 
      <div id="footer3"><br><br><br><strong>Copyright &copy; 2017 Fani Indriyaningsih .</strong> All rights
    reserved.</div> 
    
  </div>

  </body>
</html>


















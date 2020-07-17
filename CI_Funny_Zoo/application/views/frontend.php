<html>
	<head>
		<title>Web_Sekolah</title>
		<link rel="stylesheet" type="text/css" href="asset/template/thems1.css">
	</head>

	<body> 
		<div class="aa">
			<img src="asset/image/icon/logo.png" width="50px" height="50px" align="left">
			<a href="http://www.facebook.com"><img src="asset/image/icon/fb.ico" width="50px" height="50px" align="right"></a>
			<a href="http://www.twitter.com"><img src="asset/image/icon/twit.ico" width="50px" height="50px" align="right"></a>
			<a href="http://www.instagram.com"><img src="asset/image/icon/insta.png" width="50px" height="50px" align="right"></a>
		</div>
		<div class="bb">
			<object data="asset/sekolah.swf" width="1100px" height="300px"></object>
		</div>
		<div class="cc">
			<div id="cc1">
				<div id="cc1a"><h3>TENTANG KAMI</h3></div>
				<h4><div class="bagus">
					<?php
						if(!empty($tk))
						{
							foreach($tk as $data_tk)
							{ 
					?>
									<a href="<?php echo site_url('web/tk/'.$data_tk->kd_tk) ?>"><?php echo $data_tk->judul_tk; ?></a>
									<br>

								<?php
							}
								
						}
								?>
					
				
				</div>
				</h4>

				<div id="cc1a"><h3>AGENDA</h3></div>
				<h4><div class="bagus">

					<?php
						if(!empty($agenda))
						{
							foreach($agenda as $data_agenda)
							{ 
								?>
									<a href=""><?php echo $data_agenda->judul_agenda; ?></a>
									<br>

								<?php
							}
								
						}
					?>
				
				</div>
				</h4>

				<div id="cc1a"><h3>BERITA</h3></div>
				<h4><div class="bagus">
				
					<?php
						if(!empty($berita))
						{
							foreach($berita as $data_berita)
							{ 
								?>
									<a href=""><?php echo $data_berita->judul_berita; ?></a>
									<br>

								<?php
							}
								
						}
					?>
				
				</div>
				</h4>

				<div id="cc1a"><h3>PENGUMUMAN</h3></div>
				<h4><div class="bagus">
				
					<?php
						if(!empty($pengumuman))
						{
							foreach($pengumuman as $data_pengumuman)
							{ 
								?>
									<a href=""><?php echo $data_pengumuman->judul_pengumuman; ?></a>
									<br>

								<?php
							}
								
						}
					?>
				
				</div>
				</h4>

				<div id="cc1a"><h3>PRESTASI</h3></div>
				<h4><div class="bagus">
				
					<?php
						if(!empty($prestasi))
						{
							foreach($prestasi as $data_prestasi)
							{ 
								?>
									<a href=""><?php echo $data_prestasi->judul_prestasi; ?></a>
									<br>

								<?php
							}
								
						}
					?>
				
				</div>
				</h4>

				<div id="cc1a"><h3>KEGIATAN GURU</h3></div>
				<h4><div class="bagus">
				
					<?php
						if(!empty($kguru))
						{
							foreach($kguru as $data_kguru)
							{ 
								?>
									<a href=""><?php echo $data_kguru->judul_kguru; ?></a>
									<br>

								<?php
							}
								
						}
					?>
				
				</div>
				</h4>

				<div id="cc1a"><h3>KEGIATAN SISWA</h3></div>
				<h4><div class="bagus">		
				
					<?php
						if(!empty($ksiswa))
						{
							foreach($ksiswa as $data_ksiswa)
							{ 
								?>
									<a href=""><?php echo $data_ksiswa->judul_ksiswa; ?></a>
									<br>

								<?php
							}
								
						}
					?>
				
				</div>
				</h4>
			</div>



			<div id="cc2" align="center" style="">
				<?php
					$this->load->view($link);
				?>
			</div>

			<div id="cc3">
				 <br> <br> <br>
				<img src="asset/image/gambar/1.jpg" width="140" height="120" title="Kegiatan UNBK"> <br> <br> <br>
				<img src="asset/image/gambar/2.jpg" width="140" height="120" title="Upacara 17 Agust 2016"> <br> <br> <br>
				<img src="asset/image/gambar/3.jpg" width="140" height="120" title="Team Voly Putri"> <br> <br> <br>
				<img src="asset/image/gambar/4.jpg" width="140" height="120" title="Theater"> <br> <br> <br>
				<img src="asset/image/gambar/5.jpg" width="140" height="120" title="Pasanggiri"> <br> <br> <br>
				<img src="asset/image/gambar/6.jpg" width="140" height="120" title="Team Futsal"> <br> <br> <br>
				<img src="asset/image/gambar/7.jpg" width="140" height="120" title="Team Basket Putri"> <br> <br> <br>
				<img src="asset/image/gambar/8.jpg" width="140" height="120" title="Paskibra"> <br> <br> <br>
				<img src="asset/image/gambar/7.jpg" width="140" height="120" title="Team Basket Putri">		
				
			</div>
		</div>
	</body>
</html>
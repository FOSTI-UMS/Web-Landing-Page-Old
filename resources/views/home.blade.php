e<!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>Fosti</title>
	<meta name="description" content="Website official Fosti UMS, berisi tentang berita teknologi dan open source dan kegiatan-kegiatan dari Fosti UMS yang akan dan telah di adakan. Dapatkan informasi terbaru berita berita teknologi disini" />
	<meta name="keywords" content="open source, linux, hacking, event, programming, coding">
	<meta property="og:title" content="">

	<link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('home/fancybox/jquery.fancybox-v=2.1.5.css') }}" type="text/css" media="screen">
  <link rel="stylesheet" href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('home/css/style.css') }}">

	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>


	<link rel="prefetch" href="{{ asset('home/images/zoom.png') }}">
  <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
</head>

<body>
	<div class="navbar navbar-fixed-top" data-activeslide="1">
		<div class="container">

			<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>


			<div class="nav-collapse collapse navbar-responsive-collapse">
				<ul class="nav row">
					<li data-slide="1" class="col-12 col-sm-2"><a id="menu-link-1" href="#slide-1" title="Next Section"><span class="icon icon-home"></span> <span class="text">HOME</span></a></li>
					<li data-slide="2" class="col-12 col-sm-2"><a id="menu-link-2" href="#slide-2" title="Next Section"><span class="icon icon-user"></span> <span class="text">DIVISION</span></a></li>
					<li data-slide="4" class="col-12 col-sm-2"><a id="menu-link-4" href="#slide-4" title="Next Section"><span class="icon icon-gears"></span> <span class="text">VISION</span></a></li>
					<li data-slide="5" class="col-12 col-sm-2"><a id="menu-link-5" href="#slide-5" title="Next Section"><span class="icon icon-file"></span> <span class="text">NEWS</span></a></li>
					<li data-slide="7" class="col-12 col-sm-2"><a id="menu-link-7" href="#slide-7" title="Next Section"><span class="icon icon-calendar"></span> <span class="text">EVENT</span></a></li>
					<li data-slide="6" class="col-12 col-sm-2"><a id="menu-link-6" href="#slide-6" title="Next Section"><span class="icon icon-envelope"></span> <span class="text">CONTACT</span></a></li>
				</ul>
				<div class="row">
					<div class="col-sm-2 active-menu"></div>
				</div>
			</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
	</div><!-- /.navbar -->


	<!-- === Arrows === -->
	<div id="arrows">
		<div id="arrow-up" class="disabled"></div>
		<div id="arrow-down"></div>
		<div id="arrow-left" class="disabled visible-lg"></div>
		<div id="arrow-right" class="disabled visible-lg"></div>
	</div><!-- /.arrows -->


	<!-- === MAIN Background === -->
	<div class="slide story" id="slide-1" data-slide="1">
		<div class="container">
			<div id="home-row-1" class="row clearfix">
				<div class="col-12">
					<h1 class="font-semibold">FOSTI <span class="font-thin">UMS</span></h1>
					<h4 class="font-thin">Forum Open Source<span class="font-semibold"> Teknik Informatika</span></h4>
					<br>
					<br>
				</div><!-- /col-12 -->
			</div><!-- /row -->
			<div id="home-row-2" class="row clearfix">
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="2"><img src="{{ asset('home/images/D.png') }}"></div><span>DIVISION</span></div>
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="4"><img src="{{ asset('home/images/V.png') }}"></div><span>VISION</span></div>
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="5"><img src="{{ asset('home/images/N.png') }}"></div><span>NEWS</span></div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide1 -->

	<!-- === Slide 2 === -->
	<div class="slide story" id="slide-2" data-slide="2">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin">We Have<span class="font-semibold"> 4</span> Division and every division is unique</div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-12 font-thin">Division of <span class="font-semibold">Fosti</span></div>
			</div><!-- /row -->
			<div class="row content-row">
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-eye-open"></a></i></p>
					<h2 class="font-thin">Riset<span class="font-semibold"></br>Teknologi</span></h2>
					<h4 class="font-thin">Divisi yang mengulas dan mengimplentasikan teknologi saat ini</h4>


				</div><!-- /col12 -->
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-laptop"></i></p>
					<h2 class="font-thin">Web <span class="font-semibold"></br>Jaringan</span></h2>
					<h4 class="font-thin">Divisi yang fokus dalam hal seputaran web dan juga jaringan di dalamnya</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-tablet"></i></p>
					<h2 class="font-thin">Hubungan <span class="font-semibold">Publik</span></h2>
					<h4 class="font-thin">Divisi yang berkutat di bagian informasi FOSTI dan media sosial FOSTI</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-pencil"></i></p>
					<h2 class="font-thin">Ke <span class="font-semibold"></br>Organisasian</span></h2>
					<h4 class="font-thin">Divisi yang mengurus pengkaderan,internal dan juga event FOSTI</h4>
				</div><!-- /col12 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide2 -->

	<!-- === SLide 3 - Portfolio -->


	<!-- === Slide 4 - Process === -->
	<div class="slide story" id="slide-4" data-slide="4">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin">Vision and Mission of <span class="font-semibold">Fosti</span></div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->

			<div class="row content-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-bolt"></i></p>
					<h2 class="font-thin">Share<br><span class="font-semibold" >Knowlegde</span></h2>
					<h4 class="font-thin">Menyebarkan semangat Open Source kepada masyarakat luas dan mengubah stigma masyrakat terhadap Open Source</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-cog"></i></p>
					<h2 class="font-thin">Project<br><span class="font-semibold">discovery</span></h2>
					<h4 class="font-thin">Mengembangkan dan memodifikasi distro Linux yang sudah ada yan lebih dikenal sebagai Remastering</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-cloud"></i></p>
					<h2 class="font-thin">Storming<br><span class="font-semibold">our brains</span></h2>
					<h4 class="font-thin">Mewadahi serta meningkatkan kreatifitas mahasiswa dalam bidang IT khususnya mahasiswa Informatika UMS</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-map-marker"></i></p>
					<h2 class="font-thin">Getting<br><span class="font-semibold">there</span></h2>
					<h4 class="font-thin">FOSTI terbuka untuk siapa saja yang mempunyai niat belajar dan mempunyai jiwa serta semangat Open Source yang tinggi</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-gift"></i></p>
					<h2 class="font-thin">Knowledge<br><span class="font-semibold">Packet</span></h2>
					<h4 class="font-thin">FOSTI juga menyediakan paket - paket pengetahuan dan dikemas dalam beberapa divisi yang sudah ada dalam tubuh FOSTI</h4>
				</div><!-- /col12 -->
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide4 -->

	<!-- === Slide 5 === -->
	<div class="slide story" id="slide-5" data-slide="5">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin"><span class="font-semibold">News</div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">Memuat tentang berita teknologi saat ini terutama dalam bidang Open Source dan kegiatan FOSTI itu sendiri<br/><br/></div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div><br><br><br><br>
				<input type="button" target="_blank" class="btn btn-primary btn-lg" value="Found some article" onclick="linking_blog()">
				<script>
					function linking_blog()
					{
						location.href = "/blog";
					}
				</script>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide5 -->

	<!-- === Slide 4 - Process === -->
	<div class="slide story" id="slide-4" data-slide="7">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin">Our <span class="font-semibold"><br>Events</span></div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->

			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">Find our best events from seminars, workshops, etc.<br/></div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div><br><br><br><br>
				<input type="button" target="_blank" class="btn btn-warning btn-lg" value="Registration" onclick="acara()">
				<script>
					function acara()
					{
						location.href = "https://event.fostiums.org/";
					}
				</script>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide4 -->

	<!-- === Slide 6 / Contact === -->
	<div class="slide story" id="slide-6" data-slide="6">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-light">Contact Us</div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">Kesekretariatan FOSTI berada di Kampus 2 Universitas Muhammadiyah Surakarta Gedung J santai 3 sayap kanan</div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
			<div id="contact-row-4" class="row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-phone"></i></a></p>
					<span class="hover-text font-light "></span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-envelope"></i></a></p>
					<span class="hover-text font-light ">fostiums@gmail.com</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-instagram"></i></a></p>
					<span class="hover-text font-light ">@fosti_ums</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-facebook"></i></a></p>
					<span class="hover-text font-light ">facebook/fostiums</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-twitter"></i></a></p>
					<span class="hover-text font-light ">@fostiums</span></a>
				</div><!-- /col12 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /Slide 6 -->
	<!--Modal-->
	<div class="modal fade" id="modalRistek" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body">
				  <p>Ketua Divisi : Hammam</p><br>
				  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur voluptatibus cupiditate atque magnam soluta, enim obcaecati perspiciatis? Commodi ratione animi minima laboriosam nam excepturi, porro minus. Fugit deleniti beatae distinctio.</p>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				  <button type="button" class="btn btn-primary">Save changes</button>
				</div>
			  </div>
			</div>
		  </div>
</body>

	<!-- SCRIPTS -->
	<script src="{{ asset('home/js/html5shiv.js') }}"></script>
	<script src="{{ asset('home/js/jquery-1.10.2.min.js') }}"></script>
	<script src="{{ asset('home/js/jquery-migrate-1.2.1.min.js') }}"></script>
	<script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('home/js/jquery.easing.1.3.js') }}"></script>
	<script type="text/javascript" src="{{ asset('home/fancybox/jquery.fancybox.pack-v=2.1.5.js') }}"></script>
	<script src="{{ asset('home/js/script.js') }}"></script>

	<!-- fancybox init -->
	<script>
		$(document).ready(function(e) {
			var lis = $('.nav > li');
			menu_focus( lis[0], 1 );

			$(".fancybox").fancybox({
				padding: 10,
				helpers: {
					overlay: {
						locked: false
					}
				}
			});

		});
		</script>

</html>

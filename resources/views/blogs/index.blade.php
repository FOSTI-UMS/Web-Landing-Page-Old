<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset='UTF-8'/>
	<meta content='width=device-width' name='viewport'/>
	<meta content='Open source, programming, iot, python, coding, hacking, linux, event' name='keywords'/>
	<meta content='Website Fosti berbagi info, berita dan tutorial berbagai teknologi Open Source dan Programming.' name='description'/>
	<meta content='id_ID' property='og:locale:alternate'/>
	<meta content='Indonesia' name='geo.placename'/>
	<meta content='id' name='geo.country'/>
	<title>Fosti UMS</title>
	<link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="{{ asset('blogas/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('blogas/css/font-awesome.css') }}">
	{{-- <link rel="stylesheet" href="{{ asset('/css/app.css') }}"> --}}
	<script type="text/javascript" src="{{ asset('blogas/js/jquery.js' )}}"></script>
	<script type='text/javascript'>
		function fos_thumb_size(e,t){
			var n=250;
			var r=190;
			image_tag='<img width="'+n+'" height="'+r+'" src="'+e.replace("/s72-c/","/w"+n+"-h"+r+"-c/")+'" alt="'+t.replace(/"/g,"")+'" title="'+t.replace(/"/g,"")+'" class="thumbnail-post lazy"/>';
			if(t!="")return image_tag;else return""}
			function fos_thumb_populer(e,t){
				var n=80;
				var r=80;
				image_tag='<img width="'+n+'" height="'+r+'" src="'+e.replace("/s72-c/","/w"+n+"-h"+r+"-c/")+'" alt="'+t.replace(/"/g,"")+'" title="'+t.replace(/"/g,"")+'" class="thumbnail-post lazy"/>';
				if(t!="")return image_tag;else return""}
			</script>
		</head>
		<body>
			<header class='site-headernbt' id='site-headernbt' role='banner'>
				<div class='title-infonbt'>
					<div class='Header section' id='Header'>
						<div class='widget Header' data-version='1' id='Header1'>
							<div id='header-inner'>
								<div class='titlewrapper'>
									<h1 class='site-title'><a href='/'>FOSTI UMS</a></h1>
								</div>
								<div class='descriptionwrapper'>
									<p class='description'><span>Website Fosti UMS berisi kegiatan Fosti dan Informasi, berita, dan tutorial tentang Iot, Linux, dan Programming</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			@if (session('sub_suc'))
		    <div class="alert alert-success">
		      {{ session('sub_suc') }}
		    </div>
		  @endif
			<nav id='nav' itemscope='itemscope' itemtype='http://schema.org/SiteNavigationElement' role='navigation'>
				<a class='menu-slide' href="#">Menu Ξ</a>
				<div class='nav-wrapper'>
					<ul class='nav fost'>
						<li class=''><a class='active' href='/'><span itemprop='name'>Home</span></a></li>
						<li class=''><a class='' href='/blog'><span itemprop='name'>Blog</span></a></li>
						<li class=''><a class='' target="_blank" href='https://github.com/fosti'><span itemprop='name'>Source code</span></a></li>
					</ul>
					<!-- Form Cari -->
					<form role="search" action="/blog" method="get" id='search-form'>
						<table>
							<tbody>
								<tr>
									<td class='search-box'>
										<input id='search-box' onblur='if(this.value==&#39;&#39;)this.value=this.defaultValue;' onfocus='if(this.value==this.defaultValue)this.value=&#39;&#39;;' placeholder="Search..." name="search" id="search" type="text"/>
									</td>
									<td class='search-button'>
										<input id='search-button' type='submit' value='Search'/>
										<input name='ie' type='hidden' value='UTF-8'/>
									</td>
								</tr>
							</tbody>
						</table>
					</form>
					<!-- Akhir Form Cari -->
				</div>
			</nav>
			<div class="clear">
			</div>
			<div class='master-fos'>
				<div class='overflow-containernbt' id='overflow-containernbt'>
					<div class='mainnbt' id='mainnbt' role='main'>
						<div class='Postingan section' id='Postingan'><div class='widget Blog' data-version='1' id='Blog1'>
							<div class='blog-posts hfeed'><div class="date-outer">
								<div class="date-posts">
									<!-- awal posting -->
									@forelse ($blogs as $blog)
                    <div class='post-outer'>
  										<div class='post hentry'>
  											<div class='post-header-line-1'>

  											</div>
  											<div class='post-body entry-content'>
  												<article>
  													<div class='thumbnail-post'>
  														<a href='/blog/{{ $blog->slug }}'>
  															<script type='text/javascript'>
  																document.write(fos_thumb_size("{{ asset('images/blog/'. $blog->featured_img) }}","{{ $blog->title }}"));
  															</script>
  														</a>
  													</div>
  													<div class='entry-header'>
  														<h2 class='post-title entry-title'>
  															<a href='/blog/{{ $blog->slug }}' title='{{ $blog->title }}'>{{ $blog->title }}</a>
  														</h2>
  														<span>Ditulis oleh: <strong>{{ $blog->penulis }}</strong></span>
															<p><strong>Dibuat pada {{date('d'.'/'.'m'.'/'.'Y', strtotime($blog->created_at))}} at {{ date('g:ia', strtotime($blog->created_at))}}</strong></p>
  													</div>
  													<div class='post-snippet'>
  														<p>{!! str_limit($blog->post, 150) !!}</p>
  													</div>
  													<div class='tag-post'>
  														<a href='#' rel='tag'>{{ $blog->kategori }}</a>
  													</div>
  													<div class='clear'></div>
  												</article>
  											</div>
  											<div class='clear'></div>
  										</div>
  										<div class='clear'></div>
  									</div>
									@empty
                    <h2>Kosong</h2>
									@endforelse
									<!-- iklan bisa di taroh disini. ukuran panjang 770 pixsel lebar terserah -->
									{{-- <div class="inline-ad">
										ini bisa di taruh iklan
									</div> --}}
									<!-- akhir iklan -->
									<!-- Akhir Posting -->
									<div class='blog-pager' id='blog-pager'>
										{{ $blogs->links() }}
									</div><div class='clear'></div>
								</div>
							</div><!--Can't find substitution for tag [adEnd]-->
						</div>
						<div class='clear'></div>
						<div class='blog-pager' id='blog-pager'></div>
						<div class='clear'></div>
						<div class='blog-feeds'>

						</div>
						<script type="text/javascript">
							window.___gcfg = {'lang': 'in'};
						</script>
					</div>
				</div>
			</div>
			<!-- Awal Sidebar -->
			<div class='sidebar-primary-container' id='sidebar-primary-container'>
				<div class='sidebar sidebar-primarynbt' id='sidebar-primarynbt' role='complementary'>
					<div class='Sidebar section' id='Sidebar'>

						{{-- <div class='widget' data-version='1' id='label1'>
							<h2>Kategori</h2>
							<div class='widget-content'>
								<ul>
									<li><a dir='ltr' href='#linkLabel'>Info</a></li>
									<li><a dir='ltr' href='#linkLabel'>Tips &amp; Trik</a></li>
								</ul>
								<div class='clear'></div>
							</div>
						</div> --}}

						<div class='widget popular-posts' data-version='1' id='PopularPosts1'>
							<h2>Artikel Terbaru</h2>
							<div class='widget-content .popular-posts'>
								<ul>
									@foreach ($terbaru as $baru)
                    <li>
  										<div class='item-thumbnail-only'>
  											<div class='item-thumbnail'>
  												<a href='/blog/{{ $baru->slug }}' target='_blank'>
  													<img alt='' border='0' src='{{ asset('images/blog/'. $baru->featured_img) }}'/>
  												</a>
  											</div>
  											<div class='item-title'>
  												<a href="/blog/{{ $baru->slug }}">{{ $baru->title }}</a>
  											</div>
  											<div class='clear'></div>
  										</div>
  									</li>
									@endforeach
								</ul>
								<div class='clear'></div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div id='berlangganan-fos'>
			<p>Dapatkan Informasi Terbaru Seputar Open Source</p>
			<div class='email-fos'>
				<form class="" action="/blog" method="post">
					<input name='subs' onblur='if (this.value==""){this.value="Alamat Email";}' onfocus='if (this.value=="Alamat Email"){this.value="";}' type='email' name="subs" placeholder="Enter your email"/>
					<input class='tombol-fos' type='submit' value='Subscribe'/>
					{{ csrf_field() }}
				</form>
			</div>
		</div>
		<a href='#' id='back-to-top' rel='nofollow'><p alt='Kembali Ke Atas' title='Kembali Ke Atas'>Δ</p></a>
	</div>
	<footer class='footer' id='footer' role='contentinfo'>
		<h3>
			<a href='/'> Home</a> &#183;
			<a href='/blog'> Blog</a> &#183;
		</h3>
		<h4>
			Copyright &#169; 2018 <a href='/'>Fosti UMS</a>.
		</h4>
	</footer>
  <script type='text/javascript'>//<![CDATA[
    // Main Menu
    var ww=document.body.clientWidth;$(document).ready(function(){$(".nav li a").each(function(){if($(this).next().length>0){$(this).addClass("parent")}});$(".menu-slide").click(function(e){e.preventDefault();$(this).toggleClass("active");$(".nav").toggle()});adjustMenu()});$(window).bind("resize orientationchange",function(){ww=document.body.clientWidth;adjustMenu()});var adjustMenu=function(){if(ww<768){$(".menu-slide").css("display","inline-block");if(!$(".menu-slide").hasClass("active")){$(".nav").hide()}else{$(".nav").show()}$(".nav li").unbind("mouseenter mouseleave");$(".nav li a.parent").unbind("click").bind("click",function(e){e.preventDefault();$(this).parent("li").toggleClass("hover")})}else if(ww>=768){$(".menu-slide").css("display","none");$(".nav").show();$(".nav li").removeClass("hover");$(".nav li a").unbind("click");$(".nav li").unbind("mouseenter mouseleave").bind("mouseenter mouseleave",function(){$(this).toggleClass("hover")})}}
    // Double Click Blockquote
    for (var pres = document.querySelectorAll("blockquote,pre"), i = 0; i < pres.length; i++) pres[i].addEventListener("dblclick", function() {var e = getSelection(),t = document.createRange();t.selectNodeContents(this), e.removeAllRanges(), e.addRange(t)}, !1);
    // No Link Image
    $(".separator a:has(img)").each(function() { $(this).replaceWith($(this).children()); });
    // Sticky Widget
    $(window).width(function(){$(this).width()>940&&$(function(){if($("#PopularPosts1").length){var o=$("#PopularPosts1"),s=$("#PopularPosts1").offset().top,t=$("#PopularPosts1").height();$(window).scroll(function(){var i=$("#blog-pager").offset().top-t-20,n=$(window).scrollTop();if(n>s?(o.css({position:"fixed",top:0}),o.addClass("sticky")):o.css("position","static"),n>i){var p=i-n;o.css({top:p})}})}})});
    //]]>
  </script>
</body>
</html>

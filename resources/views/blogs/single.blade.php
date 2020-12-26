<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset='UTF-8'/>
	<meta content='width=device-width' name='viewport'/>
	<meta content='Keyword Blog' name='keywords'/>
	<meta content='{!! $blog->post, 100 !!}.' name='description'/>
	<meta content='id_ID' property='og:locale:alternate'/>
	<meta property="og:image" content="{{ asset('images/blog/'. $blog->featured_img) }}" />
	<meta content='Indonesia' name='geo.placename'/>
	<meta content='id' name='geo.country'/>
	<title>{{$blog->title}} | Fosti UMS</title>
  <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="{{ asset('blogas/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('blogas/css/font-awesome.css') }}">
	<script type="text/javascript" src="{{ asset('blogas/js/jquery.js' )}}"></script>
	<script type='text/javascript'>
		function a(e,t){
			var n=350;
			var r=250;
			image_tag='<img width="'+n+'" height="'+r+'" src="'+e.replace("/s72-c/","/w"+n+"-h"+r+"-c/")+'" alt="'+t.replace(/"/g,"")+'" title="'+t.replace(/"/g,"")+'" class="thumbnail-post lazy" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"/> ';
			if(t!="")return image_tag;else return""}
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
				function gantilagi() {
					$('#ads').hide().fadeIn('slow').html("<img src='images/banner/hematmedia1.com.png' onmouseover='gantigambar()'>");
				}
				function gantigambar() {
					$('#ads').hide().fadeIn('slow').html("<img src='images/banner/hematmedia2.com.png' onmouseout='gantilagi()'>");
				}
			</script>
		</head>
		<body>
			<header class='site-headernbt' id='site-headernbt' role='banner'>
				<div class='title-infonbt'>
					<div class='Header section' id='Header'>
						<div class='widget Header' data-version='1' id='Header1'>
							<div id='header-inner'>
								<div class='titlewrapper'>
									<h1 class='site-title'><a href='./'>FOSTI UMS</a></h1>
								</div>
								<div class='descriptionwrapper'>
									<p class='description'><span>#DiskripsiWebnyaGan</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
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
						<div class='Postingan section' id='Postingan'>
							<div class='widget Blog' data-version='1' id='Blog1'>
								<!-- breadcrumbs -->
								<div class='breadcrumbs'>
									<span typeof='v:Breadcrumb'><a href='/blog'>Beranda</a></span> &#187; <span typeof='v:Breadcrumb'><a href='#' property='v:title' rel='v:url'>Info</a></span> &#187; <span>{{$blog->title}}</span>
								</div>
								<!-- akhir breadcrumbs -->
								<div class='blog-posts hfeed'><!--Can't find substitution for tag [defaultAdStart]--><div class="date-outer"><div class="date-posts">
									<div class='post-outer'>
										<div class='post hentry'>
											<h1 class='post-title entry-title'><center>
												<a href='/blog/{{ $blog->slug }}'>{{ $blog->title }}</a></center>
											</h1><hr>
											<div class='post-header-line-1'></div><div class='post-body entry-content'>
												<script type='text/javascript'>
																document.write(a("{{ asset('images/blog/'. $blog->featured_img) }}","{{ $blog->title }}"));
															</script>
												<article>
													{!! $blog->post !!}
													<!-- di bawah ini jangan di hapus buat button -->
													<div class='share-fos'>
														<p class='share-fos-p'>Share <i class='fa fa-share-alt'></i></p>
														<a class='share-fos-fb' href='https://www.facebook.com/sharer/sharer.php?u=https://fosti.ums.ac.id/blog/{{ $blog->slug }}' rel='nofollow' target='_blank' title='Bagikan di Facebook'><i class='fa fa-facebook'></i></a>
														<a class='share-fos-tw' href='https://twitter.com/intent/tweet?text={{$blog->title}}&url=https://fosti.ums.ac.id/blog/{{ $blog->slug }}' rel='nofollow' target='_blank' title='Share ke Twitter'><i class='fa fa-twitter'></i></a>
														<a class='share-fos-gp' href='https://plus.google.com/share?urlhttps://fosti.ums.ac.id/blog/{{ $blog->slug }}' rel='nofollow' target='_blank' title='Bagikan di Google+'><i class='fa fa-google-plus'></i></a>
														<a class='share-fos-pt' href='http://pinterest.com/pin/create/button/?url=https://fosti.ums.ac.id/blog/{{ $blog->slug }}' rel='nofollow' target='_blank' title='Bagikan di Pinterest'><i class='fa fa-pinterest'></i></a>
														<a class='share-fos-tb' href='http://www.tumblr.com/share' rel='nofollow' target='_blank' title='Bagikan di Tumblr'><i class='fa fa-tumblr'></i></a>
													</div>
													<!-- akhir button -->
													<div class='clear'></div>
													<div class='clear'></div>
												</article>
											</div>
											<div class='clear'></div>

										</div>
										<div class='clear'></div>
										<div class='blog-pager' id='blog-pager'>

										</div><div class='clear'></div>
										<!-- Komentar -->
                    {{-- Mulai Disqus Comment --}}
                    <div id="disqus_thread"></div>
                      <script>

                      /**
                      *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                      *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

                      var disqus_config = function () {
                      this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
                      this.page.identifier = {{ $blog->id }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                      };

                      (function() { // DON'T EDIT BELOW THIS LINE
                      var d = document, s = d.createElement('script');
                      s.src = 'https://fosti.disqus.com/embed.js';
                      s.setAttribute('data-timestamp', +new Date());
                      (d.head || d.body).appendChild(s);
                      })();
                      </script>
                      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                      {{-- Akhir Disqus Comment --}}
                      {{-- Counter comment --}}
                      <script id="dsq-count-scr" src="//fosti.disqus.com/count.js" async></script>
                      {{-- Counter comment --}}
										<!-- SAMPE SINI -->
									</div>
									<!--Can't find substitution for tag [defaultAdEnd]--><div class='inline-ad'>
									</div><!--Can't find substitution for tag [adStart]--></div></div><!--Can't find substitution for tag [adEnd]--></div>


									<div class='clear'></div>

									<div class='clear'></div>
									<div class='blog-feeds'>

									</div>
								</div>
							</div>
						</div>

						<!-- Awal Sidebar -->
						<div class='sidebar-primary-container' id='sidebar-primary-container'>
							<div class='sidebar sidebar-primarynbt' id='sidebar-primarynbt' role='complementary'>
								<div class='Sidebar section' id='Sidebar'>

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
						<!-- akhir sidebar -->
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
//]]></script>
</body>
</html>

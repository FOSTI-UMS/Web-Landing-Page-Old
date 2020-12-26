<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog post</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <h1>monggo read</h1>
  <hr>
  <body>
      Share:
      {{-- Jangan lupa domainnya diganti kalo udah upload --}}
      <a href="https://twitter.com/intent/tweet?text={{$blog->title}}&url=http://fostiums.org/blog/{{ $blog->slug }}" target="_blank">Twitter</a>
      <a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost:8000/blog/{{ $blog->slug }}" target="_blank">Facebook</a>
      <hr>
      <h2>Title {{ $blog->title }}</h2><br><br>
      <p>Dibuat pada {{date('d'.'/'.'m'.'/'.'Y', strtotime($blog->created_at))}} at {{ date('g:ia', strtotime($blog->created_at))}}</p>
      <img src="{{ asset('storage/blog/'. $blog->featured_img) }}" alt="" width="150">
      <p>{!! $blog->post !!}</p>
      <br><br><br>
      {{-- Mulai Disqus Comment
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
        {{-- Counter comment
        <script id="dsq-count-scr" src="//fosti.disqus.com/count.js" async></script>
        {{-- Counter comment --}}
  </body>
</html>

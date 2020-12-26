<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>New Article!!</h1>
    <h2></h2><a href="https://fosti.ums.ac.id/blog/{{ $postdata->slug }}">{{ $postdata->title }}</a></h2><br>
    <span>By : {{ $postdata->penulis }}</span><br><br>
    <p>{!! str_limit($postdata->post, 150) !!}</p> 
  </body>
</html>

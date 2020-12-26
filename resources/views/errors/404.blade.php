<!DOCTYPE html>
<html>
    <head>
            <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.ico') }}"/>
            <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato" />
            <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    </head>
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bgimg {
    background-image: url('{{ asset('errors/bg.jpg') }}');
    height: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
    color: white;
    /*font-family: "Courier New", Courier, monospace;*/
    font-size: 25px;
}

.topleft {
    position: absolute;
    top: 0;
    left: 16px;
}

.bottomleft {
    position: absolute;
    bottom: 0;
    left: 16px;
    /*color: #34495e;*/
    font-family: "Courier New", Courier, monospace;
}

.middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.salam{
  /*position: absolute;*/
  /*top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);*/
  text-align: center;
  font-weight: 600;
  font-size: 80px;
}

h1,h2{
  font-weight: bolder;
}

hr {
    margin: auto;
    width: 40%;
}

@media(max-width:768px) {
  h1{
    font-size: 20px;
  }
  h2{
    font-size: 20px;
  }
  .salam{
    font-size: 30px;
    text-align: center;
    font-weight: 200;
    /*position: absolute;*/
    padding-top: 55px;
  }
  .bottomleft{
    position: absolute;
    font-size: 10px;
    bottom: 0;
    left: 16px;
    /*color: #34495e;*/
    font-family: "Courier New", Courier, monospace;
  }
  .topleft {
      position: absolute;
      top: 0;
      left: 12px;
  }
}
</style>
<body>

<div class="bgimg">
  <div class="topleft">
    <p><img src="{{ asset('errors/logo.png') }}"></p>
  </div>
  <p class="salam">السلام عليكم</p>
  <div class="middle">
    <h1>I think you're lost</h1>
    <h2>Let me tell you the direction</h2>
    {{-- <hr> --}}<br>
    {{-- <p id="demo" style="font-size:30px"></p> --}}
    <a href="/blog" role="button" class="btn btn-default btn-lg">Here</a>
    <a href="#"></a>
  </div>
  <div class="bottomleft">
    <p>فَاذْكُرُونِي أَذْكُرْكُمْ وَاشْكُرُوا لِي وَلَا تَكْفُرُونِ<br>So remember Me; I will remember you. <br>And be grateful to Me and do not deny Me. <strong>Al-Baqarah [2:152]</strong> </p>
  </div>
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 30, 2018 15:37:25").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

</body>
</html>

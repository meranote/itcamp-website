<?php
  $lazyModeDir = env("APP_ROOT");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta id="Viewport" name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
  <meta name="theme-color" content="#292B2C">

  <link rel="icon" type="image/png" href="assets/frontend/favicon/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="assets/frontend/favicon/favicon-16x16.png" sizes="16x16" />

  <meta property="og:title" content="ITCAMP#13">
  <meta property="og:description" content="เตรียมพบกับค่าย ITCAMP ครั้งที่ 13 เร็วๆนี้ !!">
  <meta property="og:image" content="http://itcamp.in.th/13/assets/seo/itcamp13_thumbnail.png">
  <meta property="og:url" content="http://itcamp.in.th/13/landing">

  <meta name="twitter:title" content="ITCAMP#13">
  <meta name="twitter:description" content="เตรียมพบกับค่าย ITCAMP ครั้งที่ 13 เร็วๆนี้ !!">
  <meta name="twitter:image" content="http://itcamp.in.th/13/assets/seo/itcamp13_thumbnail.png">
  <meta name="twitter:card" content="summary_large_image">

  <title>ITCAMP 13 | Coming Soon</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/frontend/css/jquery.fullpage.css">
  <link rel="stylesheet" href="assets/frontend/css/app.css">
</head>

<body>
<div id="fb-root"></div>
<script type="text/javascript">
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<div id="twitter-wjs"></div>
<script>
  window.twttr = (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
      t = window.twttr || {};
    if (d.getElementById(id)) return t;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);

    t._e = [];
    t.ready = function(f) {
      t._e.push(f);
    };

    return t;
  }(document, "script", "twitter-wjs"));
</script>

<!-- Landing block -->
<section class="section landing-block" data-anchor="home-block">
  <div class="content">
    <div class="logo">
      <img src="{{ $lazyModeDir }}/assets/frontend/images/logo.png" />
    </div>
    <h6 class="support">
      ได้รับเงินสนับสนุนจากงบประมาณแผ่นดินประจำปี 2560
    </h6>
    <h3 class="soon">
          <span class="hidden-sm-down">
            <span class="slash">//</span> เตรียมพบกับค่าย <span class="highlight_en">#ITCAMP</span> ครั้งที่ 13 เร็วๆนี้ <span class="highlight_en">:D</span>
          </span>
      <span class="hidden-md-up">
            <span class="slash">//</span> เตรียมพบกับค่าย <span class="highlight_en">#ITCAMP</span> <br /> ครั้งที่ 13 เร็วๆนี้ <span class="highlight_en">:D</span>
          </span>
    </h3>
    <div class="social">
      <div class="fb-share-button" data-href="http://itcamp.in.th/" data-layout="button" data-size="large">
        <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fitcamp.in.th%2F&amp;src=sdkpreparse">
          Share
        </a>
      </div>
      <a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-text="เตรียมพบกับค่าย #itcamp ครั้งที่ 13 เร็วๆนี้ :D" data-url="http://itcamp.in.th/" data-via="ITCAMP" data-related="ITCAMP,ITKMITL" data-show-count="false">
        Tweet
      </a>
      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </div>

  <div class="waves">
    <div class="wave-blue"></div>
    <div class="wave-green"></div>
    <div class="wave-purple"></div>
  </div>
</section>

<script type="text/javascript">
  var GlobalOption = {};
  GlobalOption.mode = 'LANDING_PAGE';
</script>
<script type="text/javascript" src="assets/frontend/js/app.js"></script>
</body>
</html>

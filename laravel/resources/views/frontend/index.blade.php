﻿<?php
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

    <meta property="og:title" content="ITCAMP13">
    <meta property="og:description" content="กลับมาอีกครั้ง! ค่ายไอทีแคมป์ ครั้งที่ 13 ค่ายแนะแนวคณะไอทีสำหรับน้องๆ 8-12 มิถุนายน 2560">
    <meta property="og:image" content="http://itcamp.in.th/13/assets/seo/itcamp13_thumbnail.png">
    <meta property="og:url" content="http://itcamp.in.th/13">

    <meta name="twitter:title" content="ITCAMP13">
    <meta name="twitter:description" content="กลับมาอีกครั้ง! ค่ายไอทีแคมป์ ครั้งที่ 13 ค่ายแนะแนวคณะไอทีสำหรับน้องๆ 8-12 มิถุนายน 2560">
    <meta name="twitter:image" content="http://itcamp.in.th/13/assets/seo/itcamp13_thumbnail.png">
    <meta name="twitter:card" content="summary_large_image">

    <title>ITCAMP 13</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/frontend/css/jquery.fullpage.css">
    <link rel="stylesheet" href="assets/frontend/css/app.css?v={{ (int)microtime(true) }}">
  </head>

  <style>
    section.supporter-block .content .supporters-list {
      margin-bottom: 0 !important;
    }

    section.supporter-block .content .supporters-list .supporter-img {
      margin-bottom: 1rem !important;
    }
  </style>

  <body>
    <!-- Loading Screen -->
    <div class="loading-overlay" id="loadingScreen">
      <div class="loading-content">
        <img class="app" src="{{ $lazyModeDir }}/assets/frontend/images/load-character-app.png" />
        <img class="game" src="{{ $lazyModeDir }}/assets/frontend/images/load-character-game.png" />
        <img class="network" src="{{ $lazyModeDir }}/assets/frontend/images/load-character-network.png" />
        <img class="iot" src="{{ $lazyModeDir }}/assets/frontend/images/load-character-iot.png" />
        <img class="datasci" src="{{ $lazyModeDir }}/assets/frontend/images/load-character-datasci.png" />
      </div>
      <div class="loading-text">
        Loading...
      </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-inverse bg-inverse">
      <div class="navbar-desktop hidden-md-down">
        <div class="nav-left">
          <div class="nav-linker active" data-target="home-block">เริ่มต้น</div>
          <div class="nav-linker" data-target="detail-block">รายละเอียด</div>
          <div class="nav-linker" data-target="supporter-block">ผู้สนับสนุน</div>
          <div class="nav-linker" data-target="camp-block">ประกาศผล</div>
        </div>
        <div class="logo">
          <img src="{{ $lazyModeDir }}/assets/frontend/images/logo-only-text.png" />
        </div>
        <div class="nav-right">
          <div class="nav-linker" data-target="timeline-block">กำหนดการ</div>
          <div class="nav-linker" data-target="gallery-block">ภาพกิจกรรม</div>
          <div class="nav-linker" data-target="recommend-block">คำนิยม</div>
          <div class="nav-linker" data-target="faq-block">ถาม-ตอบ</div>
        </div>
      </div>
      <div class="navbar-mobile hidden-lg-up">
        <div class="nav-hamburger" id="nav-hamburger">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="logo">
          <img src="{{ $lazyModeDir }}/assets/frontend/images/logo-only-text.png" />
        </div>
      </div>
    </nav>

    <!-- Side nav (mobile) -->
    <nav class="sidenav">
      <div class="overlay"></div>
      <div class="navigation">
        <div class="nav-linker active" data-target="home-block">เริ่มต้น</div>
        <div class="nav-linker" data-target="detail-block">รายละเอียด</div>
        <div class="nav-linker" data-target="supporter-block">ผู้สนับสนุน</div>
        <div class="nav-linker" data-target="camp-block">ประกาศผล</div>
        <div class="nav-linker" data-target="timeline-block">กำหนดการ</div>
        <div class="nav-linker" data-target="gallery-block">ภาพกิจกรรม</div>
        <div class="nav-linker" data-target="recommend-block">คำนิยม</div>
        <div class="nav-linker" data-target="faq-block">ถาม-ตอบ</div>
      </div>
    </nav>

    <!-- Sidebar (Sharing & Social) -->
    <nav class="sidebar">
      <a class="fb-share" href="http://www.facebook.com/sharer/sharer.php?u=http://www.itcamp.in.th&amp;title=ITCAMP13" target="_blank">
        <div class="sidebar-item share-facebook">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </div>
      </a>
      <a class="twit-share" href="https://twitter.com/intent/tweet?status=%E0%B8%81%E0%B8%A5%E0%B8%B1%E0%B8%9A%E0%B8%A1%E0%B8%B2%E0%B8%AD%E0%B8%B5%E0%B8%81%E0%B8%84%E0%B8%A3%E0%B8%B1%E0%B9%89%E0%B8%87!%20%E0%B8%84%E0%B9%88%E0%B8%B2%E0%B8%A2%E0%B9%84%E0%B8%AD%E0%B8%97%E0%B8%B5%E0%B9%81%E0%B8%84%E0%B8%A1%E0%B8%9B%E0%B9%8C%20%E0%B8%84%E0%B8%A3%E0%B8%B1%E0%B9%89%E0%B8%87%E0%B8%97%E0%B8%B5%E0%B9%88%2013%20%E0%B8%84%E0%B9%88%E0%B8%B2%E0%B8%A2%E0%B9%81%E0%B8%99%E0%B8%B0%E0%B9%81%E0%B8%99%E0%B8%A7%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B9%84%E0%B8%AD%E0%B8%97%E0%B8%B5%E0%B8%AA%E0%B8%B3%E0%B8%AB%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%99%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B9%86%208-12%20%E0%B8%A1%E0%B8%B4%E0%B8%96%E0%B8%B8%E0%B8%99%E0%B8%B2%E0%B8%A2%E0%B8%99%202560+http://www.itcamp.in.th%20" target="_blank">
        <div class="sidebar-item share-twitter">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </div>
      </a>
    </nav>

    <!-- Fullpage wrapper -->
    <section id="fullpage">

      <!-- Home block -->
      <section class="section home-block" data-anchor="home-block">
        <div class="content">
          <div class="logo">
            <img src="{{ $lazyModeDir }}/assets/frontend/images/logo.png" width="400" />
          </div>
          <h5>
            คณะเทคโนโลยีสารสนเทศ<br />
            สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง
          </h5>
          <h6>
            ได้รับเงินสนับสนุนจากงบประมาณแผ่นดินประจำปี 2560
          </h6>
        </div>
        <div class="waves">
          <div class="waving-blue"></div>
          <div class="waving-green"></div>
          <div class="waving-purple"></div>
        </div>
        <div class="help-text-swipedown">
          (เลื่อนลงเพื่อเริ่มต้น)
        </div>
      </section>

      <!-- Detail block -->
      <section class="section detail-block" data-anchor="detail-block">
        <div class="content">
          <h1 class="block-title">รายละเอียดค่าย</h1>
          <p>กลับมาอีกครั้ง! ค่ายไอทีแคมป์ ครั้งที่ 13 ค่ายแนะแนวคณะไอทีสำหรับน้อง ๆ ที่กำลังขึ้นชั้นเรียน ม.4-6 <br class="hidden-md-down" />
            ที่มีใจรักพร้อมเรียนรู้ทางด้านเทคโนโลยีไปกับพวกพี่ ๆ จากคณะไอทีลาดกระบัง <span class="br-0_5"></span>
            เมื่อไวรัสเริ่มพัฒนา ยุคของเทคโนโลยีกำลังจะเปลี่ยนไป! เมื่อเหล่าผู้พิทักษ์ตื่นขึ้นมาต้องเจอกับโลกไซเบอร์ที่เต็มไปด้วยไวรัส มาร่วมทีมปราบไวรัสวายร้ายทั้ง 5 ชนิดที่กำลังกัดกินโลกไซเบอร์ของเรากับ 5 ค่ายที่จะพัฒนาน้อง ๆ ไปสู่ทีมที่แข็งแกร่งอย่าง AppVira, GamePersky, NetworkTon, IoTSecure และ DataScan หากพร้อมแล้วก็มาร่วมเป็นส่วนหนึ่งในกระบวนการกำจัดไวรัสไปด้วยกัน!!</p>
          <div class="row justify-content-center overview-detail">
            <div class="col-lg-3 offset-lg-0 col-md-5">
              <img src="{{ $lazyModeDir }}/assets/frontend/images/home-regis.png" />
              <h3>รับสมัคร</h3>
              <span class="sub">20 มีนาคม - 8 พฤษภาคม 2560</span>
            </div>
            <div class="col-lg-3 col-md-5">
              <img src="{{ $lazyModeDir }}/assets/frontend/images/home-calendar.png" />
              <h3>วันจัดค่าย</h3>
              <span class="sub">8-12 มิถุนายน 2560</span>
            </div>
            <div class="col-lg-3 offset-lg-0 col-md-6">
              <img src="{{ $lazyModeDir }}/assets/frontend/images/home-place.png" />
              <h3>สถานที่</h3>
              <span class="sub font-weight-bold">IT<span class="text-orange">KMITL</span></span>
            </div>
          </div>
        </div>
      </section>

      <!-- supporter block -->
      <section class="section supporter-block" data-anchor="supporter-block">
        <div class="waves">
          <div class="waves-bg"></div>
          <div class="waving-blue"></div>
          <div class="waving-green"></div>
          <div class="waving-purple"></div>
        </div>
        <div class="content">
          <h1 class="block-title">ผู้สนับสนุน</h1>

            @if(count($sponsors['big']) > 0)
                <div class="justify-content-center supporters-list">
                    @foreach($sponsors['big'] as $img)
                        <div class="supporter-img"><img class="img-thumbnail" src="{{ $lazyModeDir }}/assets/sponsor/{{ $img }}" /></div>
                    @endforeach
                </div>
            @endif

            @if(count($sponsors['medium']) > 0)
                <div class="justify-content-center supporters-list medium">
                    @foreach($sponsors['medium'] as $img)
                        <div class="supporter-img"><img class="img-thumbnail" src="{{ $lazyModeDir }}/assets/sponsor/{{ $img }}" /></div>
                    @endforeach
                </div>
            @endif

            @if(count($sponsors['small']) > 0)
                <div class="justify-content-center supporters-list small">
                    @foreach($sponsors['small'] as $img)
                        <div class="supporter-img"><img class="img-thumbnail" src="{{ $lazyModeDir }}/assets/sponsor/{{ $img }}" /></div>
                    @endforeach
                </div>
            @endif

        </div>
        <div class="camp-connect" id="supporter-camp-connect-el"></div>
      </section>

      <!-- Camp block -->
      <section class="section camp-block" data-anchor="camp-block">

        <!-- Camp navigation -->
        <nav class="camp-nav hide">
          <ul>
            <li class="slide-link home" data-target="home"></li>
            <li class="slide-link app" data-target="app"></li>
            <li class="slide-link game" data-target="game"></li>
            <li class="slide-link network" data-target="network"></li>
            <li class="slide-link iot" data-target="iot"></li>
            <li class="slide-link datasci" data-target="datasci"></li>
          </ul>
        </nav>

        <!-- Camp Background (Parallax independent) -->
        <div class="camp-background">

        </div>

        <!-- Main slide -->
        <div class="slide home" data-anchor="home">
          <div class="content">
            <h1 class="block-title">ค่ายย่อย</h1>
            <div class="camp-characters">
              <img src="{{ $lazyModeDir }}/assets/frontend/images/camp-all-character-bg.png" class="camp-bg" />
              <img src="{{ $lazyModeDir }}/assets/frontend/images/camp-all-character-com.png" class="camp-comp" />
              <div class="slide-link camp-character camp-character-app" data-target="app">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/character-app.png" />
                <div class="camp-cloud app force-fredoka">AppVira</div>
              </div>
              <div class="slide-link camp-character camp-character-game" data-target="game">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/character-game.png" />
                <div class="camp-cloud game force-fredoka">GamePersky</div>
              </div>
              <div class="slide-link camp-character camp-character-network" data-target="network">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/character-network.png" />
                <div class="camp-cloud network force-fredoka">NetworkTon</div>
              </div>
              <div class="slide-link camp-character camp-character-iot" data-target="iot">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/character-iot.png" />
                <div class="camp-cloud iot force-fredoka">IoTSecure</div>
              </div>
              <div class="slide-link camp-character camp-character-datasci" data-target="datasci">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/character-datasci.png" />
                <div class="camp-cloud datasci force-fredoka">DataScan</div>
              </div>
            </div>
            <div class="camp-helper">
              @if(!$registrationEnd)
                (กดที่ตัวไวรัสเพื่อดูรายละเอียดค่ายและสมัครเข้าค่าย~)
              @else
                (กดที่ตัวไวรัสเพื่อดูประกาศผลของแต่ละค่าย~)
              @endif
            </div>
          </div>
        </div>

        <!-- App camp -->
        <div class="slide app-camp" data-anchor="app">
          <div class="slide-content">
            <div class="row">
              <div class="camp-image col-12 col-lg-6">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/camp-app-o.png" />
              </div>
              <div class="camp-detail col-12 col-lg-6">
                <div class="camp-detail-wrapper">
                  <span class="badge badge-pill badge-default">ค่ายย่อย Application Development</span>
                  <h2 class="camp-name">AppVira</h2>
                  <hr />
                  <p><span class="space-4"></span>ฉีกตำราเดิม ๆ และมาสร้างสรรค์สิ่งใหม่ในโลกความรู้แอปพลิเคชั่นกับ AppVira ค่ายที่จะพาน้อง ๆ ไปสร้างแอปพลิเคชั่นด้วยฝีมือตัวเองด้วยสุดยอดโปรแกรมอย่าง XCode บนระบบปฏิบัติการ iOS แล้วจะพบว่าเราก็สามารถสร้างสรรค์สิ่งต่าง ๆ ได้อีกมากมายเพียงแค่น้องลงมือทำ! <br />
                    <span class="space-4"></span>โอ้โห! ได้สร้างแอปพลิเคชั่นใหม่ ๆ ด้วยตัวเองอย่างนี้แถมมีพี่ ๆ ที่พร้อมจะสอนน้อง ๆ ให้ได้ความรู้ด้วย จะรอช้าทำไมกดปุ่มสมัครเลย!</p>
                  @if(!$registrationEnd)
                    <a href="{{ route('view.frontend.register', ['camp' => 'app']) }}" class="btn btn-regis-app">สมัครค่ายนี้</a>
                  @else
                    <a href="{{ route('view.frontend.announce', ['camp' => 'app']) }}" class="btn btn-regis-app">ดูประกาศผล</a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Game camp -->
        <div class="slide game-camp" data-anchor="game">
          <div class="slide-content">
            <div class="row">
              <div class="camp-image col-12 col-lg-6">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/camp-game-o.png" />
              </div>
              <div class="camp-detail col-12 col-lg-6">
                <div class="camp-detail-wrapper">
                  <span class="badge badge-pill badge-default">ค่ายย่อย Game Development</span>
                  <h2 class="camp-name">GamePersky</h2>
                  <hr />
                  <p><span class="space-4"></span>พร้อมกันหรือยัง? กับค่าย GamePersky ที่จะเปลี่ยนน้องจากผู้เล่นสู่ผู้สร้างบนเส้นทางแห่งสายเกมเมอร์ สร้างสรรค์เกมในแบบที่น้อง ๆ จินตนาการไว้ดั่งใจนึกด้วยโปรแกรม Construct 2 ที่จะช่วยน้องสรรสร้างเกมออกมาได้สุดแสนจะง่ายดายเพียงแค่คลิก ลากและวางเท่านั้น <br />
         	          <span class="space-4"></span>ว้าว! ได้ทั้งความรู้ ได้ทั้งประสบการณ์ในการทำเกมอีกอย่างนี้พลาดไม่ได้แล้ว! สมัครเลย แล้วมาร่วมกันเป็นผู้กล้าแห่ง GamePersky กันเถอะ</p>
                  @if(!$registrationEnd)
                    <a href="{{ route('view.frontend.register', ['camp' => 'game']) }}" class="btn btn-regis-game">สมัครค่ายนี้</a>
                  @else
                    <a href="{{ route('view.frontend.announce', ['camp' => 'game']) }}" class="btn btn-regis-game">ดูประกาศผล</a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Network camp -->
        <div class="slide network-camp" data-anchor="network">
          <div class="slide-content">
            <div class="row">
              <div class="camp-image col-12 col-lg-6">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/camp-network-o.png" />
              </div>
              <div class="camp-detail col-12 col-lg-6">
                <div class="camp-detail-wrapper">
                  <span class="badge badge-pill badge-default">ค่ายย่อย Network</span>
                  <h2 class="camp-name">NetworkTon</h2>
                  <hr />
                  <p><span class="space-4"></span>ท่องระบบเครือข่ายกับค่าย NetworkTon พาน้อง ๆ มาค้นหาและทำความเข้าใจความลับต่าง ๆ ของการทำงานบนโครงสร้างเครือข่ายที่ซับซ้อนกันอย่างง่ายดาย อีกทั้งยังได้ใช้โปรแกรมสุดเจ๋งอย่าง Cisco Packet Tracer โปรแกรมจำลองสร้างระบบเครือข่ายอย่างง่ายอีกด้วย <br />
                    <span class="space-4"></span>โห! ได้ความรู้ในระดับมหาวิทยาลัยที่เข้าใจง่ายอย่างนี้ อีกทั้งยังมีพี่ ๆ ที่สุดแสนจะน่ารักคอยช่วยสอนและยังได้ทดลองสร้างระบบจำลองด้วยตัวเองอีก ประสบการณ์อย่างนี้หาไม่ได้จากที่ไหนอีกแล้วอย่ารอช้าเลย! รีบมาสมัครกัน</p>
                  @if(!$registrationEnd)
                    <a href="{{ route('view.frontend.register', ['camp' => 'network']) }}" class="btn btn-regis-network">สมัครค่ายนี้</a>
                  @else
                    <a href="{{ route('view.frontend.announce', ['camp' => 'network']) }}" class="btn btn-regis-network">ดูประกาศผล</a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- IoT camp -->
        <div class="slide iot-camp" data-anchor="iot">
          <div class="slide-content">
            <div class="row">
              <div class="camp-image col-12 col-lg-5">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/camp-iot-o.png" />
              </div>
              <div class="camp-detail col-12 col-lg-7">
                <div class="camp-detail-wrapper">
                  <span class="badge badge-pill badge-default">ค่ายย่อย IoT (Internet of Things)</span>
                  <h2 class="camp-name">IoTSecure</h2>
                  <hr />
                  <p><span class="space-4"></span>ร่วมมือกันสร้างไอเดียชิ้นใหม่เพื่อต่อต้านไวรัสในโลกไซเบอร์ด้วยเทคโนโลยี Internet of Things มาสร้างสรรค์ไอเดียเจ๋ง ๆ กันได้ที่ค่าย IoTSecure ที่จะพาน้องๆ เรียนรู้ในสิ่งประดิษฐ์ที่ทันสมัยไม่ซ้ำใคร รวมถึงได้ทดลองใช้อุปกรณ์เสริมไม่ว่าจะเป็น Arduino Uno R3, ESP8266 และอื่น ๆ อีกมากมาย <br />
                    <span class="space-4"></span>ว้าว! มีอุปกรณ์แปลกๆ ให้เล่นด้วย แถมยังได้สร้างสิ่งประดิษฐ์จากไอเดียเจ๋ง ๆ อีก รู้อย่างนี้แล้วรีบกดปุ่มสมัครแล้วเอาไอเดียของน้องมาแชร์ให้โลกได้รู้กันเถอะ!</p>
                  @if(!$registrationEnd)
                    <a href="{{ route('view.frontend.register', ['camp' => 'iot']) }}" class="btn btn-regis-iot">สมัครค่ายนี้</a>
                  @else
                    <a href="{{ route('view.frontend.announce', ['camp' => 'iot']) }}" class="btn btn-regis-iot">ดูประกาศผล</a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- DataSci camp -->
        <div class="slide datasci-camp" data-anchor="datasci">
          <div class="slide-content">
            <div class="row">
              <div class="camp-image col-12 col-lg-5">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/camp-datasci-o.png" />
              </div>
              <div class="camp-detail col-12 col-lg-7">
                <div class="camp-detail-wrapper">
                  <span class="badge badge-pill badge-default">ค่ายย่อย Data Science</span>
                  <h2 class="camp-name">DataScan</h2>
                  <hr />
                  <p><span class="space-4"></span>ค่ายน้องใหม่ไฟแรงอย่างค่าย DataScan จะพาน้อง ๆ มาช่วยกันไขความลับแห่งข้อมูลที่ซุกซ่อนอยู่รอบตัวน้อง ๆ ด้วยตัวช่วยสุดเจ๋งอย่างโปรแกรม Rapid miner อีกทั้งยังมีพี่ ๆ ที่พร้อมจะให้คำปรึกษาและสอนน้อง ๆ ในปัญหาที่น้องสงสัยอีกมากมายเลยล่ะ แล้วน้องจะค้นพบว่าข้อมูลที่อยู่รอบตัวน้องนั้นมีประโยชน์มากกว่าที่น้องเคยคิด! <br />
	                   <span class="space-4"></span>พลาดไม่ได้! อย่างนี้ต้องลองมาเรียนแล้ว มาร่วมเป็นส่วนหนึ่งไปกับการขุดค้นหาข้อมูลกับค่าย DataScan กันเถอะ อย่ารอช้ากดปุ่มสมัครกันได้เลย!</p>
                  @if(!$registrationEnd)
                    <a href="{{ route('view.frontend.register', ['camp' => 'datasci']) }}" class="btn btn-regis-datasci">สมัครค่ายนี้</a>
                  @else
                    <a href="{{ route('view.frontend.announce', ['camp' => 'datasci']) }}" class="btn btn-regis-datasci">ดูประกาศผล</a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

      <!-- Timeline block -->
      <section class="section timeline-block" data-anchor="timeline-block">
        <div class="camp-connect-bg" id="timeline-camp-connect-bg-el"></div>
        <div class="camp-connect" id="timeline-camp-connect-el"></div>
        <div class="content">
          <h1 class="block-title">กำหนดการ</h1>
          <div class="timeline-wrapper row">
            <div class="timeline-1 col">
              <img src="{{ $lazyModeDir }}/assets/frontend/images/tv-1.png" height="200" />
              <span class="timeline-date">20 มี.ค. 2560</span>
              <span class="timeline-sub">วันรับสมัคร</span>
            </div>
            <div class="timeline-2 col">
              @if(!$timeline['registration'])
                <img src="{{ $lazyModeDir }}/assets/frontend/images/tv-2-wait.gif" height="200" />
              @else
                <img src="{{ $lazyModeDir }}/assets/frontend/images/tv-2.png" height="200" />
              @endif
              <span class="timeline-date">8 พ.ค. 2560</span>
              <span class="timeline-sub">วันปิดรับสมัคร</span>
            </div>
            <div class="w-100 hidden-xs-down hidden-md-up"></div>
            <div class="timeline-3 col">
              @if(!$timeline['announce'])
                <img src="{{ $lazyModeDir }}/assets/frontend/images/tv-3-wait.gif" height="200" />
              @else
                <img src="{{ $lazyModeDir }}/assets/frontend/images/tv-3.png" height="200" />
              @endif
              <span class="timeline-date">15 พ.ค. 2560</span>
              <span class="timeline-sub">ประกาศผลและโอนเงินยืนยันสิทธิ์</span>
            </div>
            <div class="timeline-4 col">
              @if(!$timeline['confirm'])
                <img src="{{ $lazyModeDir }}/assets/frontend/images/tv-4-wait.gif" height="200" />
              @else
                <img src="{{ $lazyModeDir }}/assets/frontend/images/tv-4.png" height="200" />
              @endif
              <span class="timeline-date">22 พ.ค. 2560</span>
              <span class="timeline-sub">วันสุดท้ายของการยืนยันสิทธิ์</span>
            </div>
            <div class="w-100 hidden-xs-down hidden-md-up"></div>
            <div class="timeline-5 col">
              @if(!$timeline['camp_day'])
                <img src="{{ $lazyModeDir }}/assets/frontend/images/tv-5-wait.gif" height="200" />
              @else
                <img src="{{ $lazyModeDir }}/assets/frontend/images/tv-5.png" height="200" />
              @endif
              <span class="timeline-date">8-12 มิ.ย. 2560</span>
              <span class="timeline-sub force-fredoka">ITCAMP13 Day!</span>
            </div>
          </div>
        </div>
      </section>

      <!-- Gallery block -->
      <section class="section gallery-block" data-anchor="gallery-block">
        <div class="content">
          <h1 class="block-title">ภาพกิจกรรม</h1>
          <div class="wrapper">
            <div class="grid">
              <div class="grid-item col2x1">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/1.jpg" />
              </div>
              <div class="grid-item col1x1">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/2.jpg" />
              </div>
              <div class="grid-item col1x1">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/3.jpg" />
              </div>
              <div class="grid-item col2x2">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/4.jpg" />
              </div>
              <div class="grid-item col1x1">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/5.jpg" />
              </div>
              <div class="grid-item col1x1">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/6.jpg" />
              </div>
              <div class="grid-item col2x2">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/7.jpg" />
              </div>
              <div class="grid-item col1x1">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/8.jpg" />
              </div>
              <div class="grid-item col1x1">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/9.jpg" />
              </div>
              <div class="grid-item col1x1">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/10.jpg" />
              </div>
              <div class="grid-item col1x1">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/11.jpg" />
              </div>
              <div class="grid-item col1x1">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/12.jpg" />
              </div>
              <div class="grid-item col1x1">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/13.jpg" />
              </div>
              <div class="grid-item col1x1 hidden-sm-down hidden-lg-up">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/14.jpg" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Recommend block -->
      <section class="section recommend-block" data-anchor="recommend-block">
        <div class="content">
          <h1 class="block-title">คำนิยม</h1>
          <div class="recommend-list">

            <div class="recommend-group left">
              <div class="recommend-picture">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/p_bank.jpg" />
                <div class="recommend-picture-frame"></div>
              </div>
              <p class="recommend-detail">
                ค่าย <b>"ไอทีแคมป์"</b> เป็นค่ายไอทีที่เปิดโอกาสให้น้อง ๆ ได้เข้ามาเรียนรู้ได้สัมผัสบรรยากาศและสถานที่ภายในรั้วมหาวิทยาลัยและที่สำคัญคือได้มาค้นหาอนาคต มีหลายคนที่ผ่านค่ายนี้ไปแล้วค้นพบว่าตนเองชื่นชอบด้านเทคโนโลยีขนาดไหน ชอบสถานที่นี้หรือไม่ นอกจากจะได้ความรู้ความสนุกสนานและค้นหาตนเองแล้ว ยังได้พบเจอกับเพื่อนและพี่ใหม่และเกิดเป็นมิตรภาพใหม่ที่ไม่สามารถหาที่ใดได้ <b>ขอฝากไอทีแคมป์ครั้งนี้ไว้ในใจของน้อง ๆ ด้วยนะครับ</b> <span class="br-0_5"></span>
                <b class="d-name">นายวิชวิทย์ นิลสวัสดิ์ (พี่แบงค์)</b> <br />
                ITCAMP 10 - ประธานค่าย <br />
                ITCAMP 9, 11, 12 - พี่ค่าย <br />
                ITCAMP 8 - น้องค่าย Network plus plus <br />
                ปัจจุบัน Project Engineer บริษัท Advanced Information Technology PCL <br />
                <span class="recommend-triangle"></span>
              </p>
            </div>

            <div class="recommend-group right">
              <p class="recommend-detail">
                <b>ไอทีแคมป์</b> คือค่ายที่เป็นจุดเริ่มต้นของความผูกพันธ์ที่พี่มีต่อคณะไอทีแห่งนี้ ทั้งสาระความรู้ ที่ทำให้พี่ได้ค้นพบเส้นทางของตัวเองทางด้านเทคโนโลยี ซึ่งสำหรับใครที่มีพื้นฐานหรือชอบในด้านนี้อยู่แล้ว ก็จะได้มาพบเจอกับเพื่อนใหม่ ๆ ที่สนใจในด้านเดียวกัน แต่สำหรับใครที่ยังหาตัวเองไม่เจอว่าชอบอะไร ก็มาลองค้นหาตัวเองจากค่ายนี้ได้เช่นกัน นอกจากสาระความรู้แล้ว ก็ยังมีความสนุกสนานจากกิจกรรมต่าง ๆ รวมถึงการดูแลเอาใจใส่จากจากพี่ ๆ ภายในคณะ ที่จะทำให้น้องรู้สึกเหมือนเป็นส่วนหนึ่งของครอบครัวไอทีแห่งนี้เลย แล้วน้องจะรู้ว่า 5 วัน 4 คืนนี้มันคุ้มจริง ๆ จนไม่อยากกลับเลยล่ะ <b>และนี่ก็คือความทรงจำของพี่กับค่ายนี้ที่อยากให้น้อง ๆ ได้ลองมาสัมผัสกันดู แล้วน้องจะไม่มีทางลืมมันได้เล๊ยยยย! #เสียงสู๊งง</b> <span class="br-0_5"></span>
                <b class="d-name">นายธนวัฒน์ กุสูงเนิน (พี่อาร์มี่)</b> <br />
                ITCAMP 12 - ประธานค่าย <br />
                ITCAMP 11 - พี่ค่าย <br />
                ITCAMP 10 - น้องค่าย Charming Application <br />
                <span class="recommend-triangle"></span>
              </p>
              <div class="recommend-picture">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/p_army.jpg" />
                <div class="recommend-picture-frame"></div>
              </div>
            </div>

            <div class="recommend-group left">
              <div class="recommend-picture">
                <img src="{{ $lazyModeDir }}/assets/frontend/images/p_film.jpg" />
                <div class="recommend-picture-frame"></div>
              </div>
              <p class="recommend-detail">
                ช่วงมัธยมปลายนั้นถือว่าเป็นช่วงหัวเลี้ยวหัวต่อของชีวิต สำหรับน้อง ๆ คนไหนที่ยังไม่รู้ว่าจะเรียนสายไหนหรือว่าอยากสัมผัสประสบการณ์จริงค่าย <b>ITCAMP</b> นี้สามารถตอบโจทย์น้องสายคอมพิวเตอร์ได้เป็นอย่างดี ค่ายนี้ได้ทั้งความสนุก ความรู้ ให้น้อง ๆ ได้ค้นหาตัวเองและสัมผัสบรรยากาศคณะไอทีของเราจริง ๆ ตัวพี่เองก็ได้เข้าค่ายในช่วงมัธยมปลายมาหลายค่ายและค่ายนี้เป็นหนึ่งในค่ายที่ประทับใจที่สุดที่เคยเข้ามาเลยทีเดียว <b>ใครเป็นสายคอมพิวเตอร์พลาดไม่ได้เลยครับผม</b> <span class="br-0_5"></span>
                <b class="d-name">นายพัชรพล จอกสมุทร (พี่ฟิล์ม)</b> <br />
                ITCAMP 12 - พี่ค่าย <br />
                ITCAMP 10 - น้องค่าย Secret media <br />
                <span class="recommend-triangle"></span>
              </p>
            </div>

          </div>
        </div>
        <div class="line-dot"></div>
      </section>

      <!-- FAQ block -->
      <section class="section faq-block" data-anchor="faq-block">
        <div class="line-dot"></div>
        <div class="content">
          <h1 class="block-title">ถามตอบ</h1>
          <div class="faq-list">
            <div class="faq-group">
              <div class="faq-question">
                <div class="avatar"></div>
                <p>
                  Q: ค่ายนี้จัดขึ้นที่ไหน อย่างไร ?
                </p>
              </div>
              <div class="faq-answer">
                <p>
                  A: ค่ายนี้จัดที่คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง ตลอดระยะเวลา 5 วัน 4 คืน การเดินทางมายังคณะเทคโนโลยีสารสนเทศ สามารถดูได้ที่<a href="http://www.it.kmitl.ac.th/" target="_blank">เว็บไซต์ของคณะ</a>ได้เลยนะครับ
                </p>
                <div class="avatar"></div>
              </div>
            </div>
            <div class="faq-group">
              <div class="faq-question">
                <div class="avatar"></div>
                <p>
                  Q: มีค่าใช้จ่ายหรือไม่ จำนวนเท่าไหร่ และชำระตอนไหน สละสิทธิ์ได้เงินคืนหรือไม่ ?
                </p>
              </div>
              <div class="faq-answer">
                <p>
                  A: มีค่าใช้จ่าย จำนวน 200 บาท โดยชำระตามเวลาที่กำหนด (8 - 19 พฤษภาคม 2560) หากน้องคนใดจะสละสิทธิ์ สามารถกดปุ่มสละสิทธิ์ที่หน้าเว็บและขอให้น้อง ๆ คิดให้รอบคอบก่อนจะชำระเงิน เพราะหากน้องสละสิทธิ์จะไม่ได้รับเงินคืนครับและหากโอนเงินไม่ทันภายในวันที่กำหนดจะถือว่าสละสิทธิ์นะครับ
                </p>
                <div class="avatar"></div>
              </div>
            </div>
            <div class="faq-group">
              <div class="faq-question">
                <div class="avatar"></div>
                <p>
                  Q: ต้องพักค้างคืนที่ค่ายหรือเปล่า ?
                </p>
              </div>
              <div class="faq-answer">
                <p>
                  A: ใช่ครับ น้อง ๆ จะได้นอนพักในห้องพักที่พี่ ๆ จัดเตรียมไว้ให้ที่คณะ ซึ่งติดแอร์เย็นฉ่ำ สะดวกสบาย ง่ายต่อการทำกิจกรรมของน้อง ๆ และที่สำคัญพี่ ๆ จะดูแลน้องได้ตลอด 24 ชั่วโมงตลอดโครงการ น้องๆ สบายใจได้ครับและน้อง ๆ จะไม่ได้รับอนุญาตให้ออกจากบริเวณที่จัดกิจกรรม ยกเว้นในกรณีที่ติดธุระเร่งด่วนและมีผู้ปกครองมารับด้วยตนเองครับ
                </p>
                <div class="avatar"></div>
              </div>
            </div>
            <div class="faq-group">
              <div class="faq-question">
                <div class="avatar"></div>
                <p>
                  Q: สมัครมากกว่าหนึ่งค่ายย่อยหรือเปลี่ยนไปอยู่ค่ายอื่นได้หรือไม่ ?
                </p>
              </div>
              <div class="faq-answer">
                <p>
                  A: ไม่สามารถสมัครได้ครับ ดังนั้นน้อง ๆ ควรจะตัดสินใจให้ชัดเจนว่าจะสมัครค่ายไหน เพราะช่วงที่มีการเรียนการสอน แต่ละค่ายจะจัดการเรียนการสอนแยกกันอย่างชัดเจน
                </p>
                <div class="avatar"></div>
              </div>
            </div>
            <div class="faq-group">
              <div class="faq-question">
                <div class="avatar"></div>
                <p>
                  Q: จำเป็นต้องมีความรู้มาก่อนหรือไม่ ?
                </p>
              </div>
              <div class="faq-answer">
                <p>
                  A: ไม่จำเป็นครับ ขอแค่เพียงน้อง ๆ มีความสนใจและใฝ่รู้ก็พอครับ ที่เหลือพี่ ๆ จะเป็นคนช่วยสอนน้อง ๆ เอง
                </p>
                <div class="avatar"></div>
              </div>
            </div>
            <div class="faq-group">
              <div class="faq-question">
                <div class="avatar"></div>
                <p>
                  Q: ค่ายรับระดับชั้นไหนบ้าง ปวช. สามารถสมัครได้หรือเปล่า ?
                </p>
              </div>
              <div class="faq-answer">
                <p>
                  A: ค่ายนี้จะรับเฉพาะน้อง ๆ ที่กำลังศึกษาอยู่ระดับชั้นมัธยมศึกษาตอนปลายในทุกแผนการเรียนและปวช. เท่านั้นครับ
                </p>
                <div class="avatar"></div>
              </div>
            </div>
            <div class="faq-group">
              <div class="faq-question">
                <div class="avatar"></div>
                <p>
                  Q: ค่าย IoT คืออะไร ?
                </p>
              </div>
              <div class="faq-answer">
                <p>
                  A: IoT (Internet of things) คือเทคโนโลยีที่เชื่อมทุกสิ่งทุกอย่างเข้าด้วยกันบนโลกอินเทอร์เน็ต ทำให้มนุษย์สามารถสั่งการ ควบคุมใช้งาน อุปกรณ์ต่างๆ ผ่านทางเครือข่ายอินเทอร์เน็ตได้ เช่น หากเราอยู่นอกบ้านแล้วอยากต้มน้ำร้อน เราก็สามารถสั่งให้กาต้มน้ำเพิ่มอุณหภูมิผ่านโทรศัพท์มือถือเพื่อทำให้น้ำเดือดได้ โดยในค่าย IoT น้องๆ จะได้ลองเขียนโปรแกรมควบคุมอุปกรณ์เหล่านี้อีกด้วย
                </p>
                <div class="avatar"></div>
              </div>
            </div>
            <div class="faq-group">
              <div class="faq-question">
                <div class="avatar"></div>
                <p>
                  Q: ค่าย Data Science คืออะไร
                </p>
              </div>
              <div class="faq-answer">
                <p>
                  A: Data Science หรือแปลเป็นไทยว่า วิทยาศาสตร์ข้อมูล คือ การขุดค้นหาองค์ความรู้ที่ซ่อนอยู่ในข้อมูลต่าง ๆ โดยใช้สถิติ อัลกอริทึม และสมการทางคณิตศาสตร์ ยกตัวอย่างเช่น แผนที่ Google Maps ที่รู้สภาพการจราจรจากระบบ GPS ในโทรศัพท์เรานี่แหละ ดังนั้นในค่ายนี้น้องๆ จะได้ทดลองขุดค้นหาองค์ความรู้ข้อมูลจากแหล่งข้อมูลจริงๆ ซึ่งใครจะรู้สิ่งที่น้องค้นพบในค่ายนี้อาจจะเปลี่ยนโลกของเราไปเลยก็ได้!
                </p>
                <div class="avatar"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-contact">
          <h1 class="block-title">ติดต่อเรา</h1>
          <div class="wrapper">
            <div class="row contact-detail">
              <div class="contact-left col-12 col-lg-6">
                <ul class="force-fredoka">
                  <li><a href="https://www.facebook.com/itcampKMITL" target="_blank"><span class="box facebook"><i class="fa fa-facebook" aria-hidden="true"></i> fb.com/itcampKMITL</span></a></li>
                  <li><a href="https://twitter.com/ITCAMP" target="_blank"><span class="box twitter"><i class="fa fa-twitter" aria-hidden="true"></i> @ITCAMP</span></a></li>
                  <li><a href="mailto:itcamp.it.kmitl@gmail.com" target="_blank"><span class="box email"><i class="fa fa-envelope" aria-hidden="true"></i> itcamp.it.kmitl@gmail.com</span></a></li>
                </ul>
              </div>
              <div class="contact-right col-12 col-lg-6">
                <ul class="contact-list">
                  <li>
                    <span class="contact-name">P’ ชารีฟ</span>
                    <span class="contact-tel">081-585-6504</span>
                  </li>
                  <li>
                    <span class="contact-name">P’ กรณ์</span>
                    <span class="contact-tel">099-217-8354</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row sharing-link">
              <div class="col-12">
                  <h3 class="block-title">ร่วมประชาสัมพันธ์กับเรา</h3>
                  <a href="{{ route('view.frontend.advertise') }}" class="btn btn-sharing-link">คลิก</a>

                  <hr />

                  <h4>เว็บไซต์ที่ร่วมประชาสัมพันธ์</h4>

                  @if(count($exchangers['banner']) > 0)
                      <div class="justify-content-center exchangers-list-banner">
                          @foreach($exchangers['banner'] as $exchanger)
                            <a href="{{ $exchanger->url }}" target="_blank"><div class="exchanger"><img class="img-thumbnail" src="{{ $lazyModeDir }}/storage/{{ $exchanger->banner }}" /></div></a>
                          @endforeach
                      </div>
                  @endif

                  @if(count($exchangers['text']) > 0)
                      <div class="justify-content-center exchangers-list-text">
                          @foreach($exchangers['text'] as $exchanger)
                            <a href="{{ $exchanger->url }}" target="_blank"><div class="exchanger">{{ $exchanger->title }}</div></a>
                          @endforeach
                      </div>
                  @endif

              </div>
            </div>
          </div>
        </div>
      </section>

    </section>

    <script type="text/javascript" src="assets/frontend/js/app.js?v={{ (int)microtime(true) }}"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-98361289-1', 'auto');
        ga('send', 'pageview');
    </script>
  </body>
</html>

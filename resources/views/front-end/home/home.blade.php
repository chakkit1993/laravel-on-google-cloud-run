@extends('front-end.master')

@section('main-body')


<!--==========================
    Intro Section
  ============================-->
<section id="intro">
  <div class="intro-container wow fadeIn">
    <h1 class="mb-4 pb-0">Chiang Dao <br><span>Enduro</span> Challenge</h1>
    <p class="mb-4 pb-0">27 November 2020 , Chiang Dao ,Chiang Mai,Thailand</p>
    <a href="https://www.youtube.com/watch?v=rVu0zmCyy6E" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
    <a href="#about" class="about-btn scrollto">About The Event</a>
  </div>
</section>

<main id="main">

  <!--==========================
      About Section
    ============================-->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2>About The Event</h2>
          <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut
            accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt inventore in
            est ut optio sequi unde.</p>
        </div>
        <div class="col-lg-3">
          <h3>Where</h3>
          <p>Downtown Conference Center, New York</p>
        </div>
        <div class="col-lg-3">
          <h3>When</h3>
          <p>Monday to Wednesday<br>10-12 December</p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
      Speakers Section
    ============================-->
  <!-- <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Event Speakers</h2>
          <p>Here are some of our speakers</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="images/speakers/1.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Brenden Legros</a></h3>
                <p>Quas alias incidunt</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="images/speakers/2.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Hubert Hirthe</a></h3>
                <p>Consequuntur odio aut</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="images/speakers/3.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Cole Emmerich</a></h3>
                <p>Fugiat laborum et</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section> -->





  <!--==========================
     Leaderboard Section
    ============================-->
  <section id="leaderboard" class="section-with-bg wow fadeInUp">
  <div class="row">
  <div class="col-lg-12 col-md-12">
  @include('front-end.home.leaderboard-table') 
</div>
  </div>


  </section>
<?php
 $facebook = "https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Ffb.watch%2F3JAfx76Fdf%2F&width=720&show_text=false&appId=560368181293170&height=405"; 
 $youtube = "https://www.youtube.com/embed/SUfw3HVyZm4"; 
  ?>
  <section id="live" class="section-with-bg wow fadeInUp">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=560368181293170&autoLogAppEvents=1" nonce="YlJHZFSJ"></script>

    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-6"></div>
        <div class="col-lg-8 col-md-6 ">

        
        <iframe src='{{$facebook}}' width="100%" height="480" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
  
        </div>
        <div class="col-lg-2 col-md-6"></div>
      </div>

    </div>

  </section>
  @include('front-end.home.Gallery-section')
  @include('front-end.home.Sponsors-section')









</main>




<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

@endsection
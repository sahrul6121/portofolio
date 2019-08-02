@extends('layouts.app-porto')

@section('content')
<section class="first" id="first">
  <div class="title-first">
          <a>Sahrul </a><a style="color:#ed61d1;">Ramadan</a>
  </div>
  <div class="first-content" data-aos="fade-up">
  <a style="color:white;font-size:50px;">MY PORTOFOLIO DUDE <br>
      <div class="content" data-aos="fade-up">
        <span class="card-icon">
          <img class="profile" style="height:180px;width:170px;"></i>
        </span>
        <a style="color:#8C43FF;font-size:30px;">DIV</a> <a style="font-size:20px;">/ PROFILE</a><br>
        <hr style="weight:40px;">
        <div class="first-title">
          <div class="first-title-text">
            BIODATA
          </div>
        </div>
        <div class="first-text">
          Name    : Sahrul Ramadan<br>
          Age     : 17<br>
          Gender  : Man<br>
          Address : Jl.Gunung Kareumbi<br>
        </div>
        
        
        <div class="container">

        </div>
      </div>
  </div>
</section>
<section class="second" id="second">
  <div class="second-content" data-aos="fade">
    <div class="title" data-aos="fade-up">
        MY SKILL
    </div>
    <div class="row">
      <div class="col-sm-6">
        <center>
        <div class="card1" data-aos="fade-right">
          <h3>LARAVEL</h3>
          <img class="laravel" style="height:20px;width:300px;">
          <div class="go-corner" href="#">
            
          </div>
        </div>
        </center>
      </div>
      <div class="col-sm-6">
        <center>
        <div class="card1" data-aos="fade-right">
          <h3>CSS</h3>
          <img class="css" style="height:20px;width:300px;">
          <div class="go-corner" href="#">
            
          </div>
        </div>
        </center>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <center>
        <div class="card1" data-aos="fade-right">
          <h3>VUE JS</h3>
          <img class="vuejs" style="height:20px;width:300px;">
          <div class="go-corner" href="#">
            
          </div>
        </div>
        </center>
      </div>
      <div class="col-sm-6">
        <center>
        <div class="card1" data-aos="fade-right">
          <h3>HTML</h3>
          <img class="html" style="height:20px;width:300px;">
          <div class="go-corner" href="#">
            
          </div>
        </div>
        </center> 
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <center>
        <div class="card1" data-aos="fade-right">
          <h3>PHP</h3>
          <img class="php" style="height:20px;width:300px;">
          <div class="go-corner" href="#">
            
          </div>
        </div>
        </center>
      </div>
      <div class="col-sm-6">
        <center>
        <div class="card1" data-aos="fade-right">
          <h3>JAVA SCRIPT</h3>
          <img class="javascript" style="height:20px;width:300px;">
          <div class="go-corner" href="#">
            
          </div>
        </div>
        </center>
      </div>
    </div>
  </div>
</section>
<section class="three" id="three">
  <div class="three-title" data-aos="fade">
      <div class="three-title-2" data-aos="fade-up">
        MY RECENT PROJECT
      </div>
  </div>
  <div class="row">
    <div class="col-sm-6" style="height:400px;padding:0px;">
      <center>
        <div class="card-1" data-aos="zoom-in">
          <div class="image">
            <img class="workline" style="height:100%;width:100%;"/>
          </div>
          <div class="details">
            <div class="center">
              <h1>WORK LINE<br><span>web app</span></h1>
              <ul>
                <li><a href="{{ url('/home-w1') }}">VIEW</a></li>
              </ul>
            </div>
          </div>
        </div>
      </center>
    </div>
    <div class="col-sm-6">
      <center>
        <div class="card-1" data-aos="zoom-in">
          <div class="image">
            <img class="kim" style="height:100%;width:100%;"/>
          </div>
          <div class="details">
            <div class="center">
              <h1>KIM<br><span>web app</span></h1>
              <ul>
                <li><a href="{{ url('/home-w2') }}">VIEW</a></li>
              </ul>
            </div>
          </div>
        </div>
      </center>
    </div>
  </div>
  <div class="row" style="height:400px;padding:0px;">
    <div class="col-sm-6">
      <center>
        <div class="card-1" data-aos="zoom-in">
          <div class="image">
            <img class="inventaris" style="height:100%;width:100%;"/>
          </div>
          <div class="details">
            <div class="center">
              <h1>INVENTARIS<br><span>web app</span></h1>
              <ul>
                <li><a href="{{ url('/home-w3') }}">VIEW</a></li>
              </ul>
            </div>
          </div>
        </div>
      </center>
    </div>
    <div class="col-sm-6">
      <center>
        <div class="card-1" data-aos="zoom-in">
          <div class="image">
          <img class="stmik" style="height:100%;width:100%;"/>
          </div>
          <div class="details">
            <div class="center">
              <h1>STMIK<br><span>web page</span></h1>
              <ul>
                <li><a href="{{ url('/home-w4') }}">VIEW</a></li>
              </ul>
            </div>
          </div>
        </div>
      </center>
    </div>
  </div>
</section>
<footer class="site-footer" data-aos="fade-up" id="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">This Site is My portofolio</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Component</h6>
            <ul class="footer-links">
              <li><a>Laravel</a></li>
              <li><a>Css</a></li>
              <li><a>Java Script</a></li>
              <li><a>Html</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2019 All Rights Reserved by 
        <a href="#">Sahrul</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
@endsection
  <!-- <div class="item" data-aos="fade-up">1</div>
  <div class="item" data-aos="fade-down">2</div>
  <div class="item" data-aos="fade-right">3</div>
  <div class="item" data-aos="fade-left">4</div>

  <div class="item" data-aos="zoom-in">5</div>
  <div class="item" data-aos="zoom-out">6</div> -->
  <!-- <div class="item" data-aos="slide-up">7</div>

<div class="item" data-aos="flip-up">8</div>
<div class="item" data-aos="flip-down">9</div>
<div class="item" data-aos="flip-right">10</div>
<div class="item" data-aos="flip-left">11</div> -->
<!-- <center>
        <div class="card-1">
          <div class="image">
            <img src="http://1.bp.blogspot.com/-EhPr4LXcywE/Udr594sPHTI/AAAAAAAAAJ4/Tv4y4CBLTPM/s400/Cristina-Otero-2.jpg"/>
          </div>
          <div class="details">
            <div class="center">
              <h1>WORK LINE<br><span>web app</span></h1>
              <ul>
                <li><a href="#">VIEW</a></li>
              </ul>
            </div>
          </div>
        </div>
      </center> -->
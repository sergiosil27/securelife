@extends('layouts.home')

@section('title', 'Home')


@section('content')
<div class="container">
    <div class="row">
      <div class="service">
        <div class="col-md-6 col-md-offset-3">
          <div class="text-center">
            <h2>Services</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br> vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam <br>
            </p>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>

  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
            <h4>Responsive</h4>
            <div class="icon">
              <i class="fa fa-heart-o fa-3x"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras</p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
            <h4>Multi Purpose</h4>
            <div class="icon">
              <i class="fa fa-desktop fa-3x"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras</p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
            <h4>Easy Customize</h4>
            <div class="icon">
              <i class="fa fa-location-arrow fa-3x"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras</p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="2.2s">
            <h4>Quick Support</h4>
            <div class="icon">
              <i class="fa fa-laptop fa-3x"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras</p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="/css/set1.css" />
    <link href="/css/overwrite.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
@stop

@section('js')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/jquery.isotope.min.js"></script>
    <script src="/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="/js/fliplightbox.min.js"></script>
    <script src="/js/functions.js"></script>
    <script type="text/javascript">
      $('.portfolio').flipLightBox()
    </script>
@stop

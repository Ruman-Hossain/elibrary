@extends('layouts.navbar')
@section('content')
      <!-- MENU SECTION END-->
      <div class="content-wrapper">
       <div class="container">
        <div class="row pad-botm">
          <div class="col-md-12">
            <h4 class="header-line" style="color:white;">DASHBOARD</h4>

          </div>

        </div>

        <div class="row">

         <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="alert alert-success back-widget-set text-center">
            <i class="fa fa-book fa-5x"></i>


            <h3 style="color:white;"></h3>
            <span style="color:white;">Available Contents</span>
          </div>
        </div>

        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="alert alert-danger back-widget-set text-center">
            <i class="fa fa-users fa-5x"></i>

            <h3 style="color:white;"></h3>
            <span style="color:white;">Registered Students</span>
          </div>
        </div>

       <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="alert alert-success back-widget-set text-center">
          <i class="fa fa-user fa-5x"></i>


          <h3 style="color:white;"></h3>
          <span style="color:white;">Authors Listed</span>
        </div>
      </div>


      <div class="col-md-3 col-sm-3 rscol-xs-6">
        <div class="alert alert-info back-widget-set text-center">
          <i class="fa fa-file-archive-o fa-5x"></i>

          <h3 style="color:white;"> </h3>
          <span style="color:white;">Listed Categories</span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-3 rscol-xs-6">
        <div class="alert alert-info back-widget-set text-center">
          <i class="fa fa-list-alt fa-5x"></i>


          <h3 style="color:white;"> </h3>
          <span style="color:white;">Listed Sub Categories</span>
        </div>
      </div>

        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="alert alert-success back-widget-set text-center">
            <i class="fa fa-users fa-5x"></i>

            <h3 style="color:white;"></h3>
            <span style="color:white;">Active Students</span>
          </div>
        </div>

        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="alert alert-danger back-widget-set text-center">
            <i class="fa fa-ban fa-5x"></i>

            <h3 style="color:white;"></h3>
            <span style="color:white;">Blocked Students</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="alert alert-success back-widget-set text-center">
            <i class="fa fa-adn fa-5x"></i>

            <h3 style="color:white;"></h3>
            <span style="color:white;">Total Contributors</span>
          </div>
        </div>

    </div>             

    <div class="row">

      <div class="col-md-10 col-sm-8 col-xs-12 col-md-offset-1">
        <div id="carousel-example" class="carousel slide slide-bdr" data-ride="carousel" >

          <div class="carousel-inner">
            <div class="item active">

              <img src="{{asset('public/assets/img/1.jpg')}}" alt="" />

            </div>
            <div class="item">
              <img src="{{asset('public/assets/img/2.jpg')}}" alt="" />

            </div>
            <div class="item">
              <img src="{{asset('public/assets/img/3.jpg')}}" alt="" />

            </div>
          </div>
          <!--INDICATORS-->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example" data-slide-to="1"></li>
            <li data-target="#carousel-example" data-slide-to="2"></li>
          </ol>
          <!--PREVIUS-NEXT BUTTONS-->
          <a class="left carousel-control" href="#carousel-example" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
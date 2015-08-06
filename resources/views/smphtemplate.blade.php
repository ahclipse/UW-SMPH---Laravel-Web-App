<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Link to fvicon mini-icons-->
    <link rel="shortcut icon" href="<?php echo asset('img/favicon.ico'); ?>" type="text/css" >

    <title>SMPH - Facilities</title>

    <!-- UW UI Toolkit CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/uw-ui-toolkit.css'); ?>" type="text/css" >
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>" type="text/css" >

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Add page-specific Javascript Libraries (Don't load libraries on pages that aren't using them)-->
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>

  </head>

    <body>

      <div id="header" class="uw-header-classic">
        <div class="container">
          <div class="uw-header-branding pull-left">
            <a href="http://www.wisc.edu">
              <img src="img/crest.png" class="uw-header-logo" alt="Logo">
            </a>
            <a href="http://www.wisc.edu" class="uw-header-wordmark">
              University of Wisconsin–Madison
            </a>
            <h1 class="uw-header-site-title">
              <a href="{!! URL::to('/') !!}">School of Medicine & Public Health - Facilities</a>
            </h1>
            <h2 class="uw-header-tagline">An optional tagline; don't use unless really needed</h2>
          </div>
        </div>
      </div> <!-- #header -->

      <div id="navbar" class="">
        <div class="navbar uw-navbar-classic">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div> <!-- .navbar-header -->
            <div class="navbar-collapse collapse">

              <!-- ********Functionality for a working search bar... Not sure if this will be needed later on..********** -->
        <!--       <form class="navbar-form navbar-right uw-navbar-classic-search" role="search">
                <div class="form-group uw-search">
                  <label class="sr-only" for="s">Search</label>
                  <input type="text" class="form-control uw-search-input" placeholder="Search">
                  <button class="form-control uw-search-submit" value="Search" aria-label="Search" name="btnG" type="submit"> <span class="glyphicon glyphicon-search"></span> </button>
                </div>
              </form> -->
              <ul class="nav navbar-nav">

                <li class="active"><a href="{!! URL::to('/') !!}">Home</a></li>

                <!-- Link to change the views are included in href tags (see php escape characters {{}}) -->

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="{!! URL::to('space') !!}">Room Space</a></li>
                    <li><a href="{!! URL::to('financial') !!}">Financial</a></li>
                    <li><a href="{!! URL::to('occupancy') !!}">Occupancy</a></li>
                  </ul>
                </li>


                <li><a href="{!! URL::to('floorplans') !!}">Floor Plans</a></li>

        <!--         <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li> -->

              </ul>

    <!--           <ul class="nav navbar-nav uw-navbar-classic-utility">
                <li class="active"><a href="#">Default</a></li>
                <li class="divider"></li>
                <li><a href="#">Static top</a></li>
                <li class="divider"></li>
                <li><a href="#">Fixed top</a></li>
              </ul> -->

            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div> <!-- #navbar -->

      <!-- ********************** Page content Starts Here ************************** -->
      <div id="content" class="uw-content-classic">
        <div class="container">

<!-- Contect spefic to page is loaded here -->
          @yield('content')

        </div>
      </div> 

      <!-- Bottom of page #content -->

      <div id="footer" class="uw-footer-classic">
        <div class="container">
          <p>
            Feedback, questions or accessibility issues: <a href="mailto:emailaddress">ajhaag@wisc.edu</a>
            <br/>
            &copy; 2015 Board of Regents of the <a href="http://www.wisconsin.edu">University of Wisconsin System</a></p>
        </div>
      </div>

      <!-- Le javascript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->

      <script src="<?php echo asset('js/uw-ui-toolkit.js'); ?>"></script>
    </body>
</html>


  <!-- /*
  *Custom JS
  * TODO:Move to an external resource file?
  */ 

  //Allows for multiple select on forms w/out having to hold control down -->

<!--   // $("select").mousedown(function(e){
  //     e.preventDefault();
      
  //     var scroll = this.scrollTop;
      
  //     e.target.selected = !e.target.selected;
      
  //     this.scrollTop = scroll;
      
  //     $(this).focus();
  // }).mousemove(function(e){e.preventDefault()});
//  -->
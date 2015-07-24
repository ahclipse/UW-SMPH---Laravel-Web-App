<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/dist/img/favicon.ico">

  <title>Open, beige and red starter template</title>

  <!-- UW UI Toolkit CSS -->
  <!-- <link href="/dist/css/uw-ui-toolkit.css" rel="stylesheet"> -->
  <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

  <!-- Custom CSS -->
<!--   <link href="style.css" rel="stylesheet">
 -->
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

  <link rel="stylesheet" href="<?php echo asset('css/uw-ui-toolkit.css'); ?>" type="text/css" >
  <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>" type="text/css" >

    </head>

    <body>

      <div id="header" class="uw-header-classic">
        <div class="container">
          <div class="uw-header-branding pull-left">
            <a href="http://www.wisc.edu">
              <img src="/dist/img/crest.png" class="uw-header-logo" alt="Logo">
            </a>
            <a href="http://www.wisc.edu" class="uw-header-wordmark">
              University of Wisconsin–Madison
            </a>
            <h1 class="uw-header-site-title">
              <a href="#">UW - School of Medicine & Public Health</a>
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
              <form class="navbar-form navbar-right uw-navbar-classic-search" role="search">
                <div class="form-group uw-search">
                  <label class="sr-only" for="s">Search</label>
                  <input type="text" class="form-control uw-search-input" placeholder="Search">
                  <button class="form-control uw-search-submit" value="Search" aria-label="Search" name="btnG" type="submit"> <span class="glyphicon glyphicon-search"></span> </button>
                </div>
              </form>
              <ul class="nav navbar-nav">
                <li class="active"><a href="/examples/uw-classic-starter-open-beige/">You are here</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
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
                </li>
              </ul>
              <ul class="nav navbar-nav uw-navbar-classic-utility">
                <li class="active"><a href="#">Default</a></li>
                <li class="divider"></li>
                <li><a href="#">Static top</a></li>
                <li class="divider"></li>
                <li><a href="#">Fixed top</a></li>
              </ul>

            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div> <!-- #navbar -->

      <div id="content" class="uw-content-classic">
        <div class="container">
          <div class="main">
            <h1>Open, beige and red starter template</h1>
            <p>Use this document as a way to quick start any new project. All you get is this message and a barebones HTML document. You design the rest!</p>
            <p style="min-height: 300px;"></p>
          </div>
        </div>
      </div> <!-- #content -->

      <div id="footer" class="uw-footer-classic">
        <div class="container">
          <p>
            Feedback, questions or accessibility issues: <a href="mailto:emailaddress">[ Enter email address here ]</a>
            <br/>
            &copy; [ Year ] Board of Regents of the <a href="http://www.wisconsin.edu">University of Wisconsin System</a></p>
          </div>
        </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="/dist/js/uw-ui-toolkit.js"></script>
  </body>
  </html>

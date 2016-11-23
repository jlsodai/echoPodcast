<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>pulse - Music, Audio and Radio web application</title>
  <meta name="description" content="Music, Musician, Bootstrap" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="images/logo.png">
  
  <!-- style -->
  <link rel="stylesheet" href="css/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="css/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/material-design-icons/material-design-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.min.css" type="text/css" />

  <!-- build:css css/styles/app.min.css -->
  <link rel="stylesheet" href="css/styles/app.css" type="text/css" />
  <link rel="stylesheet" href="css/styles/style.css" type="text/css" />
  <link rel="stylesheet" href="css/styles/font.css" type="text/css" />
  
  <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.carousel.min.css" type="text/css" />
  <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.theme.css" type="text/css" />
  <link rel="stylesheet" href="libs/mediaelement/build/mediaelementplayer.min.css" type="text/css" />
  <link rel="stylesheet" href="libs/mediaelement/build/mep.css" type="text/css" />

  <!-- endbuild -->
</head>
<body>
  <div class="app dk" id="app">

<!-- ############ LAYOUT START-->

  <!-- content -->
  <div id="content" class="app-content white bg" role="main">
    <div class="app-header white lt box-shadow-z1">
        <div class="navbar" data-pjax>
              <a data-toggle="collapse" data-target="#navbar" class="navbar-item pull-right hidden-md-up m-r-0 m-l">
                <i class="material-icons">menu</i>
              </a>
              <!-- brand -->
              <a href="#" class="navbar-brand md">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32">
                  <circle cx="24" cy="24" r="24" fill="rgba(255,255,255,0.2)"/>
                  <circle cx="24" cy="24" r="22" fill="#1c202b" class="brand-color"/>
                  <circle cx="24" cy="24" r="10" fill="#ffffff"/>
                  <circle cx="13" cy="13" r="2"  fill="#ffffff" class="brand-animate"/>
                  <path d="M 14 24 L 24 24 L 14 44 Z" fill="#FFFFFF" />
                  <circle cx="24" cy="24" r="3" fill="#000000"/>
                </svg>
              
                <img src="images/logo.png" alt="." class="hide">
                <span class="hidden-folded inline">echo - Podcast</span>
              </a>
              <!-- / brand -->
      
              <!-- nabar right -->
              <ul class="nav navbar-nav pull-right">
                <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#search-modal">
                    <i class="material-icons">search</i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">
                    <span class="hidden-xs-down btn btn-sm rounded primary _600">
                      Visit Devless
                    </span>
                    <span class="hidden-sm-up btn btn-sm btn-icon rounded primary">
                      <i class="material-icons">file_upload</i>
                    </span>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link clear" data-toggle="dropdown">
                    <span class="avatar w-32">
                      <img src="images/a3.jpg" alt="...">
                    </span>
                  </a>
                  <div class="dropdown-menu w dropdown-menu-scale pull-right">
                    <a class="dropdown-item" href="#">
                      <span>Profile</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <span>Tracks</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <span>Playlists</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <span>Likes</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      Need help?
                    </a>
                    <a class="dropdown-item" href="#">Sign out</a>
                  </div>
                </li>
              </ul>
              <!-- / navbar right -->
      
              <!-- navbar collapse -->
              <div class="collapse navbar-toggleable-sm l-h-0 text-center" id="navbar">
                <!-- link and dropdown -->
                <ul class="nav navbar-nav nav-md inline text-primary-hover" data-ui-nav>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <span class="nav-text">Page 1</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <span class="nav-text">Page 2</span>
                    </a>
                  </li>
                  <li class="nav-item dropdown pos-stc">
                    <a href="#" class="nav-link">
                      <span class="nav-text">Page 3</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <span class="nav-text">Page 4</span>
                    </a>
                  </li>
                </ul>
                <!-- / link and dropdown -->
              </div>
              <!-- / navbar collapse -->
        </div>
    </div>
    <div class="app-footer app-player grey bg">
      <div class="playlist" style="width:100%"></div>
    </div>
    <div class="app-body" id="view">

<div class="owl-carousel black owl-theme owl-dots-bottom-center" data-ui-jp="owlCarousel" data-ui-options="{
             items: 1
            ,loop: true
            ,autoplay: true
            ,nav: true
          }">
  <div class="row-col">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 text-center">
      <div class="p-a-lg">
        <h2 class="display-4 m-y-lg">Echo Podcast, <br/>Weekly Web Talk</h2>
        <h6 class="text-muted m-b-lg">Brought to you by Devless</h6>
        <a href="#" class="btn circle btn-outline b-primary m-b-lg p-x-md">Listen Now</a>
      </div>
    </div>
    <div class="col-lg-2"></div>
  </div>
</div>
<!-- ############ PAGE START-->

<div class="page-content">
  <div class="container dv-mediaWrap">
    <div class="row-col">
      <div class="col-md-12 no-border-md">
        <div class="padding">
          <h2 class="widget-title h4 m-b">Recent Podcasts</h2>
          <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3">
                  <div class="item r" data-id="item-12" data-src="http://api.soundcloud.com/tracks/174495152/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                  <div class="item-media ">
                    <a href="#" class="item-media-content" style="background-image: url('images/b11.jpg');"></a>
                    <div class="item-overlay center">
                      <button  class="btn-playpause">Play</button>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="item-overlay bottom text-right">
                      <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
                      <a href="#" class="btn-more" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                      <div class="dropdown-menu pull-right black lt"></div>
                    </div>
                    <div class="item-title text-ellipsis">
                      <a href="#">Podcast 1</a>
                    </div>
                    <div class="item-author text-sm text-ellipsis ">
                      <a href="#" class="text-muted">20 days ago</a>
                    </div>
            
            
                  </div>
                </div>
              </div>
                <div class="col-xs-4 col-sm-4 col-md-3">
                  <div class="item r" data-id="item-11" data-src="http://api.soundcloud.com/tracks/218060449/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                  <div class="item-media ">
                    <a href="#" class="item-media-content" style="background-image: url('images/b10.jpg');"></a>
                    <div class="item-overlay center">
                      <button  class="btn-playpause">Play</button>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="item-overlay bottom text-right">
                      <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
                      <a href="#" class="btn-more" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                      <div class="dropdown-menu pull-right black lt"></div>
                    </div>
                    <div class="item-title text-ellipsis">
                      <a href="#">Podcast 2</a>
                    </div>
                    <div class="item-author text-sm text-ellipsis ">
                      <a href="#" class="text-muted">70 days ago</a>
                    </div>
            
            
                  </div>
                </div>
              </div>
                <div class="col-xs-4 col-sm-4 col-md-3">
                  <div class="item r" data-id="item-7" data-src="http://api.soundcloud.com/tracks/245566366/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                  <div class="item-media ">
                    <a href="#" class="item-media-content" style="background-image: url('images/b6.jpg');"></a>
                    <div class="item-overlay center">
                      <button  class="btn-playpause">Play</button>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="item-overlay bottom text-right">
                      <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
                      <a href="#" class="btn-more" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                      <div class="dropdown-menu pull-right black lt"></div>
                    </div>
                    <div class="item-title text-ellipsis">
                      <a href="#">Podcast 3</a>
                    </div>
                    <div class="item-author text-sm text-ellipsis ">
                      <a href="#" class="text-muted">99 days ago</a>
                    </div>
            
            
                  </div>
                </div>
              </div>
                <div class="col-xs-4 col-sm-4 col-md-3">
                  <div class="item r" data-id="item-5" data-src="http://streaming.radionomy.com/JamendoLounge">
                  <div class="item-media ">
                    <a href="#" class="item-media-content" style="background-image: url('images/b4.jpg');"></a>
                    <div class="item-overlay center">
                      <button  class="btn-playpause">Play</button>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="item-overlay bottom text-right">
                      <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
                      <a href="#" class="btn-more" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                      <div class="dropdown-menu pull-right black lt"></div>
                    </div>
                    <div class="item-title text-ellipsis">
                      <a href="#">Podcast 4</a>
                    </div>
                    <div class="item-author text-sm text-ellipsis ">
                      <a href="#" class="text-muted">105 days ago</a>
                    </div>
            
            
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 w-xxl w-auto-md hide">
        <div class="padding" style="bottom: 60px;" data-ui-jp="stick_in_parent">
          <h6 class="text text-muted">5 Likes</h6>
          <div class="row item-list item-list-sm m-b">
                <div class="col-xs-12">
                  <div class="item r" data-id="item-8" data-src="http://api.soundcloud.com/tracks/236288744/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                  <div class="item-media ">
                    <a href="#" class="item-media-content" style="background-image: url('images/b7.jpg');"></a>
                  </div>
                  <div class="item-info">
                    <div class="item-title text-ellipsis">
                      <a href="#">Simple Place To Be</a>
                    </div>
                    <div class="item-author text-sm text-ellipsis ">
                      <a href="#" class="text-muted">RYD</a>
                    </div>
            
            
                  </div>
                </div>
              </div>
                <div class="col-xs-12">
                  <div class="item r" data-id="item-7" data-src="http://api.soundcloud.com/tracks/245566366/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                  <div class="item-media ">
                    <a href="#" class="item-media-content" style="background-image: url('images/b6.jpg');"></a>
                  </div>
                  <div class="item-info">
                    <div class="item-title text-ellipsis">
                      <a href="#">Reflection (Deluxe)</a>
                    </div>
                    <div class="item-author text-sm text-ellipsis ">
                      <a href="#" class="text-muted">Fifth Harmony</a>
                    </div>
            
            
                  </div>
                </div>
              </div>
                <div class="col-xs-12">
                  <div class="item r" data-id="item-4" data-src="http://api.soundcloud.com/tracks/230791292/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                  <div class="item-media ">
                    <a href="#" class="item-media-content" style="background-image: url('images/b3.jpg');"></a>
                  </div>
                  <div class="item-info">
                    <div class="item-title text-ellipsis">
                      <a href="#">What A Time To Be Alive</a>
                    </div>
                    <div class="item-author text-sm text-ellipsis ">
                      <a href="#" class="text-muted">Judith Garcia</a>
                    </div>
            
            
                  </div>
                </div>
              </div>
                <div class="col-xs-12">
                  <div class="item r" data-id="item-9" data-src="http://api.soundcloud.com/tracks/264094434/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                  <div class="item-media ">
                    <a href="#" class="item-media-content" style="background-image: url('images/b8.jpg');"></a>
                  </div>
                  <div class="item-info">
                    <div class="item-title text-ellipsis">
                      <a href="#">All I Need</a>
                    </div>
                    <div class="item-author text-sm text-ellipsis ">
                      <a href="#" class="text-muted">Pablo Nouvelle</a>
                    </div>
            
            
                  </div>
                </div>
              </div>
                <div class="col-xs-12">
                  <div class="item r" data-id="item-3" data-src="http://api.soundcloud.com/tracks/79031167/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                  <div class="item-media ">
                    <a href="#" class="item-media-content" style="background-image: url('images/b2.jpg');"></a>
                  </div>
                  <div class="item-info">
                    <div class="item-title text-ellipsis">
                      <a href="#">I Wanna Be In the Cavalry</a>
                    </div>
                    <div class="item-author text-sm text-ellipsis ">
                      <a href="#" class="text-muted">Jeremy Scott</a>
                    </div>
            
            
                  </div>
                </div>
              </div>
          </div>
          <h6 class="text text-muted">Go mobile</h6>
          <div class="btn-groups">
                <a href="" class="btn btn-sm dark lt m-r-xs" style="width: 135px">
                  <span class="pull-left m-r-sm">
                    <i class="fa fa-apple fa-2x"></i>
                  </span>
                  <span class="clear text-left l-h-1x">
                    <span class="text-muted text-xxs">Download on the</span>
                    <b class="block m-b-xs">App Store</b>
                  </span>
                </a>
                <a href="" class="btn btn-sm dark lt" style="width: 133px">
                  <span class="pull-left m-r-sm">
                    <i class="fa fa-play fa-2x"></i>
                  </span>
                  <span class="clear text-left l-h-1x">
                    <span class="text-muted text-xxs">Get it on</span>
                    <b class="block m-b-xs m-r-xs">Google Play</b>
                  </span>
                </a>
            </div>
            <div class="b-b m-y"></div>
            <div class="nav text-sm _600">
              <a href="#" class="nav-link text-muted m-r-xs">About</a>
              <a href="#" class="nav-link text-muted m-r-xs">Contact</a>
              <a href="#" class="nav-link text-muted m-r-xs">Legal</a>
              <a href="#" class="nav-link text-muted m-r-xs">Policy</a>
            </div>
            <p class="text-muted text-xs p-b-lg">&copy; Copyright 2016</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

<!-- ############ LAYOUT END-->
  </div>

<!-- build:js scripts/app.min.js -->
<!-- jQuery -->
  <script src="libs/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="libs/tether/dist/js/tether.min.js"></script>
  <script src="libs/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="libs/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="libs/jquery.stellar/jquery.stellar.min.js"></script>
  <script src="libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="libs/jscroll/jquery.jscroll.min.js"></script>
  <script src="libs/PACE/pace.min.js"></script>
  <script src="libs/jquery-pjax/jquery.pjax.js"></script>

  <script src="libs/mediaelement/build/mediaelement-and-player.min.js"></script>
  <script src="libs/mediaelement/build/mep.js"></script>
  <script src="scripts/player.js"></script>

  <script src="scripts/config.lazyload.js"></script>
  <script src="scripts/ui-load.js"></script>
  <script src="scripts/ui-jp.js"></script>
  <script src="scripts/ui-include.js"></script>
  <script src="scripts/ui-device.js"></script>
  <script src="scripts/ui-form.js"></script>
  <script src="scripts/ui-nav.js"></script>
  <script src="scripts/ui-screenfull.js"></script>
  <script src="scripts/ui-scroll-to.js"></script>
  <script src="scripts/ui-toggle-class.js"></script>
  <script src="scripts/ui-taburl.js"></script>
  <script src="scripts/app.js"></script>
  <script src="scripts/site.js"></script>
  <script src="scripts/ajax.js"></script>
<!-- endbuild -->
</body>
</html>

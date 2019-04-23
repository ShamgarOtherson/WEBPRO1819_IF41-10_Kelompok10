<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <title>Username</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" content="Gab is an ad-free social network dedicated to preserving individual liberty, the freedom of speech, and the free flow of information on the internet." />
  <meta property="og:description" content="Gab is an ad-free social network dedicated to preserving individual liberty, the freedom of speech, and the free flow of information on the internet." />
  <meta property="og:image" content="https://gab.com/assets/img/logo.png" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/icon/favicon-16x16.png">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="z-index: 99">
  <a class=" text-success" href="#"><strong>Gab</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> 
        <a class="nav-link" href="#"><span class="fas fa-home fa-fw mr-sm-1"></span>Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><span class="fas fa-globe-asia mr-sm-1 text-white"></span>Explore</a>
      </li>
      <div class="btn-group" role="group">
        <button id="notif" type="button" class="btn bg-dark text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell text-white"></span> Notifications</button>
        <div class="dropdown-menu" aria-labelledby="notif">
          <a class="dropdown-item" href="#">Dropdown link</a>
          <a class="dropdown-item" href="#">Dropdown link</a>
        </div>
      </div>
      <div>
        <li class="nav-item active"> 
          <a class="nav-link" href="#"><span class="fas fa-comments mr-sm-1 text-white"></span>Messages<span class="sr-only">(current)</span></a>
        </li>
      </div>
    </ul>
    <form class="form-inline my-1 my-lg-0">
      <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search"><span class="fas fa-search mr-sm-2 text-white"></span>
    <div class="btn-group mx-4" role="group">
        <button class="btn btn-link fas fa-user-circle btn-lg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="<?= site_url('/welcome/loadprofile')?>"><span class="fas fa-user"></span> My Profile</a>
          <a class="dropdown-item" href="<?= site_url('/welcome/loadUpgrade')?>"><span class="fas fa-star-of-life"></span> Upgrade</a>
          <a class="dropdown-item" href="<?= site_url('/welcome/loadSetting')?>"><span class="fas fa-cog"></span> Setting</a>
          <a class="dropdown-item" href="#"><span class="fas fa-moon"></span> Switch to dark mode</a>
          <a class="dropdown-item" href="#"><span class="fas fa-power-off"></span> Logout</a>
        </div>
    </div>
    <form action="<?= site_url('/Register/regist')?>" method="post">
      <ul class="navbar-nav mr-sm-1 mx-1">
        <li class="nav-item active">
          <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-success my-1 mr-sm-1 text-white bg-success" data-toggle="modal" data-target="#exampleModal"><span class="fas fa-pen text-white my-1 mr-sm-2"></span><strong>Gab</strong></button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                  <label for="exampleFormControlTextarea2"></label>
                  <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                  <div class="modal-footer">
                    <button type="button" class="btn text-white bg-success">PUBLISH</button>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        </li>
      </ul>
    </form>
  </div>
</nav>
<div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <header id="header">
            <div class="slider">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="https://gab.com/media/user/cover.jpg" width="100%" height="100%">
                  </div>
                </div>
  <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"></a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"></a>
              </div>
            </div><!--slider-->
            <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <a class="navbar-brand rounded-circle" href="#"><img class="img-responsive" src="https://gab.com/media/user/cover.jpg"></a>
                <span class="site-name"><b>Roland</b> Maruntelu</span>
                <span class="site-description"></span>
              </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="container" id="mainNav" >
                <ul class="nav main-menu mx-5">
                  <li><a href="#"><span class="mx-2"></span> Score</a></li>
                  <li><a href="#"><span class="mx-2"></span> Post</a></li>
                  <li><a href="#"><span class="mx-2"></span> Followers</a></li>
                  <li><a href="#"><span class="mx-2"></span> Following</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </nav>
          </header><!--/#HEADER-->
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
  </script>

  <style type="text/css">
  body{
    background:#e9eaed;
  }
    
h1, h2, h3, h4, h5, h6{
    font-family: 'Open Sans Condensed', sans-serif, sans-serif;
}
  
.container{
  }

.wrapper{
  }

#header{
  border:1px solid #ddd;
  margin-bottom:20px;
  }
  


  
.navbar{
  border-radius:0;
  margin-bottom:0;
  border:none;
        font-family: 'Open Sans Condensed', sans-serif, sans-serif;

  }
    
.navbar > li >a{
    
    }
  

  
.navbar-header{
  }
  
.navbar-brand{
width:160px;
height:160px;
float:left;
padding:0;
margin-top:-130px;
overflow:hidden;
border:3px solid #eee;
margin-left:15px;
background:#333;
text-align:center;
line-height:160px;
color:#fff !important;
font-size:2em;
    -webkit-transition:  all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition:  all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out ;

  }
  
  
.site-name{
  color:#fff;
  font-size:2.4em;
  float:left;
  margin-top:-65px !important;
  margin-left:15px;
        font-family: 'Open Sans Condensed', sans-serif, sans-serif;

  } 
.site-description{
  color:#fff;
  font-size:1.3em;
  float:left;
  margin-top:-30px !important;
  margin-left:15px;
  }
  
.main-menu{
  position:absolute;
  left:190px;
  }
  
.slider, .carousel{
  max-height:360px;
  overflow:hidden;
  }
  
.carousel-control .fa-angle-left,
.carousel-control .fa-angle-right {
position: absolute;
top: 50%;
font-size:2em;
z-index: 5;
display: inline-block;
}

.carousel-control{
  background-color:transparent;
  background-image:none !important;
  }
  
.carousel-control:hover,
.carousel-control:focus {
  color: #fff;
  text-decoration: none;
  background-color:transparent !important;
  background-image:none !important;
  outline: 0;
}


  

  
  
@media (max-width: 768px) {
.navbar-brand{
    max-width: 100px;
  max-height:100px;
  float:left;
  margin-top:-65px;
  margin-left:15px;
  -webkit-transition:  all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition:  all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out ;
  }

.navbar{
  border-radius:0;
  margin-bottom:0;
  border:none;
  }
  
.main-menu{
  left:0;
  position:relative;
  }


}

@media (max-width: 490px) {
  .site-name{
  color:#fff;
  font-size:1.5em;
  float:left;
  line-height:20px;
  margin-top:-100px !important;
  margin-left:125px;
  } 
.site-description{
  color:#fff;
  font-size:1.3em;
  float:left;
  margin-top:-80px !important;
  margin-left:125px;
  }
  }
</style>
</body>
</html>

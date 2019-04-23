<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <title>PRO | gab</title>
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
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
        <a class="nav-link" href="<?= site_url('/welcome/loadLogEx')?>"><span class="fas fa-globe-asia mr-sm-1 text-white"></span>Explore</a>
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
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>Explore | gab</title>
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
  <a class="navbar-brand text-success" href="#"><strong>Gab</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> 
        <a class="nav-link" href="#"><span class="fas fa-home fa-fw mr-sm-1"></span>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('/welcome/loadexplore')?>"><span class="fas fa-globe-asia mr-sm-1"></span>Explore</a>
      </li>
    </ul>
    <form class="form-inline my-1 my-lg-0">
      <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search"><span class="fas fa-search mr-sm-2"></span>
    </form>
    <form action="<?= site_url('/Welcome/loadLogin')?>" method="post">
    	<ul class="navbar-nav mr-sm-1">
    		<li class="nav-item active">
    			<button class="btn btn-outline-success my-1 mr-sm-1 text-white" type="submit" ><strong>Login</strong></button>
    		</li>
    	</ul>
    </form>
    <form action="<?= site_url('/Register/regist')?>" method="post">
    	<ul class="navbar-nav mr-sm-1">
    		<li class="nav-item active">
    			<button class="btn btn-outline-success my-1 mr-sm-1 text-white bg-success" type="submit"><strong>Register</strong></button>
    		</li>
    	</ul>
    </form>
  </div>
</nav>
</body>
</html>
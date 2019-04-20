
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>gab | The Free Speech Social Network</title>
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
</head>
<body class="bg">
	<div class="container">
  		<div class="row">
    		<div class="col-sm-6">
    		<br></br>
    		<a href="https://gab.com/popular" class="pull-left header__link"><strong>Explore</strong></a>
    		</div>
    		<div class="col-sm row justify-content-end">
    		<br></br>
      			<form class="form-inline">
  					<div class="form-group mx-sm-1 mb-1">
    					<label for="username" class="sr-only">Username</label>
    					<input type="text" class="form-control" id="username" placeholder="Username">
  					</div>
  					<div class="form-group mx-sm-1 mb-1">
    					<label for="inputPassword2" class="sr-only">Password</label>
    					<input type="password" class="form-control" id="inputPassword2" placeholder="Password">
    					<a class ="ml-2" href="https://gab.com/password/email">Forgotten?</a>
  					</div>
  					<br></br>
  					<button type="submit" class="btn btn-primary mx-sm-2 mb-2">Login</button>
				</form>
    		</div>
  		</div>
	</div>
	<div class="static-home-wrapper">
		<div class="container">
			<div class="home__title">
			<br></br>
				<img class="home__title__logo" src="https://gab.com/assets/landing/img/logo.svg" alt="Gab" height="30%" width="20%">
					<div class="row">
						<div class="col-md-8">
							<p><strong><font size="+3"> A social network that champions free speech, individual liberty and the free flow of information online. All are welcome.</font></strong></p>
						</div>
					</div>
			</div>
			<br>
			<div class="panel panel-default">
  				<div class="panel-body">
  	  				<form class="form-inline" action="<?= site_url('/Register/regist')?>" method="post">
  	  					<div class="col-sm-2 row justify-content-end">
  	  						<h4>Join GAB</h4>
  	  					</div>
  						<div class="col-sm-8 form-group mx-sm-3 mb-2 row justify-content-end">
    						<label for="register" class="sr-only">Email</label>
    						<input type="text" class="form-control" id="register" placeholder="Email">
  						</div>
  						<button type="submit" class="btn btn-primary mb-2 row justify-content-end">Create Account</button>
					</form>
  				</div>
			</div>
		</div>
	</div>
	<br></br>
	<div class="container">
 		<div class="row">
    		<div class="col-sm">
      			2019 Gab AI Inc. All Rights Reserved.
    		</div>
    		<div class="clearfix">
      				<a href="https://help.gab.com">Help</a>
					<a href="https://gab.com/about/investors">Investors</a>
					<a href="https://gab.com/about/privacy">Privacy</a>
					<a href="https://developers.gab.com">Developers</a>
					<br class="visible-xs">
					<a href="/cdn-cgi/l/email-protection#f784828787988583b7909695d9969e">Press</a>
					<a href="https://gab.com/about/tos">Terms of Service</a>
    		</div>
  		</div>
	</div> 
</body>
</html>
<style type="text/css">
	body, html {
  height: 100%;
}

.bg { 
  /* The image used */
  background-image: url("https://gab.com/assets/landing/img/bg-2.svg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
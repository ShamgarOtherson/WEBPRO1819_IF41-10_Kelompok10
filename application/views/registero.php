<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <title>gab | Join Gab</title>
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
  <body class="landing-container landing-container--bg-1">
    <div id="app">
      <div class="header">
        <div class="container">
          <form method="post" class="pull-right header__login hidden visible-sm visible-xs " action="https://gab.com/auth/login">
            <a href="https://gab.com/auth/login" class="button">Login</a>
          </form>
          <form method="post" class="pull-right header__login hidden-xs hidden-sm " action="https://gab.com/auth/login">
            <input type="hidden" name="_token" value="KFTj8jb64lnPFx1vxAv08yToJ9jk2lsE7izmdsBv">
              <div class="header__login__input pull-left">
                <input type="text" name="username" placeholder="Username">
                <i class="far fa-user"></i>
              </div>
              <div class="header__login__input pull-left">
                <input type="password" name="password" placeholder="Password">
                <i class="fa fa-key"></i>
                <div class="header__login__input__link"><a href="https://gab.com/password/email">Forgotten?</a></div>
              </div>
              <input type="hidden" name="remember" value="on">
              <button type="submit">Login</button>
          </form>
          <a href="https://gab.com/popular" class="pull-left header__link">Explore</a>
        </div>
      </div> 
      <div class="container">
        <div class="auth__content">
          <register :email="&quot;baccong046604@gmail.com&quot;"></register>
        </div>
      </div>
      <div class="footer">
        <div class="container">
          <div class="clearfix">
            <div class="footer__links">
              <a href="https://help.gab.com">Help</a>
              <a href="https://gab.com/about/investors">Investors</a>
              <a href="https://gab.com/about/privacy">Privacy</a>
              <a href="https://developers.gab.com">Developers</a>
              <br class="visible-xs">
              <a href="/cdn-cgi/l/email-protection#25565055554a5751654244470b444c">Press</a>
              <a href="https://gab.com/about/tos">Terms of Service</a>
            </div>
            <div class="footer__copyright">2019 Gab AI Inc. All Rights Reserved.</div>
          </div>
        </div>
      </div> 
    </div>
</body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Log In</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body {
        background-image: url('assets/tampilanlogin.jpg');
        background-size: cover;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?=base_url();?>/assets/custom/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<form class="form-signin border rounded-pill bg-light" method="POST" action="<?=base_url('Auth/login_aksi');?>">
  <img class="mb-4 rounded-circle" src="<?=base_url();?>/assets/logoclinic.jpg" alt="" width="90" height="90">
  <h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>
  <label for="inputUsername" class="sr-only ">Username</label>
  <input type="text" class="form-control rounded-pill" name="username" placeholder="Username" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" class="form-control  rounded-pill" name="password" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block rounded-pill" type="submit">Masuk</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
</form>


    
  </body>
</html>

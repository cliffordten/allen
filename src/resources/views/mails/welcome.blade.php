<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crypo</title>
  <link rel="icon" href="/assets/img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body id="dark">
<header class="dark-bb">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="/"><img src="/assets/img/logo-light.svg" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
        aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon ion-md-menu"></i>
      </button>

      <div class="collapse navbar-collapse" id="headerMenu">
        <ul class="navbar-nav mr-auto">
          <a class="nav-link" href="/">Exchange</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Markets
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/markets">Markets</a>
              <a class="dropdown-item" href="/market-capital">Market Capital</a>
              <a class="dropdown-item" href="/market-capital-bar">Market Bar</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item header-custom-icon">
            <a class="nav-link" href="#" id="changeThemeLight">
              <i class="icon ion-md-sunny"></i>
            </a>
          </li>
          <li class="nav-item header-custom-icon">
            <a class="nav-link" href="#" id="clickFullscreen">
              <i class="icon ion-md-expand"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>
</header>
  <div class="vh-100 d-flex justify-content-center">
    <div class="form-access my-auto">

        @if($userData)
            <span>Welcome {{$userData['fullName']}}</span>
        @endif

        <div class="row">
          <div class="col">

            @if($success)
              <div class="alert alert-success">
                {{$success}}
              </div>
            @endif

            @if($fail)
              <div class="alert alert-danger">
                {{$fail}}
              </div>
            @endif

            @if($errors->any())
              <div class="alert alert-danger">
                {{ explode('"', $errors)[3] }}
              </div>
            @endif

          </div>
        </div>
        

      <h2>Click <a href="/login">here</a> to continue to Login</h2>
    </div>
  </div>

  <script src="/assets/js/jquery-3.4.1.min.js"></script>
  <script src="/assets/js/popper.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/amcharts-core.min.js"></script>
  <script src="/assets/js/amcharts.min.js"></script>
  <script src="/assets/js/custom.js"></script>
</body>

</html>
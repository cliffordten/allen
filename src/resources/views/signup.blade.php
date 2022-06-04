<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crypo</title>
  <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body id="dark">
<header class="dark-bb">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="/"><img src="assets/img/logo-light.svg" alt="logo"></a>
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
      <form action="{{ route('saveUserInfo') }}" method="post">

        @csrf

        <span>Create Account</span>

        <div class="row">
          <div class="col">

            @if(Session::get('success'))
              <div class="alert alert-success">
                {{Session::get('success')}}
              </div>
            @endif

            @if(Session::get('fail'))
              <div class="alert alert-danger">
                {{Session::get('fail')}}
              </div>
            @endif

            @if($errors->any())
              <div class="alert alert-danger">
                {{ explode('"', $errors)[3] }}
              </div>
            @endif

          </div>
        </div>
        
        <div class="form-group">
          <input type="text" class="form-control" name="fullName" placeholder="Full Name" required />
        </div>
        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Email Address" required />
        </div>
        <div class="form-group">
          <input type="password" class="form-control" minlength="8" name="password" placeholder="Password" required />
        </div>
        <div class="form-group">
          <input type="password" class="form-control" minlength="8" name="confirmPassword" placeholder="Confirm Password" required />
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input"  name="isTermsChecked" id="form-checkbox" required>
          <label class="custom-control-label" for="form-checkbox">I agree to the <a href="#!">Terms &
              Conditions</a></label>
        </div>
        <button type="submit" class="btn btn-primary">Create Account</button>
      </form>
      <h2>Already have an account? <a href="/login">Sign in here</a></h2>
    </div>
  </div>

  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/amcharts-core.min.js"></script>
  <script src="assets/js/amcharts.min.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>
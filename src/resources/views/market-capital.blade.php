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

          @if($userData)
            <li class="nav-item dropdown header-custom-icon">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="icon ion-md-notifications"></i>
                <span class="circle-pulse"></span>
              </a>
              <div class="dropdown-menu">
                <div class="dropdown-header d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-medium">6 New Notifications</p>
                  <a href="#!" class="text-muted">Clear all</a>
                </div>
                <div class="dropdown-body">
                  <a href="#!" class="dropdown-item">
                    <div class="icon">
                      <i class="icon ion-md-lock"></i>
                    </div>
                    <div class="content">
                      <p>Account password change</p>
                      <p class="sub-text text-muted">5 sec ago</p>
                    </div>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <div class="icon">
                      <i class="icon ion-md-alert"></i>
                    </div>
                    <div class="content">
                      <p>Solve the security issue</p>
                      <p class="sub-text text-muted">10 min ago</p>
                    </div>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <div class="icon">
                      <i class="icon ion-logo-android"></i>
                    </div>
                    <div class="content">
                      <p>Download android app</p>
                      <p class="sub-text text-muted">1 hrs ago</p>
                    </div>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <div class="icon">
                      <i class="icon ion-logo-bitcoin"></i>
                    </div>
                    <div class="content">
                      <p>Bitcoin price is high now</p>
                      <p class="sub-text text-muted">2 hrs ago</p>
                    </div>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <div class="icon">
                      <i class="icon ion-logo-usd"></i>
                    </div>
                    <div class="content">
                      <p>Payment completed</p>
                      <p class="sub-text text-muted">4 hrs ago</p>
                    </div>
                  </a>
                </div>
                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                  <a href="#!">View all</a>
                </div>
              </div>
            </li>
          @endif

          @if(!$userData)
            <li class="nav-item mt-2">
              <a class="nav-link" href="/login" aria-haspopup="true"
                aria-expanded="false">
                Login
              </a>
            </li>
            <li class="nav-item mt-3 text-white">
                  |
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" href="/signup" aria-haspopup="true"
                aria-expanded="false">
                Sign up
              </a>
            </li>
          @endif

          @if($userData)
            <li class="nav-item dropdown header-img-icon">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <img width=55 height=55 class="rounded-circle" src="{{ $userData['profile'] ? asset($userData['profile']) : asset('/assets/img/avatar.svg')}} " alt="avatar">
              </a>
              <div class="dropdown-menu">
                <div class="dropdown-header d-flex flex-column align-items-center">
                  <div class="figure mb-3">
                    <img width=55 height=55 class="rounded-circle" src="{{ $userData['profile'] ? asset($userData['profile']) : asset('/assets/img/avatar.svg')}} " alt="">
                  </div>
                  <div class="info text-center">
                    @if($userData['isAdmin'])
                      <p class="name font-weight-bold mb-0">Welcome Admin</p>
                    @endif
                    <p class="name font-weight-bold mb-0">{{$userData['fullName']}}</p>
                    <p class="email text-muted mb-3">{{$userData['email']}}</p>
                  </div>
                </div>
                <div class="dropdown-body">
                  <ul class="profile-nav">
                    <li class="nav-item">
                      <a href="/user/profile" class="nav-link">
                        <i class="icon ion-md-person"></i>
                        <span>Profile</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/user/wallet" class="nav-link">
                        <i class="icon ion-md-wallet"></i>
                        <span>My Wallet</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/user/settings" class="nav-link">
                        <i class="icon ion-md-settings"></i>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('logoutUser') }}" class="nav-link red">
                        <i class="icon ion-md-power"></i>
                        <span>Log Out</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          @endif
        </ul>
      </div>
    </nav>
</header>
  <div class="markets-capital pt70 pb40">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="markets-capital-item">
            <h2>
              <img src="assets/img/icon/1.png" alt="ETH">
              <span>ETH</span>
            </h2>
            <div class="markets-capital-details">
              <h4>$431,687,258.77</h4>
              <h3 class="red">-6.19% <i class="icon ion-md-arrow-down"></i></h3>
            </div>
            <div class="markets-capital-chart" data-charts="[50,59,81,81,56,55,40,80,90,82]"
              data-bg="rgba(255,35,31,.3)" data-border="ff231f">
              <canvas></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="markets-capital-item">
            <h2>
              <img src="assets/img/icon/2.png" alt="EOS">
              <span>EOS</span>
            </h2>
            <div class="markets-capital-details">
              <h4>$431,684,298.45</h4>
              <h3 class="green">+11.79% <i class="icon ion-md-arrow-up"></i></h3>
            </div>
            <div class="markets-capital-chart" data-charts="[50,42,82,45,40,55,72,80,60,82]"
              data-bg="rgba(38,222,129,.3)" data-border="26de81">
              <canvas></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="markets-capital-item">
            <h2>
              <img src="assets/img/icon/3.png" alt="LTC">
              <span>LTC</span>
            </h2>
            <div class="markets-capital-details">
              <h4>$431,684,298.45</h4>
              <h3 class="red">-6.19% <i class="icon ion-md-arrow-down"></i></h3>
            </div>
            <div class="markets-capital-chart" data-charts="[50,48,72,80,60,82,50,48,72,33,44]"
              data-bg="rgba(255,35,31,.3)" data-border="ff231f">
              <canvas></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="markets-capital-item">
            <h2>
              <img src="assets/img/icon/4.png" alt="KCS">
              <span>KCS</span>
            </h2>
            <div class="markets-capital-details">
              <h4>$431,684,298.45</h4>
              <h3 class="green">+11.79% <i class="icon ion-md-arrow-up"></i></h3>
            </div>
            <div class="markets-capital-chart" data-charts="[50,42,72,80,60,82,82,45,40,55]"
              data-bg="rgba(38,222,129,.3)" data-border="26de81">
              <canvas></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="markets-capital-item">
            <h2>
              <img src="assets/img/icon/5.png" alt="COTI">
              <span>COTI</span>
            </h2>
            <div class="markets-capital-details">
              <h4>$431,687,258.77</h4>
              <h3 class="red">-6.19% <i class="icon ion-md-arrow-down"></i></h3>
            </div>
            <div class="markets-capital-chart" data-charts="[50,59,81,81,56,55,40,80,90,82]"
              data-bg="rgba(255,35,31,.3)" data-border="ff231f">
              <canvas></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="markets-capital-item">
            <h2>
              <img src="assets/img/icon/6.png" alt="TRX">
              <span>TRX</span>
            </h2>
            <div class="markets-capital-details">
              <h4>$431,684,298.45</h4>
              <h3 class="green">+11.79% <i class="icon ion-md-arrow-up"></i></h3>
            </div>
            <div class="markets-capital-chart" data-charts="[50,42,82,45,40,55,72,80,60,82]"
              data-bg="rgba(38,222,129,.3)" data-border="26de81">
              <canvas></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="markets-capital-item">
            <h2>
              <img src="assets/img/icon/7.png" alt="XMR">
              <span>XMR</span>
            </h2>
            <div class="markets-capital-details">
              <h4>$431,684,298.45</h4>
              <h3 class="red">-6.19% <i class="icon ion-md-arrow-down"></i></h3>
            </div>
            <div class="markets-capital-chart" data-charts="[50,48,72,80,60,82,50,48,72,33,44]"
              data-bg="rgba(255,35,31,.3)" data-border="ff231f">
              <canvas></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="markets-capital-item">
            <h2>
              <img src="assets/img/icon/8.png" alt="ADA">
              <span>ADA</span>
            </h2>
            <div class="markets-capital-details">
              <h4>$431,684,298.45</h4>
              <h3 class="green">+11.79% <i class="icon ion-md-arrow-up"></i></h3>
            </div>
            <div class="markets-capital-chart" data-charts="[50,42,72,80,60,82,82,45,40,55]"
              data-bg="rgba(38,222,129,.3)" data-border="26de81">
              <canvas></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="markets-capital-item">
            <h2>
              <img src="assets/img/icon/9.png" alt="BNB">
              <span>BNB</span>
            </h2>
            <div class="markets-capital-details">
              <h4>$431,687,258.77</h4>
              <h3 class="red">-6.19% <i class="icon ion-md-arrow-down"></i></h3>
            </div>
            <div class="markets-capital-chart" data-charts="[50,59,81,81,56,55,40,80,90,82]"
              data-bg="rgba(255,35,31,.3)" data-border="ff231f">
              <canvas></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="markets-capital-item">
            <h2>
              <img src="assets/img/icon/10.png" alt="NEO">
              <span>NEO</span>
            </h2>
            <div class="markets-capital-details">
              <h4>$431,684,298.45</h4>
              <h3 class="green">+11.79% <i class="icon ion-md-arrow-up"></i></h3>
            </div>
            <div class="markets-capital-chart" data-charts="[50,42,82,45,40,55,72,80,60,82]"
              data-bg="rgba(38,222,129,.3)" data-border="26de81">
              <canvas></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="markets-capital-item">
            <h2>
              <img src="assets/img/icon/11.png" alt="TOMO">
              <span>TOMO</span>
            </h2>
            <div class="markets-capital-details">
              <h4>$431,684,298.45</h4>
              <h3 class="red">-6.19% <i class="icon ion-md-arrow-down"></i></h3>
            </div>
            <div class="markets-capital-chart" data-charts="[50,48,72,80,60,82,50,48,72,33,44]"
              data-bg="rgba(255,35,31,.3)" data-border="ff231f">
              <canvas></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="markets-capital-item">
            <h2>
              <img src="assets/img/icon/12.png" alt="MKR">
              <span>MKR</span>
            </h2>
            <div class="markets-capital-details">
              <h4>$431,684,298.45</h4>
              <h3 class="green">+11.79% <i class="icon ion-md-arrow-up"></i></h3>
            </div>
            <div class="markets-capital-chart" data-charts="[50,42,72,80,60,82,82,45,40,55]"
              data-bg="rgba(38,222,129,.3)" data-border="26de81">
              <canvas></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="markets-capital-item">
            <h2>
              <img src="assets/img/icon/13.png" alt="ZEC">
              <span>ZEC</span>
            </h2>
            <div class="markets-capital-details">
              <h4>$431,687,258.77</h4>
              <h3 class="red">-6.19% <i class="icon ion-md-arrow-down"></i></h3>
            </div>
            <div class="markets-capital-chart" data-charts="[50,59,81,81,56,55,40,80,90,82]"
              data-bg="rgba(255,35,31,.3)" data-border="ff231f">
              <canvas></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="markets-capital-item">
            <h2>
              <img src="assets/img/icon/14.png" alt="VSYS">
              <span>VSYS</span>
            </h2>
            <div class="markets-capital-details">
              <h4>$431,684,298.45</h4>
              <h3 class="green">+11.79% <i class="icon ion-md-arrow-up"></i></h3>
            </div>
            <div class="markets-capital-chart" data-charts="[50,42,82,45,40,55,72,80,60,82]"
              data-bg="rgba(38,222,129,.3)" data-border="26de81">
              <canvas></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="markets-capital-item">
            <h2>
              <img src="assets/img/icon/15.png" alt="ATOM">
              <span>ATOM</span>
            </h2>
            <div class="markets-capital-details">
              <h4>$431,684,298.45</h4>
              <h3 class="red">-6.19% <i class="icon ion-md-arrow-down"></i></h3>
            </div>
            <div class="markets-capital-chart" data-charts="[50,48,72,80,60,82,50,48,72,33,44]"
              data-bg="rgba(255,35,31,.3)" data-border="ff231f">
              <canvas></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="markets-capital-item">
            <h2>
              <img src="assets/img/icon/16.png" alt="MTV">
              <span>MTV</span>
            </h2>
            <div class="markets-capital-details">
              <h4>$431,684,298.45</h4>
              <h3 class="green">+11.79% <i class="icon ion-md-arrow-up"></i></h3>
            </div>
            <div class="markets-capital-chart" data-charts="[50,42,72,80,60,82,82,45,40,55]"
              data-bg="rgba(38,222,129,.3)" data-border="26de81">
              <canvas></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/amcharts-core.min.js"></script>
  <script src="assets/js/amcharts.min.js"></script>
  <script src="assets/js/Chart.bundle.min.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>
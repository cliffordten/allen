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
                <img style="width:55px;height:55px" class="rounded-circle" src="{{ $userData['profile'] ? asset($userData['profile']) : asset('/assets/img/avatar.svg')}} " alt="avatar">
              </a>
              <div class="dropdown-menu">
                <div class="dropdown-header d-flex flex-column align-items-center">
                  <div class="figure mb-3">
                    <img style="width:55px;height:55px" class="rounded-circle" src="{{ $userData['profile'] ? asset($userData['profile']) : asset('/assets/img/avatar.svg')}} " alt="">
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
                      <a href="/user/transactionHistory" class="nav-link">
                        <i class="icon ion-md-settings"></i>
                        <span>Transactions</span>
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
  <div class="container-fluid mtb15 no-fluid">
    <div class="row sm-gutters">
      <div class="col-md-3">
        <div class="market-pairs">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm"><i class="icon ion-md-search"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Search" aria-describedby="inputGroup-sizing-sm">
          </div>
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#STAR" role="tab" aria-selected="true"><i
                  class="icon ion-md-star"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#BTC" role="tab" aria-selected="true">BTC</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#ETH" role="tab" aria-selected="false">ETH</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#NEO" role="tab" aria-selected="false">NEO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#USDT" role="tab" aria-selected="false">USDT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#DAI" role="tab" aria-selected="false">DAI</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show" id="STAR" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> ETH/BTC</td>
                    <td>0.00020255</td>
                    <td class="red">-2.58%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> KCS/BTC</td>
                    <td>0.000013192</td>
                    <td class="green">+5.16%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XRP/BTC</td>
                    <td>0.00002996</td>
                    <td class="red">-1.55%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> VET/BTC</td>
                    <td>0.00000103</td>
                    <td class="green">+1.18%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show active" id="BTC" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> ETH/BTC</td>
                    <td>0.00020255</td>
                    <td class="red">-2.58%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> KCS/BTC</td>
                    <td>0.000013192</td>
                    <td class="green">+5.16%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XRP/BTC</td>
                    <td>0.00002996</td>
                    <td class="red">-1.55%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> VET/BTC</td>
                    <td>0.00000103</td>
                    <td class="green">+1.18%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> EOS/BTC</td>
                    <td>0.00000103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> BTT/BTC</td>
                    <td>0.0002303</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> LTC/BTC</td>
                    <td>0.03520103</td>
                    <td class="green">+1.15%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> TRX/BTC</td>
                    <td>0.00330103</td>
                    <td class="red">-3.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> BSV/BTC</td>
                    <td>0.00300103</td>
                    <td class="green">+2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> COTI/BTC</td>
                    <td>0.03500103</td>
                    <td class="green">+2.85%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XYT/BTC</td>
                    <td>0.00003103</td>
                    <td class="green">+3.55%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> BNB/BTC</td>
                    <td>0.003500103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XMR/BTC</td>
                    <td>0.003500103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> TRY/BTC</td>
                    <td>0.00000123</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> ADA/BTC</td>
                    <td>0.00050103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> NEO/BTC</td>
                    <td>0.00340103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XLM/BTC</td>
                    <td>0.00035103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> ENQ/BTC</td>
                    <td>0.00354103</td>
                    <td class="green">+2.02%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> AVA/BTC</td>
                    <td>0.02535103</td>
                    <td class="green">+3.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> AMB/BTC</td>
                    <td>0.05335103</td>
                    <td class="green">+1.0%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> MAP/BTC</td>
                    <td>0.00234103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> GO/BTC</td>
                    <td>0.00354103</td>
                    <td class="red">-6.50%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> KICK/BTC</td>
                    <td>0.02053103</td>
                    <td class="red">-6.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> DBC/BTC</td>
                    <td>0.02535103</td>
                    <td class="green">+7.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> GGC/BTC</td>
                    <td>0.00353103</td>
                    <td class="red">-4.05%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show" id="ETH" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> BTC/ETH</td>
                    <td>0.00020255</td>
                    <td class="green">+1.58%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> KCS/ETH</td>
                    <td>0.00013192</td>
                    <td class="red">-0.6%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XRP/ETH</td>
                    <td>0.00002996</td>
                    <td class="red">-0.55%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> VET/ETH</td>
                    <td>0.00000103</td>
                    <td class="green">+1.8%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> EOS/ETH</td>
                    <td>0.00000103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> BTT/ETH</td>
                    <td>0.00002303</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> LTC/ETH</td>
                    <td>0.03520103</td>
                    <td class="green">+1.5%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> TRX/ETH</td>
                    <td>0.00330103</td>
                    <td class="red">-3.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> BSV/ETH</td>
                    <td>0.00300103</td>
                    <td class="green">+2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> COTI/ETH</td>
                    <td>0.003500103</td>
                    <td class="green">+2.85%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XYT/ETH</td>
                    <td>0.00003103</td>
                    <td class="green">+3.55%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> BNB/ETH</td>
                    <td>0.003500103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XMR/ETH</td>
                    <td>0.003500103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> TRY/ETH</td>
                    <td>0.00000123</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> ADA/ETH</td>
                    <td>0.00050103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> NEO/ETH</td>
                    <td>0.00340103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XLM/ETH</td>
                    <td>0.00035103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> ENQ/ETH</td>
                    <td>0.00354103</td>
                    <td class="green">+2.02%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> AVA/ETH</td>
                    <td>0.02535103</td>
                    <td class="green">+3.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> AMB/ETH</td>
                    <td>0.05335103</td>
                    <td class="green">+1.0%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> MAP/ETH</td>
                    <td>0.00234103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> GO/ETH</td>
                    <td>0.00354103</td>
                    <td class="red">-6.50%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> KICK/ETH</td>
                    <td>0.02053103</td>
                    <td class="red">-6.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> DBC/ETH</td>
                    <td>0.02535103</td>
                    <td class="green">+7.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> GGC/ETH</td>
                    <td>0.00353103</td>
                    <td class="red">-4.05%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show" id="NEO" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> ETH/NEO</td>
                    <td>0.00350255</td>
                    <td class="red">-6.58%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> KCS/NEO</td>
                    <td>0.00013192</td>
                    <td class="green">+0.6%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XRP/NEO</td>
                    <td>0.00002996</td>
                    <td class="red">-0.55%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> VET/NEO</td>
                    <td>0.00000103</td>
                    <td class="green">+1.8%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> EOS/NEO</td>
                    <td>0.00000103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> BTT/NEO</td>
                    <td>0.00002303</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> LTC/NEO</td>
                    <td>0.03520103</td>
                    <td class="green">+1.5%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> TRX/NEO</td>
                    <td>0.00330103</td>
                    <td class="red">-3.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> BSV/NEO</td>
                    <td>0.00300103</td>
                    <td class="green">+2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> COTI/NEO</td>
                    <td>0.003500103</td>
                    <td class="green">+2.85%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XYT/NEO</td>
                    <td>0.00003103</td>
                    <td class="green">+3.55%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> BNB/NEO</td>
                    <td>0.003500103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XMR/NEO</td>
                    <td>0.003500103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> TRY/NEO</td>
                    <td>0.00000123</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> ADA/NEO</td>
                    <td>0.00050103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> NEO/NEO</td>
                    <td>0.00340103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XLM/NEO</td>
                    <td>0.00035103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> ENQ/NEO</td>
                    <td>0.00354103</td>
                    <td class="green">+2.02%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> AVA/NEO</td>
                    <td>0.02535103</td>
                    <td class="green">+3.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> AMB/NEO</td>
                    <td>0.05335103</td>
                    <td class="green">+1.0%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> MAP/NEO</td>
                    <td>0.00234103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> GO/NEO</td>
                    <td>0.00354103</td>
                    <td class="red">-6.50%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> KICK/NEO</td>
                    <td>0.02053103</td>
                    <td class="red">-6.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> DBC/NEO</td>
                    <td>0.02535103</td>
                    <td class="green">+7.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> GGC/NEO</td>
                    <td>0.00353103</td>
                    <td class="red">-4.05%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show" id="USDT" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> ETH/USDT</td>
                    <td>0.00350255</td>
                    <td class="red">-2.58%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> KCS/USDT</td>
                    <td>0.00013192</td>
                    <td class="green">+6.6%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XRP/USDT</td>
                    <td>0.00002996</td>
                    <td class="red">-0.55%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> VET/USDT</td>
                    <td>0.00000103</td>
                    <td class="green">+1.8%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> EOS/USDT</td>
                    <td>0.00000103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> BTT/USDT</td>
                    <td>0.00002303</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> LTC/USDT</td>
                    <td>0.03520103</td>
                    <td class="green">+1.5%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> TRX/USDT</td>
                    <td>0.00330103</td>
                    <td class="red">-3.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> BSV/USDT</td>
                    <td>0.00300103</td>
                    <td class="green">+2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> COTI/USDT</td>
                    <td>0.003500103</td>
                    <td class="green">+2.85%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XYT/USDT</td>
                    <td>0.00003103</td>
                    <td class="green">+3.55%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> BNB/USDT</td>
                    <td>0.003500103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XMR/USDT</td>
                    <td>0.003500103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> TRY/USDT</td>
                    <td>0.00000123</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> ADA/USDT</td>
                    <td>0.00050103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> USDT/USDT</td>
                    <td>0.00340103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XLM/USDT</td>
                    <td>0.00035103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> ENQ/USDT</td>
                    <td>0.00354103</td>
                    <td class="green">+2.02%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> AVA/USDT</td>
                    <td>0.02535103</td>
                    <td class="green">+3.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> AMB/USDT</td>
                    <td>0.05335103</td>
                    <td class="green">+1.0%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> MAP/USDT</td>
                    <td>0.00234103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> GO/USDT</td>
                    <td>0.00354103</td>
                    <td class="red">-6.50%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> KICK/USDT</td>
                    <td>0.02053103</td>
                    <td class="red">-6.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> DBC/USDT</td>
                    <td>0.02535103</td>
                    <td class="green">+7.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> GGC/USDT</td>
                    <td>0.00353103</td>
                    <td class="red">-4.05%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show" id="DAI" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> ETH/DAI</td>
                    <td>0.05320255</td>
                    <td class="green">+6.58%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> KCS/DAI</td>
                    <td>0.00013192</td>
                    <td class="green">+0.6%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XRP/DAI</td>
                    <td>0.00002996</td>
                    <td class="red">-0.55%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> VET/DAI</td>
                    <td>0.00000103</td>
                    <td class="green">+1.8%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> EOS/DAI</td>
                    <td>0.00000103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> BTT/DAI</td>
                    <td>0.00002303</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> LTC/DAI</td>
                    <td>0.03520103</td>
                    <td class="green">+1.5%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> TRX/DAI</td>
                    <td>0.00330103</td>
                    <td class="red">-3.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> BSV/DAI</td>
                    <td>0.00300103</td>
                    <td class="green">+2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> COTI/DAI</td>
                    <td>0.003500103</td>
                    <td class="green">+2.85%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XYT/DAI</td>
                    <td>0.00003103</td>
                    <td class="green">+3.55%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> BNB/DAI</td>
                    <td>0.003500103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XMR/DAI</td>
                    <td>0.003500103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> TRY/DAI</td>
                    <td>0.00000123</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> ADA/DAI</td>
                    <td>0.00050103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> DAI/DAI</td>
                    <td>0.00340103</td>
                    <td class="red">-1.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> XLM/DAI</td>
                    <td>0.00035103</td>
                    <td class="green">+5.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> ENQ/DAI</td>
                    <td>0.00354103</td>
                    <td class="green">+2.02%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> AVA/DAI</td>
                    <td>0.02535103</td>
                    <td class="green">+3.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> AMB/DAI</td>
                    <td>0.05335103</td>
                    <td class="green">+1.0%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> MAP/DAI</td>
                    <td>0.00234103</td>
                    <td class="red">-2.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> GO/DAI</td>
                    <td>0.00354103</td>
                    <td class="red">-6.50%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> KICK/DAI</td>
                    <td>0.02053103</td>
                    <td class="red">-6.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> DBC/DAI</td>
                    <td>0.02535103</td>
                    <td class="green">+7.05%</td>
                  </tr>
                  <tr data-href="/">
                    <td><i class="icon ion-md-star"></i> GGC/DAI</td>
                    <td>0.00353103</td>
                    <td class="red">-4.05%</td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="main-chart mb15 light-variant">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div id="tradingview_e8053"></div>
            <script src="https://s3.tradingview.com/tv.js"></script>
            <script>
              new TradingView.widget(
                {
                  "width": "100%",
                  "height": 550,
                  "symbol": "BITSTAMP:BTCUSD",
                  "interval": "D",
                  "timezone": "Etc/UTC",
                  "theme": "Light",
                  "style": "1",
                  "locale": "en",
                  "toolbar_bg": "#f1f3f6",
                  "enable_publishing": false,
                  "withdateranges": true,
                  "hide_side_toolbar": false,
                  "allow_symbol_change": true,
                  "show_popup_button": true,
                  "popup_width": "1000",
                  "popup_height": "650",
                  "container_id": "tradingview_e8053"
                }
              );
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="main-chart mb15 dark-variant">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div id="tradingview_e8033"></div>
            <script src="https://s3.tradingview.com/tv.js"></script>
            <script>
              new TradingView.widget(
                {
                  "width": "100%",
                  "height": 550,
                  "symbol": "BITSTAMP:BTCUSD",
                  "interval": "D",
                  "timezone": "Etc/UTC",
                  "theme": "dark",
                  "style": "1",
                  "locale": "en",
                  "toolbar_bg": "#f1f3f6",
                  "enable_publishing": false,
                  "withdateranges": true,
                  "hide_side_toolbar": false,
                  "allow_symbol_change": true,
                  "show_popup_button": true,
                  "popup_width": "1000",
                  "popup_height": "650",
                  "container_id": "tradingview_e8033"
                }
              );
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="market-trade">
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#pills-trade-limit" role="tab"
                aria-selected="true">Limit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-market" role="tab" aria-selected="false">Market</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-stop-limit" role="tab" aria-selected="false">Stop
                Limit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-stop-market" role="tab" aria-selected="false">Stop
                Market</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-trade-limit" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <form action="/wallet">
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Price" required />
                      <div class="input-group-append">
                        <span class="input-group-text">BTC</span>
                      </div>
                    </div>
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Amount" required />
                      <div class="input-group-append">
                        <span class="input-group-text">ETH</span>
                      </div>
                    </div>
                    <ul class="market-trade-list">
                      <li><a href="#!">25%</a></li>
                      <li><a href="#!">50%</a></li>
                      <li><a href="#!">75%</a></li>
                      <li><a href="#!">100%</a></li>
                    </ul>
                    <p>Available: <span>0 BTC = 0 USD</span></p>
                    <p>Volume: <span>0 BTC = 0 USD</span></p>
                    <p>Margin: <span>0 BTC = 0 USD</span></p>
                    <p>Fee: <span>0 BTC = 0 USD</span></p>
                    <button type="submit" class="btn buy">Buy</button>
                  </form>
                </div>
                <div class="market-trade-sell">
                  <form action="/wallet">
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Price" required />
                      <div class="input-group-append">
                        <span class="input-group-text">BTC</span>
                      </div>
                    </div>
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Amount" required />
                      <div class="input-group-append">
                        <span class="input-group-text">ETH</span>
                      </div>
                    </div>
                    <ul class="market-trade-list">
                      <li><a href="#!">25%</a></li>
                      <li><a href="#!">50%</a></li>
                      <li><a href="#!">75%</a></li>
                      <li><a href="#!">100%</a></li>
                    </ul>
                    <p>Available: <span>0 BTC = 0 USD</span></p>
                    <p>Volume: <span>0 BTC = 0 USD</span></p>
                    <p>Margin: <span>0 BTC = 0 USD</span></p>
                    <p>Fee: <span>0 BTC = 0 USD</span></p>
                    <button type="submit" class="btn sell">Sell</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-market" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <form action="/wallet">
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Price" required />
                      <div class="input-group-append">
                        <span class="input-group-text">BTC</span>
                      </div>
                    </div>
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Amount" required />
                      <div class="input-group-append">
                        <span class="input-group-text">ETH</span>
                      </div>
                    </div>
                    <ul class="market-trade-list">
                      <li><a href="#!">25%</a></li>
                      <li><a href="#!">50%</a></li>
                      <li><a href="#!">75%</a></li>
                      <li><a href="#!">100%</a></li>
                    </ul>
                    <p>Available: <span>0 BTC = 0 USD</span></p>
                    <p>Volume: <span>0 BTC = 0 USD</span></p>
                    <p>Margin: <span>0 BTC = 0 USD</span></p>
                    <p>Fee: <span>0 BTC = 0 USD</span></p>
                    <button type="submit" class="btn buy">Buy</button>
                  </form>
                </div>
                <div class="market-trade-sell">
                  <form action="/wallet">
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Price" required />
                      <div class="input-group-append">
                        <span class="input-group-text">BTC</span>
                      </div>
                    </div>
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Amount" required />
                      <div class="input-group-append">
                        <span class="input-group-text">ETH</span>
                      </div>
                    </div>
                    <ul class="market-trade-list">
                      <li><a href="#!">25%</a></li>
                      <li><a href="#!">50%</a></li>
                      <li><a href="#!">75%</a></li>
                      <li><a href="#!">100%</a></li>
                    </ul>
                    <p>Available: <span>0 BTC = 0 USD</span></p>
                    <p>Volume: <span>0 BTC = 0 USD</span></p>
                    <p>Margin: <span>0 BTC = 0 USD</span></p>
                    <p>Fee: <span>0 BTC = 0 USD</span></p>
                    <button type="submit" class="btn sell">Sell</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-stop-limit" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <form action="/wallet">
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Price" required />
                      <div class="input-group-append">
                        <span class="input-group-text">BTC</span>
                      </div>
                    </div>
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Amount" required />
                      <div class="input-group-append">
                        <span class="input-group-text">ETH</span>
                      </div>
                    </div>
                    <ul class="market-trade-list">
                      <li><a href="#!">25%</a></li>
                      <li><a href="#!">50%</a></li>
                      <li><a href="#!">75%</a></li>
                      <li><a href="#!">100%</a></li>
                    </ul>
                    <p>Available: <span>0 BTC = 0 USD</span></p>
                    <p>Volume: <span>0 BTC = 0 USD</span></p>
                    <p>Margin: <span>0 BTC = 0 USD</span></p>
                    <p>Fee: <span>0 BTC = 0 USD</span></p>
                    <button type="submit" class="btn buy">Buy</>
                  </form>
                </div>
                <div class="market-trade-sell">
                  <form action="/wallet">
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Price" required />
                      <div class="input-group-append">
                        <span class="input-group-text">BTC</span>
                      </div>
                    </div>
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Amount" required />
                      <div class="input-group-append">
                        <span class="input-group-text">ETH</span>
                      </div>
                    </div>
                    <ul class="market-trade-list">
                      <li><a href="#!">25%</a></li>
                      <li><a href="#!">50%</a></li>
                      <li><a href="#!">75%</a></li>
                      <li><a href="#!">100%</a></li>
                    </ul>
                    <p>Available: <span>0 BTC = 0 USD</span></p>
                    <p>Volume: <span>0 BTC = 0 USD</span></p>
                    <p>Margin: <span>0 BTC = 0 USD</span></p>
                    <p>Fee: <span>0 BTC = 0 USD</span></p>
                    <button type="submit" class="btn sell">Sell</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-stop-market" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <form action="/wallet">
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Price" required />
                      <div class="input-group-append">
                        <span class="input-group-text">BTC</span>
                      </div>
                    </div>
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Amount" required />
                      <div class="input-group-append">
                        <span class="input-group-text">ETH</span>
                      </div>
                    </div>
                    <ul class="market-trade-list">
                      <li><a href="#!">25%</a></li>
                      <li><a href="#!">50%</a></li>
                      <li><a href="#!">75%</a></li>
                      <li><a href="#!">100%</a></li>
                    </ul>
                    <p>Available: <span>0 BTC = 0 USD</span></p>
                    <p>Volume: <span>0 BTC = 0 USD</span></p>
                    <p>Margin: <span>0 BTC = 0 USD</span></p>
                    <p>Fee: <span>0 BTC = 0 USD</span></p>
                    <button class="btn buy">Buy</button>
                  </form>
                </div>
                <div class="market-trade-sell">
                  <form action="/wallet">
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Price" required />
                      <div class="input-group-append">
                        <span class="input-group-text">BTC</span>
                      </div>
                    </div>
                    <div class="input-group">
                      <input type="number" class="form-control" placeholder="Amount" required />
                      <div class="input-group-append">
                        <span class="input-group-text">ETH</span>
                      </div>
                    </div>
                    <ul class="market-trade-list">
                      <li><a href="#!">25%</a></li>
                      <li><a href="#!">50%</a></li>
                      <li><a href="#!">75%</a></li>
                      <li><a href="#!">100%</a></li>
                    </ul>
                    <p>Available: <span>0 BTC = 0 USD</span></p>
                    <p>Volume: <span>0 BTC = 0 USD</span></p>
                    <p>Margin: <span>0 BTC = 0 USD</span></p>
                    <p>Fee: <span>0 BTC = 0 USD</span></p>
                    <button type="submit" class="btn sell">Sell</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="order-book mb15">
          <h2 class="heading">Order Book</h2>
          <table class="table">
            <thead>
              <tr>
                <th>Price(BTC)</th>
                <th>Amount(ETH)</th>
                <th>Total(ETH)</th>
              </tr>
            </thead>
            <tbody>
              <tr class="red-bg-80">
                <td class="red">0.022572</td>
                <td>1.253415</td>
                <td>15.27648</td>
              </tr>
              <tr class="red-bg-60">
                <td class="red">0.020371</td>
                <td>1.205415</td>
                <td>15.25648</td>
              </tr>
              <tr class="red-bg-40">
                <td class="red">0.023572</td>
                <td>1.645415</td>
                <td>15.23648</td>
              </tr>
              <tr class="red-bg-20">
                <td class="red">0.032378</td>
                <td>1.206715</td>
                <td>15.25348</td>
              </tr>
              <tr class="red-bg-10">
                <td class="red">0.022573</td>
                <td>1.262415</td>
                <td>15.19648</td>
              </tr>
              <tr class="red-bg-8">
                <td class="red">0.154377</td>
                <td>1.225415</td>
                <td>15.35648</td>
              </tr>
              <tr class="red-bg-5">
                <td class="red">0.120373</td>
                <td>1.285415</td>
                <td>15.25648</td>
              </tr>
              <tr class="red-bg">
                <td class="red">0.028576</td>
                <td>1.291415</td>
                <td>15.26448</td>
              </tr>
            </tbody>
            <tbody class="ob-heading">
              <tr>
                <td>
                  <span>Last Price</span>
                  0.020367
                </td>
                <td>
                  <span>USD</span>
                  148.65
                </td>
                <td class="red">
                  <span>Change</span>
                  -0.51%
                </td>
              </tr>
            </tbody>
            <tbody>
              <tr class="green-bg">
                <td class="green">0.158373</td>
                <td>1.209515</td>
                <td>15.23248</td>
              </tr>
              <tr class="green-bg-5">
                <td class="green">0.020851</td>
                <td>1.206245</td>
                <td>15.25458</td>
              </tr>
              <tr class="green-bg-8">
                <td class="green">0.025375</td>
                <td>1.205715</td>
                <td>15.65648</td>
              </tr>
              <tr class="green-bg-10">
                <td class="green">0.020252</td>
                <td>1.205495</td>
                <td>15.24548</td>
              </tr>
              <tr class="green-bg-20">
                <td class="green">0.020373</td>
                <td>1.205415</td>
                <td>15.25648</td>
              </tr>
              <tr class="green-bg-40">
                <td class="green">0.020156</td>
                <td>1.207515</td>
                <td>15.28948</td>
              </tr>
              <tr class="green-bg-60">
                <td class="green">0.540375</td>
                <td>1.205915</td>
                <td>15.25748</td>
              </tr>
              <tr class="green-bg-80">
                <td class="green">0.020372</td>
                <td>1.205415</td>
                <td>15.25648</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="market-history">
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#recent-trades" role="tab" aria-selected="true">Recent
                Trades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#market-depth" role="tab" aria-selected="false">Market
                Depth</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="recent-trades" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Time</th>
                    <th>Price(BTC)</th>
                    <th>Amount(ETH)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>13:03:53</td>
                    <td class="red">0.020191</td>
                    <td>0.2155045</td>
                  </tr>
                  <tr>
                    <td>13:03:53</td>
                    <td class="green">0.020191</td>
                    <td>0.2155045</td>
                  </tr>
                  <tr>
                    <td>13:03:53</td>
                    <td class="green">0.020191</td>
                    <td>0.2155045</td>
                  </tr>
                  <tr>
                    <td>13:03:53</td>
                    <td class="red">0.020191</td>
                    <td>0.2155045</td>
                  </tr>
                  <tr>
                    <td>13:03:53</td>
                    <td class="green">0.020191</td>
                    <td>0.2155045</td>
                  </tr>
                  <tr>
                    <td>13:03:53</td>
                    <td class="green">0.020191</td>
                    <td>0.2155045</td>
                  </tr>
                  <tr>
                    <td>13:03:53</td>
                    <td class="green">0.020191</td>
                    <td>0.2155045</td>
                  </tr>
                  <tr>
                    <td>13:03:53</td>
                    <td class="red">0.020191</td>
                    <td>0.2155045</td>
                  </tr>
                  <tr>
                    <td>13:03:53</td>
                    <td class="red">0.020191</td>
                    <td>0.2155045</td>
                  </tr>
                  <tr>
                    <td>13:03:53</td>
                    <td class="green">0.020191</td>
                    <td>0.2155045</td>
                  </tr>
                  <tr>
                    <td>13:03:53</td>
                    <td class="green">0.020191</td>
                    <td>0.2155045</td>
                  </tr>
                  <tr>
                    <td>13:03:53</td>
                    <td class="red">0.020191</td>
                    <td>0.2155045</td>
                  </tr>
                  <tr>
                    <td>13:03:53</td>
                    <td class="green">0.020191</td>
                    <td>0.2155045</td>
                  </tr>
                  <tr>
                    <td>13:03:53</td>
                    <td class="red">0.020191</td>
                    <td>0.2155045</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="market-depth" role="tabpanel">
              <div class="depth-chart-container">
                <div class="depth-chart-inner">
                  <div id="lightDepthChart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="market-news mt15">
          <h2 class="heading">Market News</h2>
          <ul>
            <li><a href="/news-details">
                <strong>KCS Pay Fees Feature is Coming Soon</strong>
                To accelerate the ecosystem construction of KuCoin Share (KCS) and promote the implementation of the KCS
                application.
                <span>2019-12-04 20:22</span>
              </a></li>
            <li><a href="/news-details">
                <strong>KCS Pay Fees Feature is Coming Soon</strong>
                To accelerate the ecosystem construction of KuCoin Share (KCS) and promote the implementation of the KCS
                application.
                <span>2019-12-04 20:22</span>
              </a></li>
            <li><a href="/news-details">
                <strong>KCS Pay Fees Feature is Coming Soon</strong>
                To accelerate the ecosystem construction of KuCoin Share (KCS) and promote the implementation of the KCS
                application.
                <span>2019-12-04 20:22</span>
              </a></li>
            <li><a href="/news-details">
                <strong>KCS Pay Fees Feature is Coming Soon</strong>
                To accelerate the ecosystem construction of KuCoin Share (KCS) and promote the implementation of the KCS
                application.
                <span>2019-12-04 20:22</span>
              </a></li>
            <li><a href="/news-details">
                <strong>KCS Pay Fees Feature is Coming Soon</strong>
                To accelerate the ecosystem construction of KuCoin Share (KCS) and promote the implementation of the KCS
                application.
                <span>2019-12-04 20:22</span>
              </a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="market-history market-order mt15">
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#open-orders" role="tab" aria-selected="true">Open
                Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#stop-orders" role="tab" aria-selected="false">Closed
                Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#order-history" role="tab" aria-selected="false">Order
                history</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#trade-history" role="tab" aria-selected="false">Balance</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="open-orders" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
            <div class="tab-pane fade" id="stop-orders" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
            <div class="tab-pane fade" id="order-history" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
            <div class="tab-pane fade" id="trade-history" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
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
  <script src="assets/js/jquery.mCustomScrollbar.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    $('tbody, .market-news ul').mCustomScrollbar({
      theme: 'minimal',
    });
  </script>
</body>

</html>
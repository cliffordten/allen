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
          <li class="nav-item dropdown header-img-icon">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <img width=65 height=65 class="rounded-circle" src="{{ $userData['profile'] ? asset($userData['profile']) : asset('/assets/img/avatar.svg')}} " alt="avatar">
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-header d-flex flex-column align-items-center">
                <div class="figure mb-3">
                  <img width=65 height=65 class="rounded-circle" src="{{ $userData['profile'] ? asset($userData['profile']) : asset('/assets/img/avatar.svg')}} " alt="">
                </div>
                <div class="info text-center">
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
        </ul>
      </div>
    </nav>
</header>
  <div class="settings mtb15">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-lg-3">
          <div class="nav flex-column nav-pills settings-nav" id="v-pills-tab" role="tablist"
            aria-orientation="vertical">
            <a class="nav-link" id="settings-profile-tab" href="/user/profile"
              aria-controls="settings-profile" aria-selected="true"><i class="icon ion-md-person"></i> Profile</a>
            <a class="nav-link" id="settings-wallet-tab" href="/user/wallet"
              aria-controls="settings-wallet" aria-selected="false"><i class="icon ion-md-wallet"></i> Wallet</a>
            <a class="nav-link active" id="settings-tab" href="/user/settings"
              aria-controls="settings" aria-selected="false"><i class="icon ion-md-settings"></i> Settings</a>
          </div>
        </div>
        <div class="col-md-12 col-lg-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Notifications</h5>
                    <div class="settings-notification">
                      <ul>
                        <li>
                          <div class="notification-info">
                            <p>Update price</p>
                            <span>Get the update price in your dashboard</span>
                          </div>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="notification1">
                            <label class="custom-control-label" for="notification1"></label>
                          </div>
                        </li>
                        <li>
                          <div class="notification-info">
                            <p>2FA</p>
                            <span>Unable two factor authentication service</span>
                          </div>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="notification2" checked>
                            <label class="custom-control-label" for="notification2"></label>
                          </div>
                        </li>
                        <li>
                          <div class="notification-info">
                            <p>Latest news</p>
                            <span>Get the latest news in your mail</span>
                          </div>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="notification3">
                            <label class="custom-control-label" for="notification3"></label>
                          </div>
                        </li>
                        <li>
                          <div class="notification-info">
                            <p>Email Service</p>
                            <span>Get security code in your mail</span>
                          </div>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="notification4" checked>
                            <label class="custom-control-label" for="notification4"></label>
                          </div>
                        </li>
                        <li>
                          <div class="notification-info">
                            <p>Phone Notify</p>
                            <span>Get transition notification in your phone </span>
                          </div>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="notification5" checked>
                            <label class="custom-control-label" for="notification5"></label>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card settings-profile">
                  <div class="card-body">
                    <h5 class="card-title">Create API Key</h5>
                    <div class="form-row">
                      <div class="col-md-6">
                        <label for="generateKey">Generate key name</label>
                        <input id="generateKey" type="text" class="form-control" placeholder="Enter your key name">
                      </div>
                      <div class="col-md-6">
                        <label for="rewritePassword">Confirm password</label>
                        <input id="rewritePassword" type="password" class="form-control"
                          placeholder="Confirm your password">
                      </div>
                      <div class="col-md-12">
                        <input type="submit" value="Create API key">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Your API Keys</h5>
                    <div class="wallet-history">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Key</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>zRmWVcrAZ1C0RZkFMu7K5v0KWC9jUJLt</td>
                            <td>
                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="apiStatus1" checked>
                                <label class="custom-control-label" for="apiStatus1"></label>
                              </div>
                            </td>
                            <td><i class="icon ion-md-trash"></i></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Rv5dgnKdmVPyHwxeExBYz8uFwYQz3Jvg</td>
                            <td>
                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="apiStatus2">
                                <label class="custom-control-label" for="apiStatus2"></label>
                              </div>
                            </td>
                            <td><i class="icon ion-md-trash"></i></td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>VxEYIs1HwgmtKTUMA4aknjSEjjePZIWu</td>
                            <td>
                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="apiStatus3">
                                <label class="custom-control-label" for="apiStatus3"></label>
                              </div>
                            </td>
                            <td><i class="icon ion-md-trash"></i></td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>M01DueJ4x3awI1SSLGT3CP1EeLSnqt8o</td>
                            <td>
                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="apiStatus4">
                                <label class="custom-control-label" for="apiStatus4"></label>
                              </div>
                            </td>
                            <td><i class="icon ion-md-trash"></i></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
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
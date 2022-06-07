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
              <img style="width:40px;height:40px" class="rounded-circle" src="{{ $userData['profile'] ? asset($userData['profile']) : asset('/assets/img/avatar.svg')}} " alt="avatar">
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-header d-flex flex-column align-items-center">
                <div class="figure mb-3">
                  <img style="width:40px;height:40px" class="rounded-circle" src="{{ $userData['profile'] ? asset($userData['profile']) : asset('/assets/img/avatar.svg')}} " alt="">
                </div>
                <div class="info text-center">
                  <p class="name font-weight-bold mb-0">Welcome Admin</p>
                  <p class="email text-muted mb-3">{{$userData['fullName']}}</p>
                  <p class="email text-muted mb-3">{{$userData['email']}}</p>
                </div>
              </div>
              <div class="dropdown-body">
                <ul class="profile-nav">
                  <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link">
                      <i class="icon ion-md-wallet"></i>
                      <span>Dashboard</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/profile" class="nav-link">
                      <i class="icon ion-md-person"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/transactionHistory" class="nav-link">
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
            <a class="nav-link " id="settings-wallet-tab" href="/admin/dashboard"
            aria-controls="settings-wallet" aria-selected="false"><i class="icon ion-md-wallet"></i> Dashboard </a>
            <a class="nav-link" id="settings-tab" href="/admin/transactionHistory"
            aria-controls="settings" aria-selected="false"><i class="icon ion-md-settings"></i>Manage Transactions</a>
            <a class="nav-link active" id="settings-profile-tab" href="/admin/profile"
            aria-controls="settings-profile" aria-selected="true"><i class="icon ion-md-person"></i> Profile</a>
          </div>
        </div>
        <div class="col-md-12 col-lg-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="settings-profile" role="tabpanel"
              aria-labelledby="settings-profile-tab">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">General Information</h5>
                  <div class="settings-profile">
                    <form action="{{ route('updateUserProfile') }}" method="post" enctype="multipart/form-data">

                      @csrf

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

                      <img style="width:55px;height:55px" class="rounded-circle" src="{{ $userData['profile'] ? asset($userData['profile']) : asset('/assets/img/avatar.svg')}} " alt="avatar">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="profile" id="fileUpload" />
                        <label class="custom-file-label" for="fileUpload">Choose avatar</label>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-md-6">
                          <label class="text-secondary" for="formFirst">First name</label>
                          <input value="{{ explode(' ', $userData['fullName'])[0] }}" id="formFirst" name="firstName" type="text" class="form-control" placeholder="First name" required>
                        </div>
                        <div class="col-md-6">
                          <label class="text-secondary" for="formLast">Last name</label>
                          <input value="{{ count(explode(' ', $userData['fullName'])) > 1 ? explode(' ', $userData['fullName'])[1]: '' }}" id="formLast" name="lastName" type="text" class="form-control" placeholder="Last name">
                        </div>
                        <div class="col-md-6">
                          <label class="text-secondary" for="emailAddress">Email</label>
                          <input value="{{ $userData['email'] }}" id="emailAddress" name="email" type="text" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="col-md-6">
                          <label class="text-secondary" for="phoneNumber">Phone</label>
                          <input value="{{ $userData['phone'] ? $userData['phone']: '' }}" id="phoneNumber" name="phone" type="text" class="form-control" placeholder="Enter phone number">
                        </div>
                        <div class="col-md-6">
                          <label class="text-secondary" for="selectLanguage">Language</label>
                          <select id="selectLanguage" name="language" class="custom-select" placeholder="Select Language">
                            <option {{$userData['language'] == "English"? "selected": ""}}>English</option>
                            <option {{$userData['language'] == "Mandarin Chinese"? "selected": ""}}>Mandarin Chinese</option>
                            <option  {{$userData['language'] == "Spanish"? "selected": ""}}>Spanish</option>
                            <option  {{$userData['language'] == "Arabic"? "selected": ""}}>Arabic</option>
                            <option  {{$userData['language'] == "Russian"? "selected": ""}}>Russian</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label class="text-secondary" for="selectCurrency">Currency</label>
                          <select id="selectCurrency" name="currency" class="custom-select" placeholder="Select Currency">
                            <option {{$userData['currency'] == 'USD'? "selected": ""}}>USD</option>
                            <option {{$userData['currency'] == 'EUR'? "selected": ""}}>EUR</option>
                            <option {{$userData['currency'] == 'GBP'? "selected": ""}}>GBP</option>
                            <option {{$userData['currency'] == 'CHF'? "selected": ""}}>CHF</option>
                          </select>
                        </div>
                        <div class="col-md-12">
                          <input type="submit" value="Update">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Change Password</h5>
                  <div class="settings-profile">
                    <form action="{{ route('changeUserPassword') }}" method="post">

                      @csrf

                      <div class="form-row">
                        <div class="col-md-6">
                          <label for="password">Current password</label>
                          <input name="password" id="password" type="password" class="form-control" placeholder="Enter your password" required />
                        </div>
                        <div class="col-md-6">
                        </div>
                
                        <div class="col-md-6">
                          <label for="newPass">New password</label>
                          <input name="newPass" id="newPass" type="password" class="form-control" placeholder="Enter new password">
                        </div>
                        <div class="col-md-6">
                       </div>

                        <div class="col-md-6">
                          <label for="confirmPass">Confirm password</label>
                          <input name="confirmPass" id="confirmPass" type="password" class="form-control" placeholder="Enter new password">
                        </div>
                        <div class="col-md-6">
                        </div>

                        <div class="col-md-12">
                          <input type="submit" value="Update password">
                        </div>
                      </div>
                    </form>
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
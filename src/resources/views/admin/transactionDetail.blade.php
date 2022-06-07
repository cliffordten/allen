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
            <a class="nav-link active" id="settings-tab" href="/admin/transactionHistory"
            aria-controls="settings" aria-selected="true"><i class="icon ion-md-settings"></i>Manage Transactions</a>
            <a class="nav-link" id="settings-profile-tab" href="/admin/profile"
            aria-controls="settings-profile" aria-selected="false"><i class="icon ion-md-person"></i> Profile</a>
          </div>
        </div>
        <div class="col-md-12 col-lg-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="settings-profile" role="tabpanel"
              aria-labelledby="settings-profile-tab">

              @if(isset($transactionDetail['transaction']))
                <div class="card">

                    <div class="card-body">

                        <div class="row mb-2 justify-content-between">
                            <div class="col-6" >

                                
                                <h5 class="card-title  mb-2 w-2">{{$transactionDetail['transaction']['type'] == 'DEPOSIT'? 'Proof of Payment': (($transactionDetail['transaction']['status'] == 'PENDING')?'Perform Action':'')}}</h5>

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

                            </div>

                            @if($transactionDetail['transaction']['status'] == 'PENDING')
                                <div class="col-5">
                                    <form action="{{ route('processUserTransaction', $transactionDetail['transaction']['id']) }}" method="post">
                                        @csrf
                                        <div class="flex mb-2 mr-2" style="text-align-last:end">
                                            <button name="actionType" value="approve" type="submit" class="btn green mr-1">Approve</button>
                                            <button name="actionType" value="reject" type="submit" class="btn red">Reject</button>
                                        </div>
                                        <div class="flex" style="text-align-last:end">
                                            <span class="text-white mr-2">Update amount in {{$transactionDetail['transaction']['currency']}}</span>
                                            <input type="text" name="amount" id="amount" value="{{$transactionDetail['transaction']['amount']}}" placeholder="Update amount" style="background-color:transparent;border:1px solid #272b36;padding:6px 12px;border-radius:5px;color:#fff;margin-right:10px">
                                        </div>
                                    </form>
                                </div>
                            @endif
                        </div>

                        @if($transactionDetail['transaction']['type'] == 'DEPOSIT')
                          <div class="wallet-history mb-4 " style="text-align-last:center">
                              <div class="row">
                                  <div class="col my-3">
                                      <img style="height:200px" class="rounded w-75" src="{{ $transactionDetail['transaction']['state'] ? asset($transactionDetail['transaction']['state']) : asset('/assets/img/avatar.svg')}} " alt="avatar">
                                  </div>
                              </div>
                          </div>
                        @endif

                        <h5 class="card-title">User Transaction Information</h5>

                        <div class="wallet-history">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>State</th>
                                    <th>Receiver Name</th>
                                    <th>Transaction Type</th>
                                    <th>Status</th>

                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$transactionDetail['transaction']['created_at']}}</td>
                                        <td>{{$transactionDetail['transaction']['amount']}} {{$transactionDetail['transaction']['currency']}}</td>
                                        <td class="{{$transactionDetail['transaction']['status'] == 'PENDING' ? 'yellow': ($transactionDetail['transaction']['status'] == 'COMPLETED' ? 'green' : 'red') }}">{{$transactionDetail['transaction']['status']}}</td>
                                        <td>{{$transactionDetail['transaction']['senderName']? $transactionDetail['transaction']['senderName']: '---'}}</td>
                                        <td>{{$transactionDetail['transaction']['type']}}</td>
                                        <td><i class="icon ion-md-checkmark-circle-outline {{$transactionDetail['transaction']['status'] == 'PENDING' ? 'yellow': ($transactionDetail['transaction']['status'] == 'COMPLETED' ? 'green' : 'red') }}"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">User Information</h5>
                        <div class="wallet-history">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Language</th>
                                    <th>Base Currency</th>
                                    <th>Signup Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img style="width:55px;height:55px" class="rounded-circle" src="{{ $transactionDetail['user']['profile'] ? asset($transactionDetail['user']['profile']) : asset('/assets/img/avatar.svg')}} " alt="avatar">
                                        </td>
                                        <td>{{$transactionDetail['user']['fullName']}}</td>
                                        <td>{{$transactionDetail['user']['email']}}</td>
                                        <td>{{$transactionDetail['user']['phone']? $transactionDetail['user']['phone']: '---'}}</td>
                                        <td>{{$transactionDetail['user']['language']? $transactionDetail['user']['language']: '---'}}</td>
                                        <td>{{$transactionDetail['user']['currency']? $transactionDetail['user']['currency']: '---'}}</td>
                                        <td>{{$transactionDetail['user']['created_at']}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
              @endif
              @if(!isset($transactionDetail['transaction']))
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">No Transaction Details Found</h5>
                    </div>
                  </div>
              @endif  
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
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
          <a class="nav-link mt-2">
          {{Session::get('transactionInfo')['displayAmount']}}
        </a>
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
            <a class="nav-link active" id="settings-wallet-tab" href="/user/wallet"
              aria-controls="settings-wallet" aria-selected="false"><i class="icon ion-md-wallet"></i> Wallet</a>
            <a class="nav-link " id="settings-tab" href="/user/settings"
              aria-controls="settings" aria-selected="false"><i class="icon ion-md-settings"></i> Settings</a>
          </div>
        </div>
        <div class="col-md-12 col-lg-9">
          <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="settings-wallet" role="tabpanel" aria-labelledby="settings-wallet-tab">
              <div class="wallet">
                <div class="row">
                  <div class="col-md-12 col-lg-4">
                    <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">

                      <form id="toogleCurrency" action="{{ route('selectCurrency') }}" method="post">

                        @csrf

                        <button name="currency" type="submit" class="m-0 p-0 bg-transparent w-100 border-0" value="BTC">
                          <a class="nav-link d-flex justify-content-between align-items-center {{(Session::get('transactionInfo')['currency']) == 'BTC' ? 'active': ''}}"
                            >
                            <div class="d-flex">
                              <img src="/assets/img/icon/18.png" alt="btc">
                              <div>
                                <h2>BTC</h2>
                                <p>Bitcoin</p>
                              </div>
                            </div>
                            <div>
                              <h3>4.5484254</h3>
                              <p class="text-right"><i class="icon ion-md-lock"></i> {{ isset($wallets["BTC"]) ? $wallets["BTC"]["amount"] : "0.0000000"}}</p>
                            </div>
                          </a>
                        </button>

                        <button name="currency" type="submit" class="m-0 p-0 bg-transparent w-100 border-0" value="ETH">
                          <a class="nav-link d-flex justify-content-between align-items-center {{(Session::get('transactionInfo')['currency']) == 'ETH' ? 'active': ''}}"
                            >
                            <div class="d-flex">
                              <img src="/assets/img/icon/1.png" alt="btc">
                              <div>
                                <h2>ETH</h2>
                                <p>Ethereum</p>
                              </div>
                            </div>
                            <div>
                              <h3>13.454845</h3>
                              <p class="text-right"><i class="icon ion-md-lock"></i> {{ isset($wallets["ETH"]) ? $wallets["ETH"]["amount"] : "0.0000000"}}</p>
                            </div>
                          </a>
                        </button>

                        <button name="currency" type="submit" class="m-0 p-0 bg-transparent w-100 border-0" value="BNB">
                          <a class="nav-link d-flex justify-content-between align-items-center {{(Session::get('transactionInfo')['currency']) == 'BNB' ? 'active': ''}}"
                            >
                            <div class="d-flex">
                              <img src="/assets/img/icon/9.png" alt="btc">
                              <div>
                                <h2>BNB</h2>
                                <p>Binance</p>
                              </div>
                            </div>
                            <div>
                              <h3>35.4842458</h3>
                              <p class="text-right"><i class="icon ion-md-lock"></i> {{ isset($wallets["BNB"]) ? $wallets["BNB"]["amount"] : "0.0000000"}}</p>
                            </div>
                          </a>
                        </button>

                        <button name="currency" type="submit" class="m-0 p-0 bg-transparent w-100 border-0" value="TRX">
                          <a class="nav-link d-flex justify-content-between align-items-center {{(Session::get('transactionInfo')['currency']) == 'TRX' ? 'active': ''}}"
                            >
                            <div class="d-flex">
                              <img src="/assets/img/icon/6.png" alt="btc">
                              <div>
                                <h2>TRX</h2>
                                <p>Tron</p>
                              </div>
                            </div>
                            <div>
                              <h3>4.458941</h3>
                              <p class="text-right"><i class="icon ion-md-lock"></i> {{ isset($wallets["TRX"]) ? $wallets["TRX"]["amount"] : "0.0000000"}}</p>
                            </div>
                          </a>
                        </button>

                        <button name="currency" type="submit" class="m-0 p-0 bg-transparent w-100 border-0" value="EOS">
                          <a class="nav-link d-flex justify-content-between align-items-center {{(Session::get('transactionInfo')['currency']) == 'EOS' ? 'active': ''}}"
                            >
                            <div class="d-flex">
                              <img src="/assets/img/icon/2.png" alt="btc">
                              <div>
                                <h2>EOS</h2>
                                <p>Eosio</p>
                              </div>
                            </div>
                            <div>
                              <h3>33.478951</h3>
                              <p class="text-right"><i class="icon ion-md-lock"></i> {{ isset($wallets["EOS"]) ? $wallets["EOS"]["amount"] : "0.0000000"}}</p>
                            </div>
                          </a>
                        </button>

                        <button name="currency" type="submit" class="m-0 p-0 bg-transparent w-100 border-0" value="XMR">
                          <a class="nav-link d-flex justify-content-between align-items-center {{(Session::get('transactionInfo')['currency']) == 'XMR' ? 'active': ''}}"
                            >
                            <div class="d-flex">
                              <img src="/assets/img/icon/7.png" alt="btc">
                              <div>
                                <h2>XMR</h2>
                                <p>Monero</p>
                              </div>
                            </div>
                            <div>
                              <h3>99.465975</h3>
                              <p class="text-right"><i class="icon ion-md-lock"></i> {{ isset($wallets["XMR"]) ? $wallets["XMR"]["amount"] : "0.0000000"}}</p>
                            </div>
                          </a>
                        </button>

                        <button name="currency" type="submit" class="m-0 p-0 bg-transparent w-100 border-0" value="KCS">
                          <a class="nav-link d-flex justify-content-between align-items-center {{(Session::get('transactionInfo')['currency']) == 'KCS' ? 'active': ''}}"
                            >
                            <div class="d-flex">
                              <img src="/assets/img/icon/4.png" alt="btc">
                              <div>
                                <h2>KCS</h2>
                                <p>Kstarcoin</p>
                              </div>
                            </div>
                            <div>
                              <h3>114.57564</h3>
                              <p class="text-right"><i class="icon ion-md-lock"></i> {{ isset($wallets["KCS"]) ? $wallets["KCS"]["amount"] : "0.0000000"}}</p>
                            </div>
                          </a>
                        </button>

                      </form>

                    </div>
                  </div>
                  <div class="col-md-12 col-lg-8">
                    <div class="tab-content">
                      {{var_dump(Session::get('transactionInfo'))}}
                      <!-- coinBTC -->
                      <div class="tab-pane fade {{(Session::get('transactionInfo')['currency']) == 'BTC' ? 'show active': ''}}" id="coinBTC" role="tabpanel">
                        
                        @if(!isset(Session::get('transactionInfo')['BTC']))
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Balances</h5>
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
                                  
                              <ul>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-cash"></i>
                                    <h2>Total Equity</h2>
                                  </div>
                                  @if(isset($wallets["BTC"]))
                                    <div>
                                      <h3>{{$wallets["BTC"]["amount"]}} BTC</h3>
                                    </div>
                                  @endif

                                  @if(!isset($wallets["BTC"]))
                                    <div>
                                      <h3 class="text-secondary">No BTC wallet found</h3>
                                    </div>
                                  @endif
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-checkmark"></i>
                                    <h2>Your Address</h2>
                                  </div>
                                  @if(!isset($wallets["BTC"]))
                                    <form action="{{ route('createUserWallet', 'BTC') }}" method="post">
                                      @csrf
                                      <input class="btn btn-secondary" type="submit" value="Create BTC Wallet">
                                    </form>
                                  @endif
                                  @if(isset($wallets["BTC"]))
                                    <div>
                                      <h3>{{$wallets['BTC']['userAddress']}} BTC</h3>
                                    </div>
                                  @endif
                                </li>
                              </ul>
                              
                              @if(isset($wallets["BTC"]))
                                <div class="row">
                                  <form class="col" action="{{ route('makeTransaction', ['BTC', 'Deposit']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn green">Deposit</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['BTC', 'Withdraw']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn red">Withdraw</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['BTC', 'Transfer']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn btn-primary">Transfer</button>
                                  </form>
                                </div>
                              @endif

                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Wallet Deposit Address</h5>
                              <div class="row wallet-address">
                                <div class="col-md-8">
                                  <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                    of your
                                    funds at once if you deposit more than your daily withdrawal limit.</p>
                                  <div class="input-group">
                                    <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                    <div class="input-group-prepend">
                                      <button class="btn btn-primary">COPY</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <img src="/assets/img/qr-code-light.svg" alt="qr-code">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Latest Transactions</h5>
                              <div class="wallet-history">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
                                      <th>Date</th>
                                      <th>Status</th>
                                      <th>Amount</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>25-04-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>4.5454334</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>25-05-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>0.5484468</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>25-06-2019</td>
                                      <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                      <td>2.5454545</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>25-07-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>1.45894147</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>25-08-2019</td>
                                      <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                      <td>2.5454545</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        @endif

                        <!---PerformTransactions---->
                        @if(isset(Session::get('transactionInfo')['BTC']))

                          @if((Session::get('transactionInfo')['type']) == "Deposit")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Deposit BTC or Topup your BTC account</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post" enctype="multipart/form-data">

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

                                      <div class="form-row mt-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount paid</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount paid" required>
                                        </div>
                                      </div>
                                      <label class="text-secondary mt-4" for="formFirst">Proof of Payment</label>
                                      <div class="form-row pl-2 mb-4">
                                        <div class="col">
                                          <input type="file" class="custom-file-input h-200" name="paymentProof" id="fileUpload" />
                                          <label class="custom-file-label  h-200" for="fileUpload">Browse</label>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn green">Request Deposit</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                          @if((Session::get('transactionInfo')['type']) == "Withdraw")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Request BTC withdrawal</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post">

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

                                      <div class="form-row mt-4 mb-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount to withdraw</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount" required>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn red">Request Withdraw</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                          @if((Session::get('transactionInfo')['type']) == "Transfer")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Transfer BTC to another wallet</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post">

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

                                      <div class="form-row mt-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount to transfer</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount" required>
                                        </div>
                                      </div>
                                      <div class="form-row mt-4 mb-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Receiver's BTC address</label>
                                          <input id="formFirst" name="senderAddress" type="text" class="form-control" placeholder="BTC address" required>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn btn-primary"> Make Transfer</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                        @endif
                      </div>

                      <!-- coinETH -->
                      <div class="tab-pane fade {{(Session::get('transactionInfo')['currency']) == 'ETH' ? 'show active': ''}}" id="coinETH" role="tabpanel">
                        
                        @if(!isset(Session::get('transactionInfo')['ETH']))
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Balances</h5>
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
                                  
                              <ul>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-cash"></i>
                                    <h2>Total Equity</h2>
                                  </div>
                                  @if(isset($wallets["ETH"]))
                                    <div>
                                      <h3>{{$wallets["ETH"]["amount"]}} ETH</h3>
                                    </div>
                                  @endif

                                  @if(!isset($wallets["ETH"]))
                                    <div>
                                      <h3 class="text-secondary">No ETH wallet found</h3>
                                    </div>
                                  @endif
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-checkmark"></i>
                                    <h2>Your Address</h2>
                                  </div>
                                  @if(!isset($wallets["ETH"]))
                                    <form action="{{ route('createUserWallet', 'ETH') }}" method="post">
                                      @csrf
                                      <input class="btn btn-secondary" type="submit" value="Create ETH Wallet">
                                    </form>
                                  @endif
                                  @if(isset($wallets["ETH"]))
                                    <div>
                                      <h3>{{$wallets['ETH']['userAddress']}} ETH</h3>
                                    </div>
                                  @endif
                                </li>
                              </ul>
                              
                              @if(isset($wallets["ETH"]))
                                <div class="row">
                                  <form class="col" action="{{ route('makeTransaction', ['ETH', 'Deposit']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn green">Deposit</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['ETH', 'Withdraw']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn red">Withdraw</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['ETH', 'Transfer']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn btn-primary">Transfer</button>
                                  </form>
                                </div>
                              @endif

                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Wallet Deposit Address</h5>
                              <div class="row wallet-address">
                                <div class="col-md-8">
                                  <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                    of your
                                    funds at once if you deposit more than your daily withdrawal limit.</p>
                                  <div class="input-group">
                                    <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                    <div class="input-group-prepend">
                                      <button class="btn btn-primary">COPY</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <img src="/assets/img/qr-code-light.svg" alt="qr-code">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Latest Transactions</h5>
                              <div class="wallet-history">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
                                      <th>Date</th>
                                      <th>Status</th>
                                      <th>Amount</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>25-04-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>4.5454334</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>25-05-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>0.5484468</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>25-06-2019</td>
                                      <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                      <td>2.5454545</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>25-07-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>1.45894147</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>25-08-2019</td>
                                      <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                      <td>2.5454545</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        @endif

                        <!---PerformTransactions---->
                        @if(isset(Session::get('transactionInfo')['ETH']))

                          @if((Session::get('transactionInfo')['type']) == "Deposit")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Deposit ETH or Topup your ETH account</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post" enctype="multipart/form-data">

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

                                      <div class="form-row mt-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount paid</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount paid" required>
                                        </div>
                                      </div>
                                      <label class="text-secondary mt-4" for="formFirst">Proof of Payment</label>
                                      <div class="form-row pl-2 mb-4">
                                        <div class="col">
                                          <input type="file" class="custom-file-input h-200" name="paymentProof" id="fileUpload" />
                                          <label class="custom-file-label  h-200" for="fileUpload">Browse</label>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn green">Request Deposit</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                          @if((Session::get('transactionInfo')['type']) == "Withdraw")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Request ETH withdrawal</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post">

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

                                      <div class="form-row mt-4 mb-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount to withdraw</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount" required>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn red">Request Withdraw</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                          @if((Session::get('transactionInfo')['type']) == "Transfer")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Transfer ETH to another wallet</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post">

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

                                      <div class="form-row mt-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount to transfer</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount" required>
                                        </div>
                                      </div>
                                      <div class="form-row mt-4 mb-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Receiver's ETH address</label>
                                          <input id="formFirst" name="senderAddress" type="text" class="form-control" placeholder="ETH address" required>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn btn-primary"> Make Transfer</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                        @endif
                      </div>

                      <!-- coinBNB -->
                      <div class="tab-pane fade {{(Session::get('transactionInfo')['currency']) == 'BNB' ? 'show active': ''}}" id="coinBNB" role="tabpanel">
                        
                        @if(!isset(Session::get('transactionInfo')['BNB']))
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Balances</h5>
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
                                  
                              <ul>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-cash"></i>
                                    <h2>Total Equity</h2>
                                  </div>
                                  @if(isset($wallets["BNB"]))
                                    <div>
                                      <h3>{{$wallets["BNB"]["amount"]}} BNB</h3>
                                    </div>
                                  @endif

                                  @if(!isset($wallets["BNB"]))
                                    <div>
                                      <h3 class="text-secondary">No BNB wallet found</h3>
                                    </div>
                                  @endif
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-checkmark"></i>
                                    <h2>Your Address</h2>
                                  </div>
                                  @if(!isset($wallets["BNB"]))
                                    <form action="{{ route('createUserWallet', 'BNB') }}" method="post">
                                      @csrf
                                      <input class="btn btn-secondary" type="submit" value="Create BNB Wallet">
                                    </form>
                                  @endif
                                  @if(isset($wallets["BNB"]))
                                    <div>
                                      <h3>{{$wallets['BNB']['userAddress']}} BNB</h3>
                                    </div>
                                  @endif
                                </li>
                              </ul>
                              
                              @if(isset($wallets["BNB"]))
                                <div class="row">
                                  <form class="col" action="{{ route('makeTransaction', ['BNB', 'Deposit']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn green">Deposit</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['BNB', 'Withdraw']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn red">Withdraw</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['BNB', 'Transfer']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn btn-primary">Transfer</button>
                                  </form>
                                </div>
                              @endif

                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Wallet Deposit Address</h5>
                              <div class="row wallet-address">
                                <div class="col-md-8">
                                  <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                    of your
                                    funds at once if you deposit more than your daily withdrawal limit.</p>
                                  <div class="input-group">
                                    <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                    <div class="input-group-prepend">
                                      <button class="btn btn-primary">COPY</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <img src="/assets/img/qr-code-light.svg" alt="qr-code">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Latest Transactions</h5>
                              <div class="wallet-history">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
                                      <th>Date</th>
                                      <th>Status</th>
                                      <th>Amount</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>25-04-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>4.5454334</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>25-05-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>0.5484468</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>25-06-2019</td>
                                      <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                      <td>2.5454545</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>25-07-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>1.45894147</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>25-08-2019</td>
                                      <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                      <td>2.5454545</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        @endif

                        <!---PerformTransactions---->
                        @if(isset(Session::get('transactionInfo')['BNB']))

                          @if((Session::get('transactionInfo')['type']) == "Deposit")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Deposit BNB or Topup your BNB account</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post" enctype="multipart/form-data">

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

                                      <div class="form-row mt-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount paid</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount paid" required>
                                        </div>
                                      </div>
                                      <label class="text-secondary mt-4" for="formFirst">Proof of Payment</label>
                                      <div class="form-row pl-2 mb-4">
                                        <div class="col">
                                          <input type="file" class="custom-file-input h-200" name="paymentProof" id="fileUpload" />
                                          <label class="custom-file-label  h-200" for="fileUpload">Browse</label>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn green">Request Deposit</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                          @if((Session::get('transactionInfo')['type']) == "Withdraw")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Request BNB withdrawal</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post">

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

                                      <div class="form-row mt-4 mb-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount to withdraw</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount" required>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn red">Request Withdraw</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                          @if((Session::get('transactionInfo')['type']) == "Transfer")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Transfer BNB to another wallet</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post">

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

                                      <div class="form-row mt-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount to transfer</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount" required>
                                        </div>
                                      </div>
                                      <div class="form-row mt-4 mb-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Receiver's BNB address</label>
                                          <input id="formFirst" name="senderAddress" type="text" class="form-control" placeholder="BNB address" required>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn btn-primary"> Make Transfer</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                        @endif
                      </div>

                      <!-- coinTRX -->
                      <div class="tab-pane fade {{(Session::get('transactionInfo')['currency']) == 'TRX' ? 'show active': ''}}" id="coinTRX" role="tabpanel">
                        
                        @if(!isset(Session::get('transactionInfo')['TRX']))
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Balances</h5>
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
                                  
                              <ul>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-cash"></i>
                                    <h2>Total Equity</h2>
                                  </div>
                                  @if(isset($wallets["TRX"]))
                                    <div>
                                      <h3>4{{$wallets["TRX"]["amount"]}} TRX</h3>
                                    </div>
                                  @endif

                                  @if(!isset($wallets["TRX"]))
                                    <div>
                                      <h3 class="text-secondary">No TRX wallet found</h3>
                                    </div>
                                  @endif
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-checkmark"></i>
                                    <h2>Your Address</h2>
                                  </div>
                                  @if(!isset($wallets["TRX"]))
                                    <form action="{{ route('createUserWallet', 'TRX') }}" method="post">
                                      @csrf
                                      <input class="btn btn-secondary" type="submit" value="Create TRX Wallet">
                                    </form>
                                  @endif
                                  @if(isset($wallets["TRX"]))
                                    <div>
                                      <h3>{{$wallets['TRX']['userAddress']}} TRX</h3>
                                    </div>
                                  @endif
                                </li>
                              </ul>
                              
                              @if(isset($wallets["TRX"]))
                                <div class="row">
                                  <form class="col" action="{{ route('makeTransaction', ['TRX', 'Deposit']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn green">Deposit</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['TRX', 'Withdraw']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn red">Withdraw</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['TRX', 'Transfer']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn btn-primary">Transfer</button>
                                  </form>
                                </div>
                              @endif

                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Wallet Deposit Address</h5>
                              <div class="row wallet-address">
                                <div class="col-md-8">
                                  <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                    of your
                                    funds at once if you deposit more than your daily withdrawal limit.</p>
                                  <div class="input-group">
                                    <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                    <div class="input-group-prepend">
                                      <button class="btn btn-primary">COPY</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <img src="/assets/img/qr-code-light.svg" alt="qr-code">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Latest Transactions</h5>
                              <div class="wallet-history">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
                                      <th>Date</th>
                                      <th>Status</th>
                                      <th>Amount</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>25-04-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>4.5454334</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>25-05-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>0.5484468</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>25-06-2019</td>
                                      <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                      <td>2.5454545</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>25-07-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>1.45894147</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>25-08-2019</td>
                                      <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                      <td>2.5454545</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        @endif

                        <!---PerformTransactions---->
                        @if(isset(Session::get('transactionInfo')['TRX']))

                          @if((Session::get('transactionInfo')['type']) == "Deposit")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Deposit TRX or Topup your TRX account</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post" enctype="multipart/form-data">

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

                                      <div class="form-row mt-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount paid</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount paid" required>
                                        </div>
                                      </div>
                                      <label class="text-secondary mt-4" for="formFirst">Proof of Payment</label>
                                      <div class="form-row pl-2 mb-4">
                                        <div class="col">
                                          <input type="file" class="custom-file-input h-200" name="paymentProof" id="fileUpload" />
                                          <label class="custom-file-label  h-200" for="fileUpload">Browse</label>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn green">Request Deposit</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                          @if((Session::get('transactionInfo')['type']) == "Withdraw")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Request TRX withdrawal</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post">

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

                                      <div class="form-row mt-4 mb-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount to withdraw</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount" required>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn red">Request Withdraw</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                          @if((Session::get('transactionInfo')['type']) == "Transfer")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Transfer TRX to another wallet</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post">

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

                                      <div class="form-row mt-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount to transfer</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount" required>
                                        </div>
                                      </div>
                                      <div class="form-row mt-4 mb-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Receiver's TRX address</label>
                                          <input id="formFirst" name="senderAddress" type="text" class="form-control" placeholder="TRX address" required>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn btn-primary"> Make Transfer</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                        @endif
                      </div>

                      <!-- coinEOS -->
                      <div class="tab-pane fade {{(Session::get('transactionInfo')['currency']) == 'EOS' ? 'show active': ''}}" id="coinEOS" role="tabpanel">
                        
                        @if(!isset(Session::get('transactionInfo')['EOS']))
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Balances</h5>
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
                                  
                              <ul>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-cash"></i>
                                    <h2>Total Equity</h2>
                                  </div>
                                  @if(isset($wallets["EOS"]))
                                    <div>
                                      <h3>{{$wallets["EOS"]["amount"]}} EOS</h3>
                                    </div>
                                  @endif

                                  @if(!isset($wallets["EOS"]))
                                    <div>
                                      <h3 class="text-secondary">No EOS wallet found</h3>
                                    </div>
                                  @endif
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-checkmark"></i>
                                    <h2>Your Address</h2>
                                  </div>
                                  @if(!isset($wallets["EOS"]))
                                    <form action="{{ route('createUserWallet', 'EOS') }}" method="post">
                                      @csrf
                                      <input class="btn btn-secondary" type="submit" value="Create EOS Wallet">
                                    </form>
                                  @endif
                                  @if(isset($wallets["EOS"]))
                                    <div>
                                      <h3>{{$wallets['EOS']['userAddress']}} EOS</h3>
                                    </div>
                                  @endif
                                </li>
                              </ul>
                              
                              @if(isset($wallets["EOS"]))
                                <div class="row">
                                  <form class="col" action="{{ route('makeTransaction', ['EOS', 'Deposit']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn green">Deposit</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['EOS', 'Withdraw']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn red">Withdraw</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['EOS', 'Transfer']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn btn-primary">Transfer</button>
                                  </form>
                                </div>
                              @endif

                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Wallet Deposit Address</h5>
                              <div class="row wallet-address">
                                <div class="col-md-8">
                                  <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                    of your
                                    funds at once if you deposit more than your daily withdrawal limit.</p>
                                  <div class="input-group">
                                    <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                    <div class="input-group-prepend">
                                      <button class="btn btn-primary">COPY</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <img src="/assets/img/qr-code-light.svg" alt="qr-code">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Latest Transactions</h5>
                              <div class="wallet-history">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
                                      <th>Date</th>
                                      <th>Status</th>
                                      <th>Amount</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>25-04-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>4.5454334</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>25-05-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>0.5484468</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>25-06-2019</td>
                                      <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                      <td>2.5454545</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>25-07-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>1.45894147</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>25-08-2019</td>
                                      <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                      <td>2.5454545</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        @endif

                        <!---PerformTransactions---->
                        @if(isset(Session::get('transactionInfo')['EOS']))

                          @if((Session::get('transactionInfo')['type']) == "Deposit")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Deposit EOS or Topup your EOS account</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post" enctype="multipart/form-data">

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

                                      <div class="form-row mt-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount paid</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount paid" required>
                                        </div>
                                      </div>
                                      <label class="text-secondary mt-4" for="formFirst">Proof of Payment</label>
                                      <div class="form-row pl-2 mb-4">
                                        <div class="col">
                                          <input type="file" class="custom-file-input h-200" name="paymentProof" id="fileUpload" />
                                          <label class="custom-file-label  h-200" for="fileUpload">Browse</label>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn green">Request Deposit</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                          @if((Session::get('transactionInfo')['type']) == "Withdraw")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Request EOS withdrawal</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post">

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

                                      <div class="form-row mt-4 mb-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount to withdraw</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount" required>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn red">Request Withdraw</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                          @if((Session::get('transactionInfo')['type']) == "Transfer")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Transfer EOS to another wallet</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post">

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

                                      <div class="form-row mt-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount to transfer</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount" required>
                                        </div>
                                      </div>
                                      <div class="form-row mt-4 mb-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Receiver's EOS address</label>
                                          <input id="formFirst" name="senderAddress" type="text" class="form-control" placeholder="EOS address" required>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn btn-primary"> Make Transfer</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                        @endif
                      </div>

                      <!-- coinXMR -->
                      <div class="tab-pane fade {{(Session::get('transactionInfo')['currency']) == 'XMR' ? 'show active': ''}}" id="coinXMR" role="tabpanel">
                        
                        @if(!isset(Session::get('transactionInfo')['XMR']))
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Balances</h5>
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
                                  
                              <ul>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-cash"></i>
                                    <h2>Total Equity</h2>
                                  </div>
                                  @if(isset($wallets["XMR"]))
                                    <div>
                                      <h3>{{$wallets["XMR"]["amount"]}} XMR</h3>
                                    </div>
                                  @endif

                                  @if(!isset($wallets["XMR"]))
                                    <div>
                                      <h3 class="text-secondary">No XMR wallet found</h3>
                                    </div>
                                  @endif
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-checkmark"></i>
                                    <h2>Your Address</h2>
                                  </div>
                                  @if(!isset($wallets["XMR"]))
                                    <form action="{{ route('createUserWallet', 'XMR') }}" method="post">
                                      @csrf
                                      <input class="btn btn-secondary" type="submit" value="Create XMR Wallet">
                                    </form>
                                  @endif
                                  @if(isset($wallets["XMR"]))
                                    <div>
                                      <h3>{{$wallets['XMR']['userAddress']}} XMR</h3>
                                    </div>
                                  @endif
                                </li>
                              </ul>
                              
                              @if(isset($wallets["XMR"]))
                                <div class="row">
                                  <form class="col" action="{{ route('makeTransaction', ['XMR', 'Deposit']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn green">Deposit</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['XMR', 'Withdraw']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn red">Withdraw</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['XMR', 'Transfer']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn btn-primary">Transfer</button>
                                  </form>
                                </div>
                              @endif

                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Wallet Deposit Address</h5>
                              <div class="row wallet-address">
                                <div class="col-md-8">
                                  <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                    of your
                                    funds at once if you deposit more than your daily withdrawal limit.</p>
                                  <div class="input-group">
                                    <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                    <div class="input-group-prepend">
                                      <button class="btn btn-primary">COPY</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <img src="/assets/img/qr-code-light.svg" alt="qr-code">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Latest Transactions</h5>
                              <div class="wallet-history">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
                                      <th>Date</th>
                                      <th>Status</th>
                                      <th>Amount</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>25-04-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>4.5454334</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>25-05-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>0.5484468</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>25-06-2019</td>
                                      <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                      <td>2.5454545</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>25-07-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>1.45894147</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>25-08-2019</td>
                                      <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                      <td>2.5454545</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        @endif

                        <!---PerformTransactions---->
                        @if(isset(Session::get('transactionInfo')['XMR']))

                          @if((Session::get('transactionInfo')['type']) == "Deposit")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Deposit XMR or Topup your XMR account</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post" enctype="multipart/form-data">

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

                                      <div class="form-row mt-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount paid</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount paid" required>
                                        </div>
                                      </div>
                                      <label class="text-secondary mt-4" for="formFirst">Proof of Payment</label>
                                      <div class="form-row pl-2 mb-4">
                                        <div class="col">
                                          <input type="file" class="custom-file-input h-200" name="paymentProof" id="fileUpload" />
                                          <label class="custom-file-label  h-200" for="fileUpload">Browse</label>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn green">Request Deposit</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                          @if((Session::get('transactionInfo')['type']) == "Withdraw")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Request XMR withdrawal</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post">

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

                                      <div class="form-row mt-4 mb-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount to withdraw</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount" required>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn red">Request Withdraw</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                          @if((Session::get('transactionInfo')['type']) == "Transfer")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Transfer XMR to another wallet</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post">

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

                                      <div class="form-row mt-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount to transfer</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount" required>
                                        </div>
                                      </div>
                                      <div class="form-row mt-4 mb-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Receiver's XMR address</label>
                                          <input id="formFirst" name="senderAddress" type="text" class="form-control" placeholder="XMR address" required>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn btn-primary"> Make Transfer</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                        @endif
                      </div>

                      <!-- coinKCS -->
                      <div class="tab-pane fade {{(Session::get('transactionInfo')['currency']) == 'KCS' ? 'show active': ''}}" id="coinKCS" role="tabpanel">
                        
                        @if(!isset(Session::get('transactionInfo')['KCS']))
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Balances</h5>
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
                                  
                              <ul>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-cash"></i>
                                    <h2>Total Equity</h2>
                                  </div>
                                  @if(isset($wallets["KCS"]))
                                    <div>
                                      <h3>{{$wallets["KCS"]["amount"]}} KCS</h3>
                                    </div>
                                  @endif

                                  @if(!isset($wallets["KCS"]))
                                    <div>
                                      <h3 class="text-secondary">No KCS wallet found</h3>
                                    </div>
                                  @endif
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-checkmark"></i>
                                    <h2>Your Address</h2>
                                  </div>
                                  @if(!isset($wallets["KCS"]))
                                    <form action="{{ route('createUserWallet', 'KCS') }}" method="post">
                                      @csrf
                                      <input class="btn btn-secondary" type="submit" value="Create KCS Wallet">
                                    </form>
                                  @endif
                                  @if(isset($wallets["KCS"]))
                                    <div>
                                      <h3>{{$wallets['KCS']['userAddress']}} KCS</h3>
                                    </div>
                                  @endif
                                </li>
                              </ul>
                              
                              @if(isset($wallets["KCS"]))
                                <div class="row">
                                  <form class="col" action="{{ route('makeTransaction', ['KCS', 'Deposit']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn green">Deposit</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['KCS', 'Withdraw']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn red">Withdraw</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['KCS', 'Transfer']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn btn-primary">Transfer</button>
                                  </form>
                                </div>
                              @endif

                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Wallet Deposit Address</h5>
                              <div class="row wallet-address">
                                <div class="col-md-8">
                                  <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                    of your
                                    funds at once if you deposit more than your daily withdrawal limit.</p>
                                  <div class="input-group">
                                    <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                    <div class="input-group-prepend">
                                      <button class="btn btn-primary">COPY</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <img src="/assets/img/qr-code-light.svg" alt="qr-code">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Latest Transactions</h5>
                              <div class="wallet-history">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
                                      <th>Date</th>
                                      <th>Status</th>
                                      <th>Amount</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>25-04-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>4.5454334</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>25-05-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>0.5484468</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>25-06-2019</td>
                                      <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                      <td>2.5454545</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>25-07-2019</td>
                                      <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                      <td>1.45894147</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>25-08-2019</td>
                                      <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                      <td>2.5454545</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        @endif

                        <!---PerformTransactions---->
                        @if(isset(Session::get('transactionInfo')['KCS']))

                          @if((Session::get('transactionInfo')['type']) == "Deposit")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Deposit KCS or Topup your KCS account</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post" enctype="multipart/form-data">

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

                                      <div class="form-row mt-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount paid</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount paid" required>
                                        </div>
                                      </div>
                                      <label class="text-secondary mt-4" for="formFirst">Proof of Payment</label>
                                      <div class="form-row pl-2 mb-4">
                                        <div class="col">
                                          <input type="file" class="custom-file-input h-200" name="paymentProof" id="fileUpload" />
                                          <label class="custom-file-label  h-200" for="fileUpload">Browse</label>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn green">Request Deposit</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                          @if((Session::get('transactionInfo')['type']) == "Withdraw")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Request KCS withdrawal</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post">

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

                                      <div class="form-row mt-4 mb-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount to withdraw</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount" required>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn red">Request Withdraw</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                          @if((Session::get('transactionInfo')['type']) == "Transfer")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Transfer KCS to another wallet</h5>
                                  <div class="settings-profile">
                                    <form action="{{ route('processTransaction') }}" method="post">

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

                                      <div class="form-row mt-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Amount to transfer</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount" required>
                                        </div>
                                      </div>
                                      <div class="form-row mt-4 mb-4">
                                        <div class="col">
                                          <label class="text-secondary" for="formFirst">Receiver's KCS address</label>
                                          <input id="formFirst" name="senderAddress" type="text" class="form-control" placeholder="KCS address" required>
                                        </div>
                                      </div>
                                      
                                      <button type="submit" class="btn btn-primary"> Make Transfer</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endif

                        @endif
                      </div>

                    </div>
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
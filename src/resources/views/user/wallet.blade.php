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
 <?php

 $BTC="bc1qysp3qyer4tj4ngu4krl07myh5e30cv2x23fs46";
 $ETH="0x90763d1B45cbA0C3B6B11Df533f7cD7978EBa611";
 $BCH="qz3427jhc42audj8eg88wkapnh3kauzm7uesmrh8we";
 $XLM="GAFOT3EAEYLCCURODQR3EKGKZC4QRGOOPYY4IVJBVBWEIJ7H2DWQXEFB";
 $ALGO="2X24S4PWE6X723LE7PRMZQS6RD7IQTTMVRGEJTZ77FV7ZEQUCH6FLYK3DY";
 $LTC="MQ1wWJHsmtwWkVWzRyP7HtXE4ehiR4D67v";
 $DOGE="DMWDPpsaytJ34J1jxUbbpR7b3V6A8vkdUZ";

  $BTC_VAL= "29,915.50";
 $ETH_VAL= "1785.55";
 $BCH_VAL= "176.94";
 $XLM_VAL= "0.14";
 $ALGO_VAL= "0.39";
 $LTC_VAL= "62.47";
 $DOGE_VAL= "0.080";

?>
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
              <img style="width:40px;height:40px" class="rounded-circle" src="{{ $userData['profile'] ? asset($userData['profile']) : asset('/assets/img/avatar.svg')}} " alt="avatar">
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-header d-flex flex-column align-items-center">
                <div class="figure mb-3">
                  <img style="width:40px;height:40px" class="rounded-circle" src="{{ $userData['profile'] ? asset($userData['profile']) : asset('/assets/img/avatar.svg')}} " alt="">
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
            <a class="nav-link " id="settings-tab" href="/user/transactionHistory"
              aria-controls="settings" aria-selected="false"><i class="icon ion-md-settings"></i>Transactions History</a>
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
                              <h3>{{$BTC_VAL}}</h3>
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
                              <h3>{{$ETH_VAL}}</h3>
                              <p class="text-right"><i class="icon ion-md-lock"></i> {{ isset($wallets["ETH"]) ? $wallets["ETH"]["amount"] : "0.0000000"}}</p>
                            </div>
                          </a>
                        </button>

                        <button name="currency" type="submit" class="m-0 p-0 bg-transparent w-100 border-0" value="BCH">
                          <a class="nav-link d-flex justify-content-between align-items-center {{(Session::get('transactionInfo')['currency']) == 'BCH' ? 'active': ''}}"
                            >
                            <div class="d-flex">
                              <img src="/assets/img/icon/9.png" alt="btc">
                              <div>
                                <h2>BCH</h2>
                                <p>Bitcoin Cash</p>
                              </div>
                            </div>
                            <div>
                              <h3>{{$BCH_VAL}}</h3>
                              <p class="text-right"><i class="icon ion-md-lock"></i> {{ isset($wallets["BCH"]) ? $wallets["BCH"]["amount"] : "0.0000000"}}</p>
                            </div>
                          </a>
                        </button>

                        <button name="currency" type="submit" class="m-0 p-0 bg-transparent w-100 border-0" value="XLM">
                          <a class="nav-link d-flex justify-content-between align-items-center {{(Session::get('transactionInfo')['currency']) == 'XLM' ? 'active': ''}}"
                            >
                            <div class="d-flex">
                              <img src="/assets/img/icon/6.png" alt="btc">
                              <div>
                                <h2>XLM</h2>
                                <p>Tron</p>
                              </div>
                            </div>
                            <div>
                              <h3>{{$XLM_VAL}}</h3>
                              <p class="text-right"><i class="icon ion-md-lock"></i> {{ isset($wallets["XLM"]) ? $wallets["XLM"]["amount"] : "0.0000000"}}</p>
                            </div>
                          </a>
                        </button>

                        <button name="currency" type="submit" class="m-0 p-0 bg-transparent w-100 border-0" value="ALGO">
                          <a class="nav-link d-flex justify-content-between align-items-center {{(Session::get('transactionInfo')['currency']) == 'ALGO' ? 'active': ''}}"
                            >
                            <div class="d-flex">
                              <img src="/assets/img/icon/2.png" alt="btc">
                              <div>
                                <h2>ALGO</h2>
                                <p>Algo</p>
                              </div>
                            </div>
                            <div>
                              <h3>{{$ALGO_VAL}}</h3>
                              <p class="text-right"><i class="icon ion-md-lock"></i> {{ isset($wallets["ALGO"]) ? $wallets["ALGO"]["amount"] : "0.0000000"}}</p>
                            </div>
                          </a>
                        </button>

                        <button name="currency" type="submit" class="m-0 p-0 bg-transparent w-100 border-0" value="LTC">
                          <a class="nav-link d-flex justify-content-between align-items-center {{(Session::get('transactionInfo')['currency']) == 'LTC' ? 'active': ''}}"
                            >
                            <div class="d-flex">
                              <img src="/assets/img/icon/7.png" alt="btc">
                              <div>
                                <h2>LTC</h2>
                                <p>Lite Coin</p>
                              </div>
                            </div>
                            <div>
                              <h3>{{$LTC_VAL}}</h3>
                              <p class="text-right"><i class="icon ion-md-lock"></i> {{ isset($wallets["LTC"]) ? $wallets["LTC"]["amount"] : "0.0000000"}}</p>
                            </div>
                          </a>
                        </button>

                        <button name="currency" type="submit" class="m-0 p-0 bg-transparent w-100 border-0" value="DOGE">
                          <a class="nav-link d-flex justify-content-between align-items-center {{(Session::get('transactionInfo')['currency']) == 'DOGE' ? 'active': ''}}"
                            >
                            <div class="d-flex">
                              <img src="/assets/img/icon/4.png" alt="btc">
                              <div>
                                <h2>DOGE</h2>
                                <p>Doge Coin</p>
                              </div>
                            </div>
                            <div>
                              <h3>{{$DOGE_VAL}}</h3>
                              <p class="text-right"><i class="icon ion-md-lock"></i> {{ isset($wallets["DOGE"]) ? $wallets["DOGE"]["amount"] : "0.0000000"}}</p>
                            </div>
                          </a>
                        </button>

                      </form>

                    </div>
                  </div>
                  <div class="col-md-12 col-lg-8">
                    <div class="tab-content">
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
                                  <form class="col" action="{{ route('makeTransaction', ['BTC', 'Withdrawal']) }}" method="get">
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
                                    <input type="text" class="form-control" value="{{$BTC}}">
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
                          @if(isset($transactions["BTC"]))
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
                                        <th>State</th>
                                        <th>Receiver Name</th>
                                        <th>Transaction Type</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($transactions["BTC"] as $key=>$trans)
                                        <tr>
                                          <td>{{$key}}</td>
                                          <td>{{$trans['created_at']}}</td>
                                          <td><i class="icon ion-md-checkmark-circle-outline {{$trans['status'] == 'PENDING' ? 'yellow': ($trans['status'] == 'COMPLETED' ? 'green' : 'red') }}"></i></td>
                                          <td>{{$trans['amount']}} BTC</td>
                                          <td class="{{$trans['status'] == 'PENDING' ? 'yellow': ($trans['status'] == 'COMPLETED' ? 'green' : 'red') }}">{{$trans['status']}}</td>
                                          <td>{{$trans['senderName']? $trans['senderName']: '---'}}</td>
                                          <td>{{$trans['type']}}</td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          @endif
                          @if(!isset($transactions["BTC"]))
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">No Transactions Recorded</h5>
                                </div>
                              </div>
                          @endif
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
                                          <label class="text-secondary" for="formFirst">Amount paid in BTC</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount paid in BTC" required>
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

                          @if((Session::get('transactionInfo')['type']) == "Withdrawal")
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
                                  <form class="col" action="{{ route('makeTransaction', ['ETH', 'Withdrawal']) }}" method="get">
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
                                    <input type="text" class="form-control" value="{{$ETH}}">
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
                          @if(isset($transactions["ETH"]))
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
                                        <th>State</th>
                                        <th>Receiver Name</th>
                                        <th>Transaction Type</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($transactions["ETH"] as $key=>$trans)
                                        <tr>
                                          <td>{{$key}}</td>
                                          <td>{{$trans['created_at']}}</td>
                                          <td><i class="icon ion-md-checkmark-circle-outline {{$trans['status'] == 'PENDING' ? 'yellow': ($trans['status'] == 'COMPLETED' ? 'green' : 'red') }}"></i></td>
                                          <td>{{$trans['amount']}} ETH</td>
                                          <td class="{{$trans['status'] == 'PENDING' ? 'yellow': ($trans['status'] == 'COMPLETED' ? 'green' : 'red') }}">{{$trans['status']}}</td>
                                          <td>{{$trans['senderName']? $trans['senderName']: '---'}}</td>
                                          <td>{{$trans['type']}}</td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          @endif
                          @if(!isset($transactions["ETH"]))
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">No Transactions Recorded</h5>
                                </div>
                              </div>
                          @endif
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
                                          <label class="text-secondary" for="formFirst">Amount paid in ETH</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount paid in ETH" required>
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

                          @if((Session::get('transactionInfo')['type']) == "Withdrawal")
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

                      <!-- coinBCH -->
                      <div class="tab-pane fade {{(Session::get('transactionInfo')['currency']) == 'BCH' ? 'show active': ''}}" id="coinBCH" role="tabpanel">
                        
                        @if(!isset(Session::get('transactionInfo')['BCH']))
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
                                  @if(isset($wallets["BCH"]))
                                    <div>
                                      <h3>{{$wallets["BCH"]["amount"]}} BCH</h3>
                                    </div>
                                  @endif

                                  @if(!isset($wallets["BCH"]))
                                    <div>
                                      <h3 class="text-secondary">No BCH wallet found</h3>
                                    </div>
                                  @endif
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-checkmark"></i>
                                    <h2>Your Address</h2>
                                  </div>
                                  @if(!isset($wallets["BCH"]))
                                    <form action="{{ route('createUserWallet', 'BCH') }}" method="post">
                                      @csrf
                                      <input class="btn btn-secondary" type="submit" value="Create BCH Wallet">
                                    </form>
                                  @endif
                                  @if(isset($wallets["BCH"]))
                                    <div>
                                      <h3>{{$wallets['BCH']['userAddress']}} BCH</h3>
                                    </div>
                                  @endif
                                </li>
                              </ul>
                              
                              @if(isset($wallets["BCH"]))
                                <div class="row">
                                  <form class="col" action="{{ route('makeTransaction', ['BCH', 'Deposit']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn green">Deposit</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['BCH', 'Withdrawal']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn red">Withdraw</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['BCH', 'Transfer']) }}" method="get">
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
                                    <input type="text" class="form-control" value="{{$BCH}}">
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
                          @if(isset($transactions["BCH"]))
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
                                        <th>State</th>
                                        <th>Receiver Name</th>
                                        <th>Transaction Type</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($transactions["BCH"] as $key=>$trans)
                                        <tr>
                                          <td>{{$key}}</td>
                                          <td>{{$trans['created_at']}}</td>
                                          <td><i class="icon ion-md-checkmark-circle-outline {{$trans['status'] == 'PENDING' ? 'yellow': ($trans['status'] == 'COMPLETED' ? 'green' : 'red') }}"></i></td>
                                          <td>{{$trans['amount']}} BCH</td>
                                          <td class="{{$trans['status'] == 'PENDING' ? 'yellow': ($trans['status'] == 'COMPLETED' ? 'green' : 'red') }}">{{$trans['status']}}</td>
                                          <td>{{$trans['senderName']? $trans['senderName']: '---'}}</td>
                                          <td>{{$trans['type']}}</td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          @endif
                          @if(!isset($transactions["BCH"]))
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">No Transactions Recorded</h5>
                                </div>
                              </div>
                          @endif
                        @endif

                        <!---PerformTransactions---->
                        @if(isset(Session::get('transactionInfo')['BCH']))

                          @if((Session::get('transactionInfo')['type']) == "Deposit")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Deposit BCH or Topup your BCH account</h5>
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
                                          <label class="text-secondary" for="formFirst">Amount paid in BCH</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount paid in BCH" required>
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

                          @if((Session::get('transactionInfo')['type']) == "Withdrawal")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Request BCH withdrawal</h5>
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
                                  <h5 class="card-title">Transfer BCH to another wallet</h5>
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
                                          <label class="text-secondary" for="formFirst">Receiver's BCH address</label>
                                          <input id="formFirst" name="senderAddress" type="text" class="form-control" placeholder="BCH address" required>
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

                      <!-- coinXLM -->
                      <div class="tab-pane fade {{(Session::get('transactionInfo')['currency']) == 'XLM' ? 'show active': ''}}" id="coinXLM" role="tabpanel">
                        
                        @if(!isset(Session::get('transactionInfo')['XLM']))
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
                                  @if(isset($wallets["XLM"]))
                                    <div>
                                      <h3>4{{$wallets["XLM"]["amount"]}} XLM</h3>
                                    </div>
                                  @endif

                                  @if(!isset($wallets["XLM"]))
                                    <div>
                                      <h3 class="text-secondary">No XLM wallet found</h3>
                                    </div>
                                  @endif
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-checkmark"></i>
                                    <h2>Your Address</h2>
                                  </div>
                                  @if(!isset($wallets["XLM"]))
                                    <form action="{{ route('createUserWallet', 'XLM') }}" method="post">
                                      @csrf
                                      <input class="btn btn-secondary" type="submit" value="Create XLM Wallet">
                                    </form>
                                  @endif
                                  @if(isset($wallets["XLM"]))
                                    <div>
                                      <h3>{{$wallets['XLM']['userAddress']}} XLM</h3>
                                    </div>
                                  @endif
                                </li>
                              </ul>
                              
                              @if(isset($wallets["XLM"]))
                                <div class="row">
                                  <form class="col" action="{{ route('makeTransaction', ['XLM', 'Deposit']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn green">Deposit</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['XLM', 'Withdrawal']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn red">Withdraw</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['XLM', 'Transfer']) }}" method="get">
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
                                    <input type="text" class="form-control" value="{{$XLM}}">
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
                          @if(isset($transactions["XLM"]))
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
                                        <th>State</th>
                                        <th>Receiver Name</th>
                                        <th>Transaction Type</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($transactions["XLM"] as $key=>$trans)
                                        <tr>
                                          <td>{{$key}}</td>
                                          <td>{{$trans['created_at']}}</td>
                                          <td><i class="icon ion-md-checkmark-circle-outline {{$trans['status'] == 'PENDING' ? 'yellow': ($trans['status'] == 'COMPLETED' ? 'green' : 'red') }}"></i></td>
                                          <td>{{$trans['amount']}} XLM</td>
                                          <td class="{{$trans['status'] == 'PENDING' ? 'yellow': ($trans['status'] == 'COMPLETED' ? 'green' : 'red') }}">{{$trans['status']}}</td>
                                          <td>{{$trans['senderName']? $trans['senderName']: '---'}}</td>
                                          <td>{{$trans['type']}}</td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          @endif
                          @if(!isset($transactions["XLM"]))
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">No Transactions Recorded</h5>
                                </div>
                              </div>
                          @endif
                        @endif

                        <!---PerformTransactions---->
                        @if(isset(Session::get('transactionInfo')['XLM']))

                          @if((Session::get('transactionInfo')['type']) == "Deposit")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Deposit XLM or Topup your XLM account</h5>
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
                                          <label class="text-secondary" for="formFirst">Amount paid in XLM</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount paid in XLM" required>
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

                          @if((Session::get('transactionInfo')['type']) == "Withdrawal")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Request XLM withdrawal</h5>
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
                                  <h5 class="card-title">Transfer XLM to another wallet</h5>
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
                                          <label class="text-secondary" for="formFirst">Receiver's XLM address</label>
                                          <input id="formFirst" name="senderAddress" type="text" class="form-control" placeholder="XLM address" required>
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

                      <!-- coinALGO -->
                      <div class="tab-pane fade {{(Session::get('transactionInfo')['currency']) == 'ALGO' ? 'show active': ''}}" id="coinALGO" role="tabpanel">
                        
                        @if(!isset(Session::get('transactionInfo')['ALGO']))
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
                                  @if(isset($wallets["ALGO"]))
                                    <div>
                                      <h3>{{$wallets["ALGO"]["amount"]}} ALGO</h3>
                                    </div>
                                  @endif

                                  @if(!isset($wallets["ALGO"]))
                                    <div>
                                      <h3 class="text-secondary">No ALGO wallet found</h3>
                                    </div>
                                  @endif
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-checkmark"></i>
                                    <h2>Your Address</h2>
                                  </div>
                                  @if(!isset($wallets["ALGO"]))
                                    <form action="{{ route('createUserWallet', 'ALGO') }}" method="post">
                                      @csrf
                                      <input class="btn btn-secondary" type="submit" value="Create ALGO Wallet">
                                    </form>
                                  @endif
                                  @if(isset($wallets["ALGO"]))
                                    <div>
                                      <h3>{{$wallets['ALGO']['userAddress']}} ALGO</h3>
                                    </div>
                                  @endif
                                </li>
                              </ul>
                              
                              @if(isset($wallets["ALGO"]))
                                <div class="row">
                                  <form class="col" action="{{ route('makeTransaction', ['ALGO', 'Deposit']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn green">Deposit</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['ALGO', 'Withdrawal']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn red">Withdraw</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['ALGO', 'Transfer']) }}" method="get">
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
                                    <input type="text" class="form-control" value="{{$ALGO}}">
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
                          @if(isset($transactions["ALGO"]))
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
                                        <th>State</th>
                                        <th>Receiver Name</th>
                                        <th>Transaction Type</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($transactions["ALGO"] as $key=>$trans)
                                        <tr>
                                          <td>{{$key}}</td>
                                          <td>{{$trans['created_at']}}</td>
                                          <td><i class="icon ion-md-checkmark-circle-outline {{$trans['status'] == 'PENDING' ? 'yellow': ($trans['status'] == 'COMPLETED' ? 'green' : 'red') }}"></i></td>
                                          <td>{{$trans['amount']}} ALGO</td>
                                          <td class="{{$trans['status'] == 'PENDING' ? 'yellow': ($trans['status'] == 'COMPLETED' ? 'green' : 'red') }}">{{$trans['status']}}</td>
                                          <td>{{$trans['senderName']? $trans['senderName']: '---'}}</td>
                                          <td>{{$trans['type']}}</td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          @endif
                          @if(!isset($transactions["ALGO"]))
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">No Transactions Recorded</h5>
                                </div>
                              </div>
                          @endif
                        @endif

                        <!---PerformTransactions---->
                        @if(isset(Session::get('transactionInfo')['ALGO']))

                          @if((Session::get('transactionInfo')['type']) == "Deposit")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Deposit ALGO or Topup your ALGO account</h5>
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
                                          <label class="text-secondary" for="formFirst">Amount paid in ALGO</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount paid in ALGO" required>
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

                          @if((Session::get('transactionInfo')['type']) == "Withdrawal")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Request ALGO withdrawal</h5>
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
                                  <h5 class="card-title">Transfer ALGO to another wallet</h5>
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
                                          <label class="text-secondary" for="formFirst">Receiver's ALGO address</label>
                                          <input id="formFirst" name="senderAddress" type="text" class="form-control" placeholder="ALGO address" required>
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

                      <!-- coinLTC -->
                      <div class="tab-pane fade {{(Session::get('transactionInfo')['currency']) == 'LTC' ? 'show active': ''}}" id="coinLTC" role="tabpanel">
                        
                        @if(!isset(Session::get('transactionInfo')['LTC']))
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
                                  @if(isset($wallets["LTC"]))
                                    <div>
                                      <h3>{{$wallets["LTC"]["amount"]}} LTC</h3>
                                    </div>
                                  @endif

                                  @if(!isset($wallets["LTC"]))
                                    <div>
                                      <h3 class="text-secondary">No LTC wallet found</h3>
                                    </div>
                                  @endif
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-checkmark"></i>
                                    <h2>Your Address</h2>
                                  </div>
                                  @if(!isset($wallets["LTC"]))
                                    <form action="{{ route('createUserWallet', 'LTC') }}" method="post">
                                      @csrf
                                      <input class="btn btn-secondary" type="submit" value="Create LTC Wallet">
                                    </form>
                                  @endif
                                  @if(isset($wallets["LTC"]))
                                    <div>
                                      <h3>{{$wallets['LTC']['userAddress']}} LTC</h3>
                                    </div>
                                  @endif
                                </li>
                              </ul>
                              
                              @if(isset($wallets["LTC"]))
                                <div class="row">
                                  <form class="col" action="{{ route('makeTransaction', ['LTC', 'Deposit']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn green">Deposit</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['LTC', 'Withdrawal']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn red">Withdraw</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['LTC', 'Transfer']) }}" method="get">
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
                                    <input type="text" class="form-control" value="{{$LTC}}">
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
                          @if(isset($transactions["LTC"]))
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
                                        <th>State</th>
                                        <th>Receiver Name</th>
                                        <th>Transaction Type</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($transactions["LTC"] as $key=>$trans)
                                        <tr>
                                          <td>{{$key}}</td>
                                          <td>{{$trans['created_at']}}</td>
                                          <td><i class="icon ion-md-checkmark-circle-outline {{$trans['status'] == 'PENDING' ? 'yellow': ($trans['status'] == 'COMPLETED' ? 'green' : 'red') }}"></i></td>
                                          <td>{{$trans['amount']}} LTC</td>
                                          <td class="{{$trans['status'] == 'PENDING' ? 'yellow': ($trans['status'] == 'COMPLETED' ? 'green' : 'red') }}">{{$trans['status']}}</td>
                                          <td>{{$trans['senderName']? $trans['senderName']: '---'}}</td>
                                          <td>{{$trans['type']}}</td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          @endif
                          @if(!isset($transactions["LTC"]))
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">No Transactions Recorded</h5>
                                </div>
                              </div>
                          @endif
                        @endif

                        <!---PerformTransactions---->
                        @if(isset(Session::get('transactionInfo')['LTC']))

                          @if((Session::get('transactionInfo')['type']) == "Deposit")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Deposit LTC or Topup your LTC account</h5>
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
                                          <label class="text-secondary" for="formFirst">Amount paid in LTC</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount paid in LTC" required>
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

                          @if((Session::get('transactionInfo')['type']) == "Withdrawal")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Request LTC withdrawal</h5>
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
                                  <h5 class="card-title">Transfer LTC to another wallet</h5>
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
                                          <label class="text-secondary" for="formFirst">Receiver's LTC address</label>
                                          <input id="formFirst" name="senderAddress" type="text" class="form-control" placeholder="LTC address" required>
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

                      <!-- coinDOGE -->
                      <div class="tab-pane fade {{(Session::get('transactionInfo')['currency']) == 'DOGE' ? 'show active': ''}}" id="coinDOGE" role="tabpanel">
                        
                        @if(!isset(Session::get('transactionInfo')['DOGE']))
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
                                  @if(isset($wallets["DOGE"]))
                                    <div>
                                      <h3>{{$wallets["DOGE"]["amount"]}} DOGE</h3>
                                    </div>
                                  @endif

                                  @if(!isset($wallets["DOGE"]))
                                    <div>
                                      <h3 class="text-secondary">No DOGE wallet found</h3>
                                    </div>
                                  @endif
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex align-items-center">
                                    <i class="icon ion-md-checkmark"></i>
                                    <h2>Your Address</h2>
                                  </div>
                                  @if(!isset($wallets["DOGE"]))
                                    <form action="{{ route('createUserWallet', 'DOGE') }}" method="post">
                                      @csrf
                                      <input class="btn btn-secondary" type="submit" value="Create DOGE Wallet">
                                    </form>
                                  @endif
                                  @if(isset($wallets["DOGE"]))
                                    <div>
                                      <h3>{{$wallets['DOGE']['userAddress']}} DOGE</h3>
                                    </div>
                                  @endif
                                </li>
                              </ul>
                              
                              @if(isset($wallets["DOGE"]))
                                <div class="row">
                                  <form class="col" action="{{ route('makeTransaction', ['DOGE', 'Deposit']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn green">Deposit</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['DOGE', 'Withdrawal']) }}" method="get">
                                      @csrf
                                      <button type="submit" class="btn red">Withdraw</button>
                                  </form>
                                  <form class="col" action="{{ route('makeTransaction', ['DOGE', 'Transfer']) }}" method="get">
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
                                    <input type="text" class="form-control" value="{{$DOGE}}">
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
                          @if(isset($transactions["DOGE"]))
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
                                        <th>State</th>
                                        <th>Receiver Name</th>
                                        <th>Transaction Type</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($transactions["DOGE"] as $key=>$trans)
                                        <tr>
                                          <td>{{$key}}</td>
                                          <td>{{$trans['created_at']}}</td>
                                          <td><i class="icon ion-md-checkmark-circle-outline {{$trans['status'] == 'PENDING' ? 'yellow': ($trans['status'] == 'COMPLETED' ? 'green' : 'red') }}"></i></td>
                                          <td>{{$trans['amount']}} DOGE</td>
                                          <td class="{{$trans['status'] == 'PENDING' ? 'yellow': ($trans['status'] == 'COMPLETED' ? 'green' : 'red') }}">{{$trans['status']}}</td>
                                          <td>{{$trans['senderName']? $trans['senderName']: '---'}}</td>
                                          <td>{{$trans['type']}}</td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          @endif
                          @if(!isset($transactions["DOGE"]))
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">No Transactions Recorded</h5>
                                </div>
                              </div>
                          @endif
                        @endif

                        <!---PerformTransactions---->
                        @if(isset(Session::get('transactionInfo')['DOGE']))

                          @if((Session::get('transactionInfo')['type']) == "Deposit")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Deposit DOGE or Topup your DOGE account</h5>
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
                                          <label class="text-secondary" for="formFirst">Amount paid in DOGE</label>
                                          <input id="formFirst" name="amount" type="text" class="form-control" placeholder="Amount paid in DOGE" required>
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

                          @if((Session::get('transactionInfo')['type']) == "Withdrawal")
                            <div class="card">
                              <div class="card-body bg-red w-full">
                                <div class="m-auto p-3 w-75 ">
                                  <h5 class="card-title">Request DOGE withdrawal</h5>
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
                                  <h5 class="card-title">Transfer DOGE to another wallet</h5>
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
                                          <label class="text-secondary" for="formFirst">Receiver's DOGE address</label>
                                          <input id="formFirst" name="senderAddress" type="text" class="form-control" placeholder="DOGE address" required>
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
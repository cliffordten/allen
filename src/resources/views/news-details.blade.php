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

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Dashboard
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/profile">Profile</a>
              <a class="dropdown-item" href="/wallet">Wallet</a>
              <a class="dropdown-item" href="/settings">Settings</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Others
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/login">Login</a>
              <a class="dropdown-item" href="/signup">Sign Up</a>
              <a class="dropdown-item" href="/lock">Lock</a>
              <a class="dropdown-item" href="/otp-number">OTP Number</a>
              <a class="dropdown-item" href="/otp-verify">OTP Verify</a>
              <a class="dropdown-item" href="/reset">Reset</a>
              <a class="dropdown-item" href="/notfound">404</a>
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
              <img src="assets/img/avatar.svg" alt="avatar">
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-header d-flex flex-column align-items-center">
                <div class="figure mb-3">
                  <img src="assets/img/avatar.svg" alt="">
                </div>
                <div class="info text-center">
                  <p class="name font-weight-bold mb-0">Tony Stark</p>
                  <p class="email text-muted mb-3">tonystark@gmail.com</p>
                </div>
              </div>
              <div class="dropdown-body">
                <ul class="profile-nav">
                  <li class="nav-item">
                    <a href="/profile" class="nav-link">
                      <i class="icon ion-md-person"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/wallet" class="nav-link">
                      <i class="icon ion-md-wallet"></i>
                      <span>My Wallet</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/settings" class="nav-link">
                      <i class="icon ion-md-settings"></i>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="exchange-light.html" class="nav-link red">
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

  <div class="news-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>KCS Pay Fees Feature is Coming Soon</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nemo illo natus iure earum recusandae autem
            quibusdam iste excepturi aut, provident eum maiores ad assumenda doloremque sint explicabo itaque adipisci!
          </p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores eveniet dicta perferendis corporis
            ullam autem cum unde iste. Minus corporis, eaque accusamus commodi et molestiae illo laudantium odit
            asperiores numquam eos harum, quia quibusdam obcaecati dolorem sapiente voluptates aut dolores cumque modi
            ullam at repellendus. At, pariatur provident voluptates labore quia nulla qui illo! Veritatis sapiente
            perferendis nemo deleniti numquam maxime suscipit quas iusto? Distinctio est obcaecati reiciendis
            consequuntur accusantium nostrum officiis eveniet perferendis quisquam ratione quis, repellat quia numquam.
            Dolor ea quam veniam facere. Unde explicabo libero, doloremque quisquam illo, iusto ut voluptate cupiditate
            ipsum dignissimos reiciendis eligendi magnam!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque reprehenderit dolorum inventore vero ratione
            eum, molestiae doloremque et magnam rem perferendis aperiam! Neque tempora ipsum culpa quidem aliquam
            pariatur incidunt illo rem eius inventore asperiores, reprehenderit libero possimus nihil laborum reiciendis
            adipisci hic perferendis officia? Adipisci molestiae accusantium est sequi fugit numquam! Modi ipsum sed
            laboriosam quo rem cupiditate soluta facere! Quod minus voluptatum sint? Eum temporibus asperiores vel
            perspiciatis deleniti perferendis possimus enim. Numquam eius alias voluptatum fugit nesciunt doloremque
            accusantium similique obcaecati, error explicabo accusamus ducimus nam nobis. Enim voluptate illum rem qui
            exercitationem quo veritatis! Veritatis tempora quaerat aperiam, provident temporibus sunt fugit! Officiis
            tenetur soluta ad totam, aspernatur nostrum et expedita rerum consequuntur. Doloremque accusamus ex, beatae,
            in totam cupiditate inventore dicta qui soluta consectetur, enim repellat velit. Distinctio modi totam
            repellat laudantium tenetur impedit, explicabo suscipit rerum eaque tempore nobis fuga numquam at
            exercitationem praesentium quasi aperiam pariatur, molestiae ipsa voluptatum? Esse veniam aliquam unde
            quibusdam nulla obcaecati eius eos, illum incidunt eligendi dolores pariatur odit, repudiandae et hic sint!
            Impedit ullam soluta nobis veritatis quibusdam, quisquam minima repellat suscipit. Beatae, dolores esse
            ducimus, id officia reprehenderit unde incidunt ex quaerat laudantium sint nam debitis?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque reprehenderit dolorum inventore vero ratione
            eum, molestiae doloremque et magnam rem perferendis aperiam! Neque tempora ipsum culpa quidem aliquam
            pariatur incidunt illo rem eius inventore asperiores, reprehenderit libero possimus nihil laborum reiciendis
            adipisci hic perferendis officia? Adipisci molestiae accusantium est sequi fugit numquam! Modi ipsum sed
            laboriosam quo rem cupiditate soluta facere! Quod minus voluptatum sint? Eum temporibus asperiores vel
            perspiciatis deleniti perferendis possimus enim. Numquam eius alias voluptatum fugit nesciunt doloremque
            accusantium similique obcaecati, error explicabo accusamus ducimus nam nobis. Enim voluptate illum rem qui
            exercitationem quo veritatis! Veritatis tempora quaerat aperiam, provident temporibus sunt fugit! Officiis
            tenetur soluta ad totam, aspernatur nostrum et expedita rerum consequuntur. Doloremque accusamus ex, beatae,
            in totam cupiditate inventore dicta qui soluta consectetur, enim repellat velit. Distinctio modi totam
            repellat laudantium tenetur impedit, explicabo suscipit rerum eaque tempore nobis fuga numquam at
            exercitationem praesentium quasi aperiam pariatur, molestiae ipsa voluptatum? Esse veniam aliquam unde
            quibusdam nulla obcaecati eius eos, illum incidunt eligendi dolores pariatur odit, repudiandae et hic sint!
            Impedit ullam soluta nobis veritatis quibusdam, quisquam minima repellat suscipit. Beatae, dolores esse
            ducimus, id officia reprehenderit unde incidunt ex quaerat laudantium sint nam debitis?</p>
        </div>
      </div>
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
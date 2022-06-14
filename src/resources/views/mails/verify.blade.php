<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Btc Investment Portal</title>
    <style>
        .primary{
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<img src="https://btcinvestmentportal.com/wp-content/uploads/2022/06/cropped-images-1.png" alt="Btc Investment Logo" srcset="">

<h3>Dear {{$fullName}}</h3>

<p>Thank you for signing up for your BTC Investment Portal  account. Please verify your email address using the link below to continue setting up your account:</p>

<a href="{{env('APP_URL', 'https://trading.btcinvestmentportal.com/')}}account/verify/?email={{$email}}&key=ef0538b60b16e84d121d002c4f384cc9">{{env('APP_URL', 'https://trading.btcinvestmentportal.com/')}}account/verify/?email={{$email}}&key=ef0538b60b16e84d121d002c4f384cc9</a>

<p>If you run into any issues verifying your email address, please feel free to reply to this email or contact us at <a href="mailto:support@btcinvestmentportal.com">support@btcinvestmentportal.com</a></p>

<p>Subscribe to our newsletter for weekly updates about the market and our innovations</p>
<br>
<br>
<a href="https://btcinvestmentportal.com/contact-us" class="primary">Subscribe</a>
<br>
<p>Kind regards,</p>

<p>BTC Investment Portal team.</p>
</body>
</html>
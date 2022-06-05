<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  <style>
    body {
      font-size: 16px;
      margin: 5px;
    }

    h1 {
      font-size: 30px;
      text-align: center;
    }


    .content {
      margin: 10px;
    }
  </style>
</head>

<body>
  <h1>@yield('title')</h1>
  <div class=" content">
    @yield('content') 
  </div>
  
</body>
        </html>
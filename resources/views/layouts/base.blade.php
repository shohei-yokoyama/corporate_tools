<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <title>コーポレート簡易ツール</title>
</head>
<body>
<!-- As a link -->
<div class='fixed-top'>
     <nav class="navbar navbar-expand-lg navbar-light bg-primary">
         <a class="navbar-brand text-white" href="/index">コーポレート簡易ツール</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
             <div class="navbar-nav">
                 <a class="nav-item nav-link text-white" href="/index">役員任期チェッカー</a>
                 <a class="nav-item nav-link text-white" href="#">コーポレートスケジュール作成（準備中）</a>
             </div> 
         </div>
     </nav>
</div>

<div id="app">
      @yield("content")
</div>

<footer class="footer">
  <div class="container">
    <div>
      <p class="text-muted">©︎2020 Copyright コーポレート簡易ツール　/　<a href="/privacypolicy">プライバシーポリシー</a>　/　<a href="/contact">お問い合わせ</a></p>
    </div>
  </div>
</footer>
  <script src="js/main.js"></script>
  <script src=" {{ mix('js/app.js') }} "></script>
</body>
</html>
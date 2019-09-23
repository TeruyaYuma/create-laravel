<!-- ＊＊＊レスポンシブ sassの練習＊＊＊ -->
<!-- ＊＊＊レスポンシブ sassの練習＊＊＊ -->
<!-- ＊＊＊レスポンシブ sassの練習＊＊＊ -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resposive practice</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
<header class="header js-float-menu">
  <h1 class="title">Responsive Design</h1>

  <div class="menu-trigger js-toggle-sp-menu">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <nav class="nav-menu js-toggle-sp-menu-target">

    <ul class="menu">
      <li class="menu-item"><a class="menu-link" href="">TOP</a></li>
      <li class="menu-item"><a class="menu-link" href="#news">NEWS</a></li>
      <li class="menu-item"><a class="menu-link" href="#about">ABOUT</a></li>
      <li class="menu-item"><a class="menu-link" href="#staff">STAFF</a></li>
      <li class="menu-item"><a class="menu-link" href="#cource">COURCE</a></li>
      <li class="menu-item"><a class="menu-link" href="#contact">CONTACT</a></li>
      <!-- userIDがあれば表示 -->
      @if(Auth::user())
      <li class="menu-item">
        <a 
          href="{{ route('infos.show')}}" class="menu-link">{{ Auth::user()->name }}
        </a>
      </li>
      @endif
    </ul>

    <div class="booking-container">
      <div class="booking-right" style="justify-content: space-right; display: flex;">
        <form method="GET" action="{{ route('booking.new') }}">
          @csrf
          <input type="text" name="due_date" id="due_date" placeholder="日付を選択してください">
          <input type="submit" value="予約する" class="btn">
        </form>
      </div>
    </div>

  </nav>
</header>

<main>
  <section class="hero containers-fluid js-float-menu-target">
    <h2 class="hero-title">Responsive Design<br> is so good.</h2>
  </section>

  <section class="containers containers-ornament" id="news">
    <h2 class="containers-title"><span>NEWS</span></h2>
    <div class="containers-body">
      <ul class="news">
        <li class="news-item">
          <a class="news-link" href="">
            <span class="news-date">2019.12.31</span>
            <span class="news-title">サンプルNEWSタイトルサンプルNEWSタイトル</span>
          </a>
        </li>
        <li class="news-item">
          <a class="news-link" href="">
            <span class="news-date">2019.12.31</span>
            <span class="news-title">サンプルNEWSタイトルサンプルNEWSタイトル</span>
          </a>
        </li>
        <li class="news-item">
          <a class="news-link" href="">
            <span class="news-date">2019.12.31</span>
            <span class="news-title">サンプルNEWSタイトルサンプルNEWSタイトル</span>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="bgColor-lightGray" id="about">
    <div class="containers containers-lightGray">
      <h2 class="containers-title containers-title-lightGray"><span>ABOUT</span></h2>
      <div class="containers-body">
        <p>レスポンシブWebデザインとは、どんな大きさの画面でも見やすく、使いやすいWebサイトにするために必要なものです。
          1つのHTML（Webサイトに載せる情報）で配信し、CSS（情報の大きさや位置など表示の指定）はデバイスごとに用意して表示を変えさせます。
          内容は全て同じですが見せ方が違うということです。HTMLが１つなのでWebサイトに載せる情報を修正や更新する時に作業が1回で済みます。
          デバイスごとにHTMLがあると修正や更新の作業をHTMLの数だけしなくてはなりません。
          スマホに対応したWebサイトが検索結果の上位に表示されやすくなる「モバイルフレンドリー」や、スマホ用のページが順位の決め手になる「モバイルファーストインデックス」に対応できます。
        </p>
      </div>
    </div>
  </section>

  <section class="containers containers-ornament" id="staff">
    <h2 class="containers-title"><span>STAFF</span></h2>
    <div class="containers-body">
      <div class="panel-group panel-group-float">
        <a href="" class="panel panel-hover panel-staff">
          <div class="panel-body">
            <img src="storage/img/staff1.jpg" alt="">
          </div>
        </a>
        <a href="" class="panel panel-hover panel-staff">
          <div class="panel-body">
            <img src="storage/img/staff2.jpeg" alt="">
          </div>
        </a>
        <a href="" class="panel panel-hover panel-staff">
          <div class="panel-body">
            <img src="storage/img/staff3.jpeg" alt="">
          </div>
        </a>
        <a href="" class="panel panel-hover panel-staff">
          <div class="panel-body">
            <img src="storage/img/staff4.jpg" alt="">
          </div>
        </a>
        <a href="" class="panel panel-hover panel-staff">
          <div class="panel-body">
            <img src="storage/img/staff5.jpg" alt="">
          </div>
        </a>
        <a href="" class="panel panel-hover panel-staff">
          <div class="panel-body">
            <img src="storage/img/staff6.jpg" alt="">
          </div>
        </a>
        <a href="" class="panel panel-hover panel-staff">
          <div class="panel-body">
            <img src="storage/img/staff1.jpg" alt="">
          </div>
        </a>
        <a href="" class="panel panel-hover panel-staff">
          <div class="panel-body">
            <img src="storage/img/staff2.jpeg" alt="">
          </div>
        </a>
      </div>
    </div>
  </section>

  <section class="bgColor-lightGray" id="cource">
    <div class="containers containers-lightGray">
      <h2 class="containers-title"><span>COURCE</span></h2>
      <div class="containers-body">
        <div class="panel-group panel-group-flex">
          <div class="panel panel-border panel-cource">
            <div class="panel-head">
              <span class="ft-corp ft-l">Bussiness</span>コース
            </div>
            <div class="panel-body">
              <img src="storage/img/price1.jpg" alt="">
            </div>
            <div class="panel-foot">
              <p>多色使いで髪に立体的な表情が生まれ必要な部分にカラーリングを施すので髪全体の負担が少なくなります。ハイライト、又はローライトなどが含まれます。</p>
            </div>
          </div>
          <div class="panel panel-border panel-cource panel-active">
            <span class="panel-badge">
              オス<br>スメ
            </span>
            <div class="panel-head">
              <span class="ft-corp ft-l">Advance</span>コース
            </div>
            <div class="panel-body">
              <img src="storage/img/price2.jpg" alt="">
            </div>
            <div class="panel-foot">
              <p>髪に水分をたっぷり保ちながらぷるんとした自然な仕上がりのデジタルパーマです。低温でロットを巻くので髪へのダメージを最小限に抑えられ、まとまりのある髪になります。</p>
            </div>
          </div>
          <div class="panel panel-border panel-cource">
            <div class="panel-head">
              <span class="ft-corp ft-l">Beginners</span>コース
            </div>
            <div class="panel-body">
              <img src="storage/img/price3.jpg" alt="">
            </div>
            <div class="panel-foot">
              <p>綺麗な髪はまず頭皮から。毛穴の詰まりを除去したり、頭皮のトリートメントで健康な髪と頭皮に。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="containers containers-ornament" id="contact">
    <h2 class="containers-title"><span>CONTACT</span></h2>
    <div class="containers-body">
      <form action="" class="form form-m">
        <input class="input input-l" type="text" placeholder="お名前">
        <input class="input input-l" type="email" placeholder="email">
        <textarea class="input input-l input-textarea mb-xxl" placeholder="お問い合わせ内容"></textarea>
        <button class="btn btn-corp btn-l">送信</button>
      </form>
    </div>
  </section>
</main>

<footer class="footer">
  <p>Copyright © webukatu. All Rights Reserved</p>
</footer>

<!-- flatpickrプラグイン -->
<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
<script>flatpickr(document.getElementById('due_date'), {
        locale: 'ja',
        dateFormat: "Y/m/d",
        minDate: new Date(),
        });</script>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="./js/app.js"></script>
</body>
</html>
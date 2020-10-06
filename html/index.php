<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/stylesheet.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>錬成教室 やいま塾</title>
  </head>
  <body>
    <div class="container-fluid"> <!--ヘッダー-->
      <div class="header d-flex justify-content-between justify-content-md-around mt-2">
        <div class="headerlogo mt-1 mt-md-2"><img src="../images/yaima-rogo.png"></div>
        <ul class="list-unstyled">
          <li>電話受付時間 9時〜17時</li>
          <li>TEL 0000-00-0000</li>
        </ul>
      </div> <!--d-flex ect-->
    </div> <!--ヘッダー-->
      
      <!--スマホメニュースタート-->
      <div id="menu" class="d-md-none">

        <div v-on:click="drawer" class="menubtn d-flex flex-column justify-content-center align-items-center">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="menutext">MENU</div>
        </div>
  
        <div class="humberger">
          <ul class="flex-column text-center list-unstyled" v-bind:style="{transform:draw}">
            <li><a href="#" v-on:click="closer" ontouchstart="">×</a></li>
            <li><a v-on:click="closer" ontouchstart="">ホーム</a></li>
            <li><a href="about.html" ontouchstart="">やいま塾について</a></li>
            <li><a href="success.html" ontouchstart="">合格体験記・合格実績</a></li>
            <li><a href="course.html" ontouchstart=""> コース・料金</a></li>
            <li><a href="session.html" ontouchstart="">進学への道</a></li>
            <li><a href="interview.html" ontouchstart="">卒塾生インタビュー</a></li>
            <li><a href="access.html" ontouchstart="">お問い合わせ</a></li>
          </ul>
        </div>
      </div>
  
      <script>
        const vue = new Vue({
          el:"#menu",
          data:{
            draw:'translateX(0)'
          },
          methods:{
            drawer: function() {
              vue.$data.draw = 'translateX(-80vw)';
            },
            closer: function() {
              vue.$data.draw = 'translateX(0)'
            }
          }
        })
      </script>
      <!--スマホメニューここまで-->

      <!--ヘッダーメニュースタート-->
      <div class="headmenu d-none d-md-block font-weight-bold">
        <ul class="list-inline d-flex justify-content-around text-center">
          <li class="list-inline-item"><a href="#" style="color:white;
            background-color:#59DD82;">ホーム</a></li>
          <li class="list-inline-item"><a href="about.html">やいま塾について</a></li>
          <li class="list-inline-item"><a href="success.html">合格体験記・合格実績</a></li>
          <li class="list-inline-item"><a href="course.html">コース・料金</a></li>
          <li class="list-inline-item"><a href="session.html">進学への道</a></li>
          <li class="list-inline-item"><a href="interview.html">卒塾生インタビュー</a></li>
          <li class="list-inline-item"><a href="access.html">お問い合わせ</a></li>
        </ul>
      </div>
      <!--ヘッダーメニューここまで-->
       
    <div class="sea jumbotron-fluid">
        <div class="container-fluid"> <!--海の写真スタート-->
          <div class="row">
            <div class="seatext pt-4 mb-2 pl-3 col-md-4 ml-md-auto">石垣島<span>から、
            </span></br>進学<span>で、</span>未来<span>へ。</span>
            </div>
            <div class="col-md-3 offset-md-1 mr-md-auto">
              <a href="access.html" class="btn btn-block font-weight-bold mx-auto mx-md-0" ontouchstart="">無料体験受付中</a>
            </div>
          </div>
        </div> <!--海の写真ここまで-->  
      </div>
      
    </div> <!--jumbotron-fluid-->

    <div class="pcwidthind">
      <div class="container-fluid text-center text-md-left"> <!--合格実績スタート-->
        <div class="themep font-weight-bold">合格実績・私の合格体験記</div>
        <div class="mt-4 font-weight-bold ml-md-4">2020年度の合格実績</div>
        <ul class="list-unstyled mt-3">
          <div class="row">
            <div class="col-md-5 offset-md-1">
              <li class="mt-2">琉球大学 国際地域創造学部 国際地域創造学科</li>
              <li class="mt-3 mt-md-4">朝日大学 法学部</li>
              <li class="mt-3 mt-md-4">関東学院大学 看護学部</li>
              <li class="mt-3 mt-md-4">産業能率大学 経営学部 </li>
              <li class="mt-3 mt-md-4">山口大学 農学部</li>
              <li class="mt-3 mt-md-4">徳島文理大学 看護学部</li>
              <li class="mt-3 mt-md-4">佐賀大学 教育学部</li>
              <li class="mt-3 mt-md-4">名桜大学 人間健康学部 スポーツ健康学科</li>
              <li class="mt-3 mt-md-4">同志社女子大学 メディア創造学部</li>
              <li class="mt-3 mt-md-4">城西大学 理学部</li>
              <li class="mt-3 mt-md-4">実戦女子大学 人間社会学部</li>
              <li class="mt-3 mt-md-4">創価女子短期大学 国際ビジネス学科</li>
            </div>
            <div class="col-md-5 offset-md-1">
              <li class="mt-3 mt-md-2">龍谷大学 法学部</li>
              <li class="mt-3 mt-md-4">三育学院大学</li>
              <li class="mt-3 mt-md-4">広島文教大学</li>
              <li class="mt-3 mt-md-4">京都外国語大学</li>
              <li class="mt-3 mt-md-4">東京国際大学</li>
              <li class="mt-3 mt-md-4">長崎大学</li>
              <li class="mt-3 mt-md-4">京都教育大学</li>
              <li class="mt-3 mt-md-4">中央大学</li>
              <li class="mt-3 mt-md-4">文教大学</li>
              <li class="mt-3 mt-md-4">開智国際大学</li>
              <li class="mt-3 mt-md-4">関東学院大学</li>
            </div>
          </div>
        </ul>
      </div>  <!--合格実績ここまで-->
      
      <div class="row"> <!--合格体験記スタート-->
        <img src="../images/cherry.jpg" class="cherryimg img-fluid mt-5 col-md-5 ml-md-4">
      
        <div class="idxsuc container-fluid col-md-6 mt-md-4">
          <div class="mt-4 mx-4">合格した先輩たちの体験談、アドバイスを覗いてみませんか？
                                合格した先輩たちの体験談、アドバイスを覗いてみませんか？
                                合格した先輩たちの体験談、アドバイスを覗いてみませんか？
                                合格した先輩たちの体験談、アドバイスを覗いてみませんか？
                                合格した先輩たちの体験談、アドバイスを覗いてみませんか？
                                合格した先輩たちの体験談、アドバイスを覗いてみませんか？</div>
          <a href="success.html" class="btn btn-block font-weight-bold mx-auto mt-4 mt-md-5 mb-4" ontouchstart="">合格体験記を見る︎</a>
        </div> <!--合格体験記ここまで-->
      </div>
      
      
      <div class="container-fluid text-center text-md-left"> <!--塾長より挨拶スタート-->
        <div class="themeg font-weight-bold">塾長より挨拶</div>
        <div class="row">
          <div class="teacher mt-4 mt-md-5 mx-auto col-md-3"><img src="../images/teacher1.jpeg" class="img-fluid rounded"></div>
          <div class="m-4 ml-md-0 mr-md-4 mt-md-5 col-md-8">塾長の言葉、やいま塾で大切にしていることなどを自由に書きます。
                          やいま塾で大切にしていることなどを自由に書きます。
                          やいま塾で大切にしていることなどを自由に書きます。
                          やいま塾で大切にしていることなどを自由に書きます。
                          やいま塾で大切にしていることなどを自由に書きます。
                          やいま塾で大切にしていることなどを自由に書きます。
                          やいま塾で大切にしていることなどを自由に書きます。</div>
        </div>
      </div> <!--塾長より挨拶ここまで-->

      <div class="news container-fluid text-center text-md-left"> <!--やいま塾からのお知らせスタート-->
        <div class="themeg font-weight-bold">やいま塾からのお知らせ</div>
        <div class="w-md-100"></div>
        <div class="frame mt-4 text-left">
          <div class="newstext">
            <div class="newsdate">2020.08.03</div>
            第3回進学への道を開催いたします。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。
          </div></br></br> <!--newtext-->
          <div class="newstext">
            <div class="newsdate">2020.08.03</div>
            第3回進学への道を開催いたします。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。
          </div></br></br> <!--newtext-->
          <div class="newstext">
            <div class="newsdate">2020.08.03</div>
            第3回進学への道を開催いたします。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。
          </div></br></br> <!--newtext-->
          <div class="newstext">
            <div class="newsdate">2020.08.03</div>
            第3回進学への道を開催いたします。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。
          </div></br></br> <!--newtext-->
          <div class="newstext">
            <div class="newsdate">2020.08.03</div>
            第3回進学への道を開催いたします。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。などのお知らせをここに書いてきます。
          </div></br></br> <!--newtext-->
        </div>
      </div> <!--お知らせここまで-->
    </div> <!--pcwidthind-->
    
    
    
    <div class="footer d-inline-flex justify-content-center"> <!--フッター-->
      <div class="align-self-center">ここに著作権のことを書きます。</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
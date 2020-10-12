# RestaurantApp
レストラン料理注文WEBアプリ
<br>
<br>
<br>
■ VIEW  (Heroku)<br>
https://restaurant-app-junji.herokuapp.com/index.php

■画面<br>
・TOP画面<br>
![TOP](https://user-images.githubusercontent.com/54252926/95785121-2406df00-0d10-11eb-95f5-3bd9e8c513ab.jpg)

■ ファイル構成
<pre>
●画面クラス ------------------------------------
トップ画面
index.php

レビュー閲覧画面
show.php

注文内容確認画面
confirm.php

★スタイルシート ---------------
stylesheet.css

■topへ戻る機能  ----------------
index.js

●処理クラス    --------------------------------
■メニュークラス
メニュー(スーパークラス)
menu.php
  |
  |--フード(メニュー継承)
  |   food.php
  |
  |--ドリンク(メニュー継承)
      drink.php
          |
          |--アルコール(ドリンク継承)
             alcohol.php
             
■レビュークラス
review.php

■ユーザークラス
user.php

■チャート      --------------------------------
チャート描画スクリプト
Chart.js
チャートデータ作成
chartData.php

●データクラス   --------------------------------
data.php
</pre>

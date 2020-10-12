# RestaurantApp
レストラン料理注文WEBアプリ

■ VIEW  (Heroku)<br>
https://restaurant-app-junji.herokuapp.com/index.php

■ ファイル構成
●画面クラス ------------------------------------<br>
トップ画面
index.php

レビュー閲覧画面
show.php

注文内容確認画面
confirm.php

★スタイルシート ---------------<br>
stylesheet.css

■topへ戻る機能  ----------------<br>
index.js

●処理クラス    --------------------------------<br>
■メニュークラス<br>
メニュー(スーパークラス)<br>
menu.php<br>
  |<br>
  |--フード(メニュー継承)<br>
  |   food.php<br>
  |<br>
  |--ドリンク(メニュー継承)<br>
      drink.php<br>
          |<br>
          |--アルコール(ドリンク継承)<br>
             alcohol.php<br>
             
■レビュークラス<br>
レビュー<br>
review.php<br>

■ユーザークラス<br>
ユーザー<br>
user.php<br>

■チャート       --------------------------------<br>
チャート描画スクリプト<br>
Chart.js<br>
チャートデータ作成<br>
chartData.php<br>

●データクラス   --------------------------------<br>
データ<br>
data.php<br>















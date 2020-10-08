<!-- トップ画面  -->
<?php 
require_once('data.php');
?>
<script type="text/javascript">
<!-- 注文ボタン押下時のチェック  -->
 function check(){
   var check =  false;
   <?php foreach ($menus as $menu): ?>
   <!-- 注文総数0なら、確認画面に遷移しない  -->
   if( Number(<?php echo $menu->getName() ?>.value ) > 0){
       check =  true;
   }
   <?php endforeach ?>
   if(!check) alert("注文個数が入力されていません");
   return check;
 }
</script>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <!-- href="stylesheet.css"だと変更したスタイルシートの内容が反映されない  -->
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
  	<!-- ロゴタイトル  -->
    <h1 class="logo">Café Progate</h1>
    <h3>メニュー<?php echo Menu::getCount() ?>品</h3>
    <form method="post" action="confirm.php" onsubmit="return check()">
      <div class="menu-items">
        <?php foreach ($menus as $menu): ?>
          <!-- menu-itemクラスをshow.phpと共通してるので、切出したい  -->
          <div class="menu-item">
            <!-- メニュー画像表示  -->
            <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
            <h3 class="menu-item-name">
              <!-- メニュー名押下でレビュー画面に遷移 =で変数渡し  -->
              <a href="show.php?name=<?php echo $menu->getName() ?>">
              	<!-- メニュー名表示  -->
                <?php echo $menu->getName() ?>
              </a>
            </h3>
            <!-- instanceof クラス判定  -->
            <?php if ($menu instanceof Drink ): ?>
              <!-- ドリンククラスは温冷表示  -->
              <p class="menu-item-type"><?php echo $menu->getType() ?></p>
              <!-- アルコールクラスはアルコール表示  -->
              <?php if ($menu instanceof Alcohol ): ?>
              	<p class="menu-item-alcohol">/アルコール <?php echo $menu->getAlcohol() ?> %</p>
              <?php endif ?>
            <?php else: ?>
              <!-- フードクラスは辛さ表示  -->
              <?php for ($i=0; $i<$menu->getSpiciness(); $i++): ?>
                <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png" class='icon-spiciness'>
              <?php endfor ?>
            <?php endif ?>
            <!-- 税込価格で値段表示  -->
            <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?>（税込）</p>
            <!-- 個数入力 inputはformに掛かってる   -->
            <input type="text" value="0" id="<?php echo $menu->getName() ?>" name="<?php echo $menu->getName() ?>">
            <span>個</span>
          </div>
        <?php endforeach ?>
      </div>
  <!--固定ボタン-->
  <a href="#top" class="topBtn" id="topBtn">TOP</a><!--/固定ボタン-->
      <footer>
      <input id="order" type="submit" value="注文する">
      </footer>
    </form>

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="index.js"></script>
</body>
</html>
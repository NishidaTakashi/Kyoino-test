<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>消費税設定</title>
    <link rel="stylesheet" href="<?php echo base_url();?>css/styles.css">
  </head>
  <body>
    <div class="container">
      <h3>消費税設定の一覧</h3>
      <table class="database">
        <tr>
          <th>開始日付</th>
          <th>税率</th>
          <th>操作</th>
        </tr>
        <?php foreach ($taxes as $tax): ?>
        <tr>
            <td>
            <?php echo $tax["start"];?>
            </td>
            <td>
            <?php echo $tax["rate"];?>%
            </td>
            <td>
              <!-- 機能１－－delete -->
              削除
            </td>
        </tr>
      <?php endforeach; ?>
      </table>

      <h3>消費税設定の新規登録</h3>
      <!-- 機能２－－insert -->
      <form class="" action="" method="post">
        <td>
          <input type="text" name="" value="">
          <input type="text" name="" value="">
          <input type="submit" name="" value="登録">
        </td>
      </form>

      <h3>消費税計算</h3>
      <!-- 機能３－－select -->
      <table>
        <tr>
          <form class="" action="" method="post">
            <td>
              <input type="text" name="" value="">
            </td>
            <td>
              <input type="text" name="" value="">
            </td>
            <td>
              <input type="submit" name="" value="計算">
            </td>
          </form>
        </tr>
        <tr>
          <td></td>
          <td>
            <p>ここに税込み金額がでます</p>
          </td>
        </tr>
      </table>
    </div>
  </body>
</html>

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
              <?php echo anchor("tax/delete/".$tax["id"],"削除"); ?>
              <!-- <?php echo form_open("tax/delete"); ?>
                <input type="submit" name="" value="削除">
              </form> -->
            </td>
        </tr>
      <?php endforeach; ?>
      </table>

      <h3>消費税設定の新規登録</h3>
      <!-- 機能２－－insert -->
      <?php echo form_open("tax/insert"); ?>
        <td>
          <input type="tel" name="start" size="10" maxlength="10" pattern="\d{4}-\d{2}-\d{2}" placeholder="西暦-月-日">
          <input type="number" name="rate" placeholder="税率（整数）を入力">%
          <input type="submit" name="" value="登録">
        </td>
      </form>

      <h3>消費税計算</h3>
      <!-- 機能３－－select -->
      <table>
        <tr>
          <?php echo form_open("tax/select"); ?>
            <td>
              <input type="tel" name="started" size="10" maxlength="10" pattern="\d{4}-\d{2}-\d{2}" placeholder="西暦-月-日">
            </td>
            <td>
              <input type="number" name="money" placeholder="金額を入力"> 円
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

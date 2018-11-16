<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>マイフォーム</title>
  </head>
  <body>
    <?php echo anchor("blog","記事一覧へ"); ?>
    <?php echo validation_errors(); ?>
    <?php echo form_open("blog/update/".$blog["id"].""); ?>
    <h5>タイトル</h5>
    <input type="text" name="title" value="<?php echo $blog['title']; ?>" size="30">
    <h5>文章</h5>
    <textarea name="description" rows="7" cols="30"><?php echo $blog["description"] ?></textarea>
    <div class="">
      <input type="submit" name="" value="送信">
    </div>
    </form>
  </body>
</html>

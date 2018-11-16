<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>マイフォーム</title>
  </head>
  <body>
    <p>
      <?php echo anchor("blog/form","新規追加"); ?>
    </p>
    <table>
      <?php foreach ($blogs as $blog): ?>
        <tr>
          <td>
            <?php echo $blog["id"]; ?>
          </td>
          <td>
            <?php echo $blog["title"]; ?>
          </td>
          <td>
            <?php echo $blog["description"]; ?>
          </td>
          <td>
            <a href="blog/update/<?php echo $blog['id']; ?>">編集</a>
          </td>
          <td>
            <a href="blog/delete/<?php echo $blog['id']; ?>">削除</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>

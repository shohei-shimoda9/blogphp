<?php

$blog = $_POST;

if($blog['publish_status'] === 'un_publish') {
  echo '記事がありません。';
  return;
}
// if($blog['publish_status'] === 'publish') {
//   foreach($blog as $key => $value) {
//     echo '<pre>';
//     echo $key . ':' .htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
//     echo '</pre>';
//   }
// } else if($blog['publish_status'] === 'un_publish'){
//   echo '公開中の記事がありません。';
// } else {
//   echo '記事がありません。';
// }

?>

<!DOCTYPE html>
<html lang="あja"
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ブログ</title>
</head>
<body>
  <h2><?php echo htmlspecialchars($blog['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
  <p>登校日：<?php echo $blog['post_at']; ?></p>
  <p>カテゴリ：<?php echo $blog['category']; ?></p>
  <hr>
  <p><?php echo nl2br($blog['content']); ?></p>
</body>
</html>
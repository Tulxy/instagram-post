<?php

$post = [
  'user' => [
    'name' => 'John',
    'pfp' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
  ],

  'img' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
  'title' => 'Hello World',
  'likes' => 43,
  'tags' => ['php', 'laravel'],
  'comments' => [
    ['author' => 'Tom', 'text' => 'Hello'],
    ['author' => 'Anna', 'text' => 'Hi'],
    ['author' => 'Mark', 'text' => 'Goodbye']
  ]];

$post2 = [
  'user' => [
    'name' => 'John',
    'pfp' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
  ],
  'img' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
  'title' => 'Hello Friend',
  'likes' => 2303,
  'tags' => ['php', 'laravel'],
  'comments' => [
    ['author' => 'Tom', 'text' => 'Hello'],
    ['author' => 'Anna', 'text' => 'Hi'],
    ['author' => 'Mark', 'text' => 'Goodbye']
  ]];

$post3 = [
  'user' => [
    'name' => 'John',
    'pfp' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
  ],


  'img' => 'https://images.unsplash.com/photo-1518717758536-85ae29035b6d',
  'title' => 'brown dog',
  'likes' => 413,
  'tags' => ['php', 'laravel'],
  'comments' => [
    ['author' => 'Tom', 'text' => 'Hello'],
    ['author' => 'Anna', 'text' => 'Hi'],
    ['author' => 'Mark', 'text' => 'Goodbye']
  ]
];

$posts = [$post, $post2, $post3];

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>
<body>

<?php
foreach ($posts as $post) {
  ?>
  <div class="post">
    <div class="user-info">
      <img class="pfp" src="<?= $post['user']['pfp'] ?>" alt="user-pfp">
      <h2> <?= $post['user']['name'] ?></h2>
    </div>

    <img src="<?= $post['img'] ?>" alt="post-photo" width="400px">

    <p>❤️ <?= $post['likes'] ?></p>
    <div class="title">
      <p class="username"><?= $post['user']['name'] ?></p>
      <p> <?= $post['title'] ?> </p>
    </div>

    <p>Tags: <?= implode(', ', $post['tags']) ?></p>
    <div><h3>Comments: </h3>
      <?php
      foreach ($post['comments'] as $comment) {
        ?>
        <div class="comment">
          <h4><?= $comment['author'] ?>:</h4>
          <p><?= $comment['text'] ?></p>
        </div>
        <?php
      }
      ?>
    </div>
    <hr>

  </div>
  <?php
}
?>

</body>
</html>




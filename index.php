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
    ['author' => 'Tom', 'text' => 'Hello', 'author-pfp' => 'https://images.unsplash.com/photo-1527980965255-d3b416303d12'],
    ['author' => 'Anna', 'text' => 'Hi', 'author-pfp' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d'],
    ['author' => 'Mark', 'text' => 'Goodbye', 'author-pfp' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1']
  ],
  'date' => '15. září'
];

$post2 = [
  'user' => [
    'name' => 'Andy',
    'pfp' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
  ],

  'img' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
  'title' => 'Hello Friend',
  'likes' => 2303,
  'tags' => ['php', 'laravel'],
  'comments' => [
    ['author' => 'Tom', 'text' => 'Hello', 'author-pfp' => 'https://images.unsplash.com/photo-1527980965255-d3b416303d12'],
    ['author' => 'Anna', 'text' => 'Hi', 'author-pfp' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d'],
    ['author' => 'Mark', 'text' => 'Goodbye', 'author-pfp' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1']
  ],
  'date' => '15. září'
];

$post3 = [
  'user' => [
    'name' => 'Jane',
    'pfp' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
  ],

  'img' => 'https://images.unsplash.com/photo-1518717758536-85ae29035b6d',
  'title' => 'brown dog',
  'likes' => 413,
  'tags' => ['php', 'laravel'],
  'comments' => [
    ['author' => 'Tom', 'text' => 'Hello', 'author-pfp' => 'https://images.unsplash.com/photo-1527980965255-d3b416303d12'],
    ['author' => 'Marco', 'text' => 'Hi', 'author-pfp' => 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e'],
    ['author' => 'Leo', 'text' => 'Goodbye', 'author-pfp' => 'https://images.unsplash.com/photo-1527980965255-d3b416303d12']
  ],
  'date' => '15. září'
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

<h1>Instagram 2.0</h1>

<?php
foreach ($posts as $post) {
  ?>
  <div class="post">
    <div class="user-info">
      <img class="pfp" src="<?= $post['user']['pfp'] ?>" alt="user-pfp">
      <h2> <?= $post['user']['name'] ?></h2>
    </div>

    <img src="<?= $post['img'] ?>" alt="post-photo" width="400px">

    <div class="post-content">
      <div class="stats">
        <p>❤️ <?= $post['likes'] ?></p>
        <p>💬 <?= count($post['comments']) ?></p>
        <p>🔁</p>
        <p>✉️</p>
      </div>

      <div class="title">
        <p class="username"><?= $post['user']['name'] ?></p>
        <p> <?= $post['title'] ?> </p>
      </div>

      <div class="tags">
        <?php
        foreach ($post['tags'] as $tag) {
          $tag = '#' . $tag;
          ?>
          <p><?= $tag ?> </p>
          <?php
        }
        ?>
      </div>

      <div>
        <?php
        foreach ($post['comments'] as $comment) {
          ?>
          <div class="comment">
            <img class="comment-pfp" src="<?= $comment['author-pfp'] ?>" alt="comment-pfp">
            <h4><?= $comment['author'] ?></h4>
            <p><?= $comment['text'] ?></p>
          </div>
          <?php
        }
        ?>
      </div>

      <p class="date"><?= $post['date'] ?> </p>

    </div>

  </div>
  <?php
}
?>

</body>
</html>




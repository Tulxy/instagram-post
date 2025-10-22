<?php

$post = [
  'user' => [
    'name' => 'John',
    'pfp' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
  ],
  'post-info' => [
    'img' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
    'title' => 'Hello World',
    'likes' => 43,
    'tags' => ['php', 'laravel'],
  ],
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
  'post-info' => [
    'img' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
    'title' => 'Hello Friend',
    'likes' => 2303,
    'tags' => ['php', 'laravel'],
  ],
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
  'post-info' => [
    'img' => 'https://images.unsplash.com/photo-1518717758536-85ae29035b6d',
    'title' => 'brown dog',
    'likes' => 413,
    'tags' => ['php', 'laravel'],
  ],
  'comments' => [
    ['author' => 'Tom', 'text' => 'Hello', 'author-pfp' => 'https://images.unsplash.com/photo-1527980965255-d3b416303d12'],
    ['author' => 'Marco', 'text' => 'Hi', 'author-pfp' => 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e'],
    ['author' => 'Leo', 'text' => 'Goodbye', 'author-pfp' => 'https://images.unsplash.com/photo-1527980965255-d3b416303d12']
  ],
  'date' => '15. září'
];

$story1 = [
  'user' => [
    'img' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
    'name' => 'John',
  ]
];

$story2 = [
  'user' => [
    'img' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
    'name' => 'John',
  ]
];

$story3 = [
  'user' => [
    'img' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
    'name' => 'John',
  ]
];

$story4 = [
  'user' => [
    'img' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
    'name' => 'John',
  ]
];


$story5 = [
  'user' => [
    'img' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
    'name' => 'John',
  ]
];


$story6 = [
  'user' => [
    'img' => 'https://images.unsplash.com/photo-1507149833265-60c372daea22',
    'name' => 'John',
  ]
];


$stories = [$story1, $story2, $story3, $story4, $story5, $story6];
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

<aside>
  <h1>Instagram 2.0</h1>
  <ul>
    <li><span>🏠</span>Domů</li>
    <li><span>🔎</span>Hledat</li>
    <li><span>🧭</span>Objevujte</li>
    <li><span>▶️</span>Reels</li>
    <li><span>✉️</span>Zprávy</li>
    <li><span>❤️</span>Upozornění</li>
    <li><span>➕</span>Vytvořit</li>
    <li><span>👨‍💻</span>Profil</li>
  </ul>
</aside>

<section class="posts">

  <div class="stories">
    <?php
    foreach ($stories as $story) {
      ?>
      <div class="story">
        <img src="<?= $story['user']['img'] ?>" alt="pfp" width="80" height="80">
        <h3><?= $story['user']['name'] ?> </h3>
      </div>
      <?php
    }
    ?>
  </div>


  <?php
  foreach ($posts as $post) {
    ?>
    <div class="post">
      <?php include 'user-info.php'; ?>
      <?php include 'post-content.php'; ?>
    </div>
    <?php
  }
  ?>
</section>


</body>
</html>




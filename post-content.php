<div class="post-content">
  <div class="stats">
    <p>❤️ <?= $post['post-info']['likes'] ?></p>
    <p>💬 <?= count($post['comments']) ?></p>
    <p>🔁</p>
    <p>✉️</p>
  </div>

  <div class="title">
    <p class="username"><?= $post['user']['name'] ?></p>
    <p> <?= $post['post-info']['title'] ?> </p>
  </div>

  <div class="tags">
    <?php
    foreach ($post['post-info']['tags'] as $tag) {
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

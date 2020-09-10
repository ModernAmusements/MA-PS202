<nav class="blog-prevnext">
  <h2 class="h2">Keep on reading</h2>

  <div class="autogrid" style="--gutter: 1.5rem">
    <?php if ($prev = $page->prevListed()): ?>
    <?php snippet('blog/excerpt', ['article' => $prev, 'excerpt' => true])  ?>
    <?php endif ?>

    <?php if ($next = $page->nextListed()): ?>
    <?php snippet('blog/excerpt', ['article' => $next, 'excerpt' => true])  ?>
    <?php endif ?>
  </div>
</nav>

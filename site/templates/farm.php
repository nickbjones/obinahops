<?php
  $studentBlogText = $kirby->language() == "en" ? "Student blog" : "学生のブログ";
?>
<?php snippet('head') ?>
<?= css('assets/css/blog.css') ?>
<?php snippet('header') ?>
<main class="ns-blog ns-farm">
  <?php snippet('blog-shared') ?>
  <div class="layout">
    <div class="link-to-student-blog">
      <p class="markdown student-blog-text"><?= $page->studentBlogText()->ktRaw() ?></p>
      <a class="student-blog-link" href="/<?= $kirby->language() ?>/student-blog"><?= $studentBlogText ?> →</a>
    </div>
  </div>
</main>
<?php snippet('footer') ?>

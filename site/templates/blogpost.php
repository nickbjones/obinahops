<?php snippet('head') ?>
<?= css('assets/css/blog.css') ?>
<?php snippet('header') ?>
<main class="ns-blog">
  <div class="layout">
    <article class="blogpost">
      <p class="blogpost-title"><?= $page->title() ?></p>
      <time class="blogpost-date"><?= $page->date()->toDate("Y/m/d") ?></time>
      <div class="blogpost-body markdown"><?= $page->text()->kt() ?></div>
    </article>
  </div>
</main>
<?php snippet('footer') ?>

<?php snippet('head') ?>
<?= css('assets/css/about.css') ?>
<?php snippet('header') ?>

<main class="ns-error">
  <div class="layout">
    <div class="text">
      <h1><?= $page->title() ?></h1>
      <div class="markdown"><?= $page->intro()->kt() ?></div>
      <div class="markdown"><?= $page->text()->kt() ?></div>
    </div>
  </div>
</main>

<?php snippet('footer') ?>

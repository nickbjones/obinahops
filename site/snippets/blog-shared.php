<div class="layout">
  <h1 class="title"><?= $page->title()->ktRaw() ?></h1>
  <!-- <h1 class="title"><?= $page->Pagetitle()->ktRaw() ?></h1> -->
</div>
<div class="layout">
  <div class="textbody toptext">
    <div class="markdown"><?= $page->TopText()->kt() ?></div>
  </div>
  <?php foreach ($page->children()->listed()->sortBy('date', 'desc') as $article): ?>
    <article class="blogpost" id="<?= $article->slug() ?>">
      <a class="blogpost-title" href="<?= $article->url() ?>"><?= $article->title() ?></a>
      <time class="blogpost-date"><?= $article->date()->toDate("Y/m/d") ?></time>
      <div class="markdown blogpost-body"><?= $article->text()->kt() ?></div>
    </article>
  <?php endforeach ?>
  <div class="textbody bottomtext">
    <div class="markdown"><?= $page->BottomText()->kt() ?></div>
  </div>
</div>

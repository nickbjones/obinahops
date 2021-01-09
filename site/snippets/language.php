<div class="language">
  <?php foreach($kirby->languages() as $language): ?>
    <a class="toggle-language <?php e($kirby->language() == $language, 'active', 'inactive') ?>" href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>"><?= html($language->name()) ?></a>
  <?php endforeach ?>
</div>

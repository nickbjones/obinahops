<header class="ns-header">
  <a class="logo" href="/<?= $kirby->language() ?>"><img src="/assets/images/logo-sm-inline.png" alt=""></a>
  <div class="header-right">
    <nav class="links">
      <a href="/<?= $kirby->language() ?>/farm" class="nav-link<?= page("farm")->isActive() ? ' active' : ''; ?>"><?= page("farm")->title() ?></a>
      <a href="/<?= $kirby->language() ?>/brewery" class="nav-link<?= page("brewery")->isActive() ? ' active' : ''; ?>"><?= page("brewery")->title() ?></a>
    </nav>
    <?php snippet('language') ?>
  </div>
</header>

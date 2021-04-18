<?php if(site()->paypalEnabled() == 'enabled'): ?>
  <?php snippet('sale-button') ?>
<?php endif ?>
<footer class="ns-footer">
  <div class="layout">
    <div class="footer-inner">
      <a href="/">
        <img src="/assets/images/logo.png" alt="Obina Hop Farm Logo">
      </a>
      <?php snippet('social-links') ?>
      <?php snippet('copyright') ?>
    </div>
  </div>
</footer>

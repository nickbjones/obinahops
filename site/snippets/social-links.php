<div class="social-wrapper">
  <?php if (site()->facebook()->isNotEmpty()) { buildSocialLink('facebook',site()->facebook()); } ?>
  <?php if (site()->instagram()->isNotEmpty()) { buildSocialLink('instagram',site()->instagram()); } ?>
  <?php if (site()->youtube()->isNotEmpty()) { buildSocialLink('youtube',site()->youtube()); } ?>
  <?php if (site()->linkedin()->isNotEmpty()) { buildSocialLink('linkedin',site()->linkedin()); } ?>
  <?php if (site()->twitter()->isNotEmpty()) { buildSocialLink('twitter',site()->twitter()); } ?>
</div>

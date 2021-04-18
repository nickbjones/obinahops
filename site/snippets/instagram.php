<?php
  $seeMoreOnInstagram = $kirby->language() == "en" ? "See more on Instagram." : "Instagramで続きを見る.";
?>
<div class="ns-instagram">
  <h2 class="title"><?= $title ?></h2>
  <div id="instagram-container" class="instagram-container"></div>
  <div class="instagram-link">
    <a href="<?= $site->instagram() ?>"><?= $seeMoreOnInstagram ?></a>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>

<script type="text/javascript">
  var userFeed = new Instafeed({
    get: 'user',
    target: "instagram-container",
    limit: 3,
    resolution: 'low_resolution',
    accessToken: 'IGQVJVMVVrZA284SFpYdm5kdjBDR2VUa2MyYWxlR2tYX0tXd2JvQ08waXQySkJjSVAyblZAUcWNTdkFhZAkZA2VFlHVXppYjN1YjBQY21NVWROZAk1MOTM3OE1wZAlJKSWVZAWEE5WjRtVTl4T3dxZAk1hNzI0YwZDZD',
    template: '<div class="instagram-item"><img class="instagram-image" src="{{image}}" /><p class="instagram-description">{{caption}}</p></div>',
  });
  userFeed.run();
</script>
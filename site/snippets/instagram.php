<?php
  $seeMoreOnInstagram = $kirby->language() == "en" ? "See more on Instagram" : "Instagramで続きを見る";
  $igIcon = file_get_contents('svgs/instagram.html',FILE_USE_INCLUDE_PATH);
  $template = '<div class="ig-item"><div class="ig-card"><img class="ig-image" src="{{image}}" /><a class="ig-link" href="{{link}}" target="_blank"></a><p class="ig-description">{{caption}}</p></div></div>';
?>

<div class="ns-instagram">
  <h2 class="title"><?= $title ?></h2>
  <div id="ig-container" class="ig-container"></div>
  <div class="ig-link">
    <a href="<?= $site->instagram() ?>"><?= $seeMoreOnInstagram ?> →</a>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>

<script type="text/javascript">
  var userFeed = new Instafeed({
    get: 'user',
    target: "ig-container",
    limit: 3,
    resolution: 'low_resolution',
    accessToken: 'IGQVJVMVVrZA284SFpYdm5kdjBDR2VUa2MyYWxlR2tYX0tXd2JvQ08waXQySkJjSVAyblZAUcWNTdkFhZAkZA2VFlHVXppYjN1YjBQY21NVWROZAk1MOTM3OE1wZAlJKSWVZAWEE5WjRtVTl4T3dxZAk1hNzI0YwZDZD',
    template: '<?= $template ?>',
  });
  userFeed.run();
</script>

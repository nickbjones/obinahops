<?php
  $contentSrc = '/assets';

  function buildSocialLink($name,$content) {
    $str = '<a class="social-icon '.$name.'" href="'.$content.'" target="_blank">';
    $str .= file_get_contents('svgs/'.$name.'.html',FILE_USE_INCLUDE_PATH);
    $str .= '<span class="social-icon-text">'.$name.'</span>';
    $str .= '</a>';
    echo $str;
  }
?>
<div class="social-wrapper">
  <?php if (site()->instagram()->isNotEmpty()) { buildSocialLink('instagram',site()->instagram()); } ?>
  <?php if (site()->youtube()->isNotEmpty()) { buildSocialLink('youtube',site()->youtube()); } ?>
  <?php if (site()->facebook()->isNotEmpty()) { buildSocialLink('facebook',site()->facebook()); } ?>
  <?php if (site()->linkedin()->isNotEmpty()) { buildSocialLink('linkedin',site()->linkedin()); } ?>
  <?php if (site()->twitter()->isNotEmpty()) { buildSocialLink('twitter',site()->twitter()); } ?>
  <p class="campfire-link-wrapper">
    <a href="https://camp-fire.jp/projects/view/319882" target="_blank">
      <img class="campfire-icon" src="<?= $contentSrc ?>/images/campfire.png" alt="">
    </a>
  </p>
</div>

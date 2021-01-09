<?php
  // globally defined functions
  function buildSocialLink($name,$content) {
    $str = '<a class="social-icon '.$name.'" href="'.$content.'">';
    $str .= file_get_contents('svgs/'.$name.'.html',FILE_USE_INCLUDE_PATH);
    $str .= '</a>';
    echo $str;
  }

  // disable site
  if ($site->disabled() == 'yes') snippet('disabled');
?>
<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <meta name="keywords" content="<?= $site->keywords()->html() ?>">
  <link rel="shortcut icon" sizes="196x196" href="/assets/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
</head>
<body>

<?php
  $options = [
    "description" => $page->description(),
    "amount_currency" => "JPY",
    "amount_value" => 10, // yen
    "button_shape" => "rect",
    "button_color" => "gold",
    "button_layout" => "vertical",
    "button_label" => "pay",
  ]
?>

<?php snippet('head') ?>
<?= css('assets/css/shop.css') ?>
<?php snippet('header') ?>

<main class="ns-shop">
  <div class="layout">
    <div class="text">
      <p><?= $page->description() ?></p>
      <?php snippet('paypal-widget', ['options' => $options]) ?>
    </div>
  </div>
</main>

<?php snippet('footer') ?>

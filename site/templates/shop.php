<?php
  $options = [
    "description" => $page->description(),
    "price" => 700,
  ];
  $contentSrc = '/assets';
  $limitedQuantity = $kirby->language() == "en" ? "Limited quantity available!" : "数量限定！";
?>

<?php snippet('head') ?>
<?= css('assets/css/shop.css') ?>
<?php snippet('header') ?>

<main class="ns-shop center-sp">
  <div class="layout">
    <div class="row">
      <div class="col hide-sp right-pc">
        <img class="product-image" src="<?= $contentSrc ?>/images/rhizomes.jpeg" alt="">
      </div>
      <div class="col">
        <h3 class="product-title"><?= $page->description() ?></h3>
        <p class="limited-quantity"><?= $limitedQuantity ?></p>
        <img class="product-image hide-pc" src="<?= $contentSrc ?>/images/rhizomes.jpeg" alt="">
        <p class="product-price">¥<?= $options['price'] ?></p>
        <?php snippet('paypal-widget', ['options' => $options]) ?>
      </div>
    </div>
  </div>
</main>

<?php snippet('footer') ?>

<style>
  /* hide the sale button on the shop page */
  #sale {
    display: none;
  }
</style>

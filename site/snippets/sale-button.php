<?php
  $availableNow = $kirby->language() == "en" ? "Available Now!" : "Available Now!";
  $productName = $kirby->language() == "en" ? "Chinook Hop Rhizomes" : "Chinook Hop Rhizomes";
  $clickHere = $kirby->language() == "en" ? "CLICK HERE" : "CLICK HERE";
?>

<a class="sale" id="sale" href="/<?= $kirby->language() ?>/shop">
  <span class="burst-12 sale-wrapper">
    <span class="sale-text">
      <p class="line1"><?= $availableNow ?></p>
      <p class="line2"><?= $productName ?></p>
      <p class="line3"><?= $clickHere ?></p>
    </span>
  </span>
</a>

<script>
  window.onload = function() {
    setTimeout(() => {
      document.getElementById('sale').classList.add('visible');
    }, 3000);
  }
</script>

<a class="sale" id="sale" href="/<?= $kirby->language() ?>/shop">
  <span class="burst-12 sale-wrapper">
    <span class="sale-text">
      <p class="line1">Available Now!</p>
      <p class="line2">Chinook Hop Rhizomes</p>
      <p class="line3">CLICK HERE</p>
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

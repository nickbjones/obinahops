<?php
  // sandbox
  // $client_id = "Ac3S-30-6NShRj_WK9HOoN2NxdXE8zUa-3zAAt9PDirDKc2iYAxDErtH26TgonPvKjTS1Dk502OVxbqS";
  // live
  $client_id = "ARBEjhxvndrcN8mC4IXnUaCQJDBHAnDZijBKxwijiKYiqUEE-LpUthyGB01Jhq41-yUE0f5DDvttVFCV";
  $currency = "JPY";
  $maxQuantity = 20;

  $quantity = $kirby->language() == "en" ? "Quantity" : "個数";
  // secret: EE7ADYh1RWAa4WqoisnRS7tGn7mRFuUlDQuE1IsLrzkSMUvqafHvKVL6dSTPg4csadGR6i6Vv_T9eY-u
?>

<div id="smart-button-container">
  <div>
    <div class="quantity-select-wrapper">
      <span><?= $quantity ?></span>
      <select class="quantity-select" id="quantity-select">
        <?php for ($i=1; $i <= $maxQuantity; $i++) { ?>
          <option value="<?=$i?>" price="<?= $i * $options['price'] ?>"><?=$i?> : ¥<?= $i * $options['price'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div id="paypal-button-container"></div>
  </div>
</div>
<script src="https://www.paypal.com/sdk/js?client-id=<?= $client_id ?>&currency=<?= $currency ?>" data-sdk-integration-source="button-factory"></script>
<script>
  function initPayPalButton() {
    var quantity = parseInt();
    var quantitySelect = document.querySelector("#smart-button-container #quantity-select");

    paypal.Buttons({
      style: {
        shape: 'rect',
        color: 'gold',
        layout: 'vertical',
        label: 'pay',
      },

      createOrder: function(data, actions) {
        quantitySelect.style.visibility = "hidden";
        if (quantitySelect.options.length > 0) {
          quantity = parseInt(quantitySelect.options[quantitySelect.selectedIndex].value);
        } else {
          quantity = 1;
        }

        var priceTotal = quantity * <?= $options['price'] ?>;

        return actions.order.create({
          purchase_units: [
            {
              description: '<?= $options['description'] ?>',
              amount: {
                currency_code: '<?= $currency ?>',
                value: priceTotal,
                breakdown: {
                  item_total: {
                    currency_code: '<?= $currency ?>',
                    value: priceTotal,
                  },
                },
              },
              items: [
                {
                  name: '<?= $options['description'] ?>',
                  unit_amount: {
                    currency_code: '<?= $currency ?>',
                    value: <?= $options['price'] ?>,
                  },
                  quantity: quantity,
                },
              ]
            }
          ]
        });
      },

      onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
          alert('Transaction completed by ' + details.payer.name.given_name + '!');
        });
      },

      onCancel: function(data, actions) {
        quantitySelect.style.visibility = "visible";
      },

      onError: function(err) {
        console.log(err);
      }
    }).render('#paypal-button-container');
  }
  initPayPalButton();
</script>

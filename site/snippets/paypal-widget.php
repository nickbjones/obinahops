<div id="smart-button-container">
  <div style="text-align: center;">
    <div id="paypal-button-container"></div>
  </div>
</div>
<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=JPY" data-sdk-integration-source="button-factory"></script>
<script>
  function initPayPalButton() {
    paypal.Buttons({
      style: {
        shape: '<?= $options['button_shape'] ?>',
        color: '<?= $options['button_color'] ?>',
        layout: '<?= $options['button_layout'] ?>',
        label: '<?= $options['button_label'] ?>',
      },

      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [
            {
              "description": "<?= $options['description'] ?>",
              "amount": {
                "currency_code": "<?= $options['amount_currency'] ?>",
                "value": <?= $options['amount_value'] ?>
              }
            }
          ]
        });
      },

      onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
          alert('Transaction completed by ' + details.payer.name.given_name + '!');
        });
      },

      onError: function(err) {
        console.log(err);
      }
    }).render('#paypal-button-container');
  }
  initPayPalButton();
</script>

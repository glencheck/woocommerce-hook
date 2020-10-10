<?php $present = false; ?>
<?php foreach( $order->get_items() as $item ):  
	$_product = wc_get_product( $item['product_id'] );
         // WooCommerce Produkt-ID(s)
        if ( $item['product_id'] == 643 ):  
                $present = true; ?>
					
<?php endif; endforeach; ?>

<?php if( $present ): ?>

	<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Vielen Dank für deine Bestellung. Bei deiner nächsten Bestellung erhälst du mit dem Gutscheincode Danke-250 einen Rabatt in Höhe von 250 EUR.', 'woocommerce' ), $order ); ?></p>
<?php else: ?>

	<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Vielen Dank für Ihre Bestellung.', 'woocommerce' ), $order ); ?></p>
<?php endif; ?>

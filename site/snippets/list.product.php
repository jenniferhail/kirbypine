<?php if(count($products) or $products->count()) { ?>
	<ul class="listing uk-container uk-padding-remove">
	  <?php foreach($products as $product): ?>
		<li class="uk-margin-right uk-margin-bottom">
			<a href="<?php echo $product->url() ?>" vocab="http://schema.org" typeof="Product">
				<?php 
					if ($product->hasImages()) {
						$image = $product->images()->sortBy('sort', 'asc')->first();
					} else {
						$image = $site->images()->find($site->placeholder());
					}
					$thumb = thumb($image,array('height'=>150));
				?>
				<img property="image" content="<?php echo $thumb->url() ?>" src="<?php echo $thumb->dataUri() ?>" title="<?php echo $product->title() ?>">

				<div style="max-width: <?php echo $thumb->width() ?>px;" class="uk-margin-small-top">
					<h3 class="uk-margin-remove" property="name"><?php echo $product->title()->html() ?></h3>

		    		<?php
		    			$variants = $product->variants()->yaml();
		    			foreach ($variants as $key => $variant) $pricelist[] = $variant['price']; // Add all prices to the pricelist
		    			$priceFormatted = formatPrice(min($pricelist)); // Find the lowest price and format it
		    			if (count($variants) > 1) $priceFormatted = 'From '.$priceFormatted; // If there are multiple prices, add "From" to the label"
		    			$pricelist = []; // Clear the pricelist
					?>
					<p property="offers" typeof="Offer">
						<span class="uk-button uk-button-primary"><?php echo $priceFormatted ?></span>
					</p>

					<?php if ($product->text() != '') { ?>
						<p property="description"><?php echo $product->text()->excerpt(50) ?></p>
					<?php } ?>
				</div>
			</a>
		</li>
	  <?php endforeach ?>
	</ul>
<?php } ?>
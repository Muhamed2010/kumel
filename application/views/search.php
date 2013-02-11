<div class="container result">
	
		<?php foreach($objeks as $objek): ?>
		<div class="boox">
			<div class="right-block">
				<img src="http://www.photoshelter.com/img-get/I0000qlJ1FH_YGsw/s/590/392/North-Maluku-104.jpg">
				<div><?php echo $objek->post_excerpt?></div>
				<div><?php echo $objek->total_day?></div>
			</div>
		</div>
	<?php endforeach; ?>

</div>
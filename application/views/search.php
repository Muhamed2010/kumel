<div class="container result">
	
		<?php foreach($objeks as $objek): ?>
		<div class="boox">
			<div class="right-block">
				<img src="http://www.photoshelter.com/img-get/I0000qlJ1FH_YGsw/s/590/392/North-Maluku-104.jpg">
				<div class="banner">
				<div class="tag-title"><?php echo $objek->post_title?></div>
				<div class="tag-location"> City Location, Country Location</div>
				</div>
				
			</div>
		</div>
	<?php endforeach; ?>

</div>

<div class="container result">

	<?php  if(count($objeks)==0){

		echo "Kosong";
	}

	else{
	?>

	<?php foreach($objeks as $objek): ?>
	<div class="boox">

		<div class="right-block">

			<div class="image-cover">
				<div class="tag-currency">Rp <?php echo $objek->price?>/ Orang</div>	
				<a href="<?php echo base_url()?>index.php/detail?id=<?php echo $objek->ID ?>">
					<img class="lazy" src="" data-original="http://www.photoshelter.com/img-get/I0000qlJ1FH_YGsw/s/590/392/North-Maluku-104.jpg">
				</a>
			</div>
			<div class="banner">
				<a href="<?php echo base_url()?>index.php/detail?id=<?php echo $objek->ID ?>">
					<div class="tag-title"><?php echo $objek->post_title?></div>
				</a>
			</div>
			<div class="bottom-banner">
				<div class="tag-location"><?php echo $objek->kota; ?></div>
			</div>
		</div>
	</div>
<?php endforeach; }?>

</div>
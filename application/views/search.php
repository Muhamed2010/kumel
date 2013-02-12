
<div class="container details-search">
<div class="searchbox-landing" id="search">
<form action="<?php echo base_url() ?>index.php/search" method="GET">
	<div class="activity"> 
		<input type="text" id="city" placeholder="Anda ingin liburan ke... bandung? jakarta?" >
		<input type="hidden" name="city" id="cityid"/>
	</div>
	<div class="place"> 
		<input type="text" id="act" placeholder="Anda ingin Hiking? Tracking? Rafting? Belanja?">
		<input type="hidden" name="act" id="actid"/>
	</div>

	<div class="search">
		<button class="btn btn-success" id="btnSearch" type="submit">Cari Liburanku!</button>
	</div>
</form>
</div>
</div>
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
				<img class="lazy" src="" data-original="http://www.photoshelter.com/img-get/I0000qlJ1FH_YGsw/s/590/392/North-Maluku-104.jpg">

			</div>
			<div class="banner">
				<div class="tag-title"><?php echo $objek->post_title?></div>
			</div>
			<div class="bottom-banner">
				<div class="tag-location"> City Location, Country Location</div>
			</div>
		</div>
	</div>
<?php endforeach; }?>

</div>
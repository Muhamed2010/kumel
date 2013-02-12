<div class="container details-search">
	<script>
	$(function() {
		$( "#city" ).autocomplete({
			source: function( request, response ) {
				$.ajax({ 
					url: "<?php echo base_url() ?>index.php/main/kota",
					data: { "q": request.term },
					success: function(data) { 
						response(data); 
					},
				});
			},
			select: function (event, ui) {
				$("#cityid").val(ui.item.id); // display the selected text
			},
			minLength: 2,
		});
		$( "#act" ).autocomplete({
			source: function( request, response ) {
				$.ajax({ 
					url: "<?php echo base_url() ?>index.php/main/act",
					data: { "q": request.term },
					success: function(data) { 
						response(data); 
					}
				});
			},
			select: function (event, ui) {
				$("#actid").val(ui.item.id); // display the selected text
			},
			minLength: 2,
		});
		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 500,
			values: [ 75, 300 ],
			slide: function( event, ui ) {
				$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			}
		});
		$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
			" - $" + $( "#slider-range" ).slider( "values", 1 ) );

	});
	</script>
	<div class="searchbox-detail" id="search">
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
<div class="container result-heads">
	<div class="result-getter"> Showing 1 - 30 of 1869  Hasil Pencarian</div>
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
<div class="pagination pagination-centered">
  <ul>
    <li class="disabled"><a href="#">&laquo;</a></li>
    <li class="active"><a href="#">1</a></li>
    <li class=""><a href="#">1</a></li>
    <li class=""><a href="#">2</a></li>
    <li class=""><a href="#">3</a></li>
    <li class=""><a href="#">4</a></li>
    <li class="disabled"><a href="#">&raquo;</a></li>
  </ul>
</div>

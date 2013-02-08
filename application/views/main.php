<script>
	$(function() {
		$( "#city" ).autocomplete({
			source: function( request, response ) {
				$.ajax({ 
					url: "<?php echo base_url() ?>/index.php/main/kota",
					data: { "q": request.term },
					success: function(data) { 
						response(data); 
					}
				});
			},
			minLength: 2,
		});
		$( "#act" ).autocomplete({
			source: function( request, response ) {
				$.ajax({ 
					url: "<?php echo base_url() ?>/index.php/main/act",
					data: { "q": request.term },
					success: function(data) { 
						response(data); 
					}
				});
			},
			minLength: 2,
		});
	});
</script>

<div class="top-tag">
    <h1>Travel <strong>More</strong> then sell it!</h1>
    <h2>a Million Place to visit on millions travel Package</h2>
</div>
<div class="searchbox-landing">
	<div class="place"> 
		<input type="text" id="city" placeholder="Anda ingin liburan ke... bandung? jakarta?" >
	</div>
	<div class="activity"> 
		<input type="text" id="act" placeholder="Activity" >
	</div>

	<div class="search">
		<button class="btn btn-success" type="button">Cari Liburanmu!</button>
	</div>

</div>
<div class="mosaic">
	<div class="box">
		<div class="big-tag">
			<h1>Siem Reap, Thailand</h1>
			<div class="tagline">5 Thing you never knew about Lord Howe Island</div>
		</div>
		<img src="http://images1.tropicalsky.co.uk/images/hotels/alt2/RESIZE2(21).jpg">
	</div>
	<div class="box">
		<div class="medium-tag">
			<h1>Tokyo, Japan</h1>
			<div class="tagline">Welcome to Japan!!!</div>
		</div>
	<img src="http://d18krzy3dutnlo.cloudfront.net/mosaic_items/photos/8-1355391148/vertical.jpg">

	</div>
	<div class="box">
	<div class="simple-tag">
		<h1>Tanjung Papuma, Jember</h1>
		<div class="tagline">Best white sand beach</div>
	</div>

	<img src="http://2.bp.blogspot.com/-mUnEYKzzjHk/TjD_T4zIAyI/AAAAAAAAASY/K7_hOW6Oel4/s1600/papuma9.jpg"></div>
	<div class="box">
		<div class="last-tag">
			<h1>Losari, Makassar</h1>
			<div class="tagline">East Side of Indonesia</div>
		</div>
		<img src="http://www.haltthesalt.org.au/images_aerial/wka_073_gulf6.jpg">
	</div>
</div>


<div class="things-todo">Yuk! Traveling ke <a href="#">Jakarta</a>, <a href="#">Surabaya</a>, <a href="#">Malang</a>, <a href="#">Pulau sempu</a>, <a href="#">Batu</a>, <a href="#">Makassar</a>, <a href="#">Wakatobi</a>, <a href="#">Phuket</a>, <a href="#">Derawan</a>, <a href="#">Blitar</a>, <a href="#">Semarang</a>, <a href="#">Jogjakarta</a>, <a href="#">Mentawai</a> <a href="#">Maladewa</a>,<a href="#">Sukabumi</a>,<a href="#">Bali</a>,<a href="#">Lombok</a> dan 500+ tempat Lainnya.</div>
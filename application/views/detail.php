
<div class="container detail">
	<div class="detail-aside">
		<div class="aside-content">
			<div class="price-area">
				
					<h2 class="price">Rp 560.000</h2>
					<div class="top-label">Jumlah Traveller</div>
					<div class="form-input"><input type="text" id="tanggal"  class="input-xlarge"></div>
					<div class="top-label">Tanggal Berangkat</div>
					<div class="form-input"><input type="text" class="input-xlarge" id="order-date"></div>
			</div>
			<button class="btn btn-large btn-block btn-primary" type="button">Pemesanan Cepat</button>
		</div>
		<!---
		<div class="aside-content">
			<div class="price-area">
				
					<h2 class="price">Rp 560.000</h2>
					<div class="top-label">Jumlah Traveller</div>
					<div class="form-input"><input type="text" id="tanggal"  class="input-xlarge"></div>
					<div class="top-label">Tanggal Berangkat</div>
					<div class="form-input"><input type="text" class="input-xlarge" id="order-date"></div>
			</div>
			<button class="btn btn-large btn-block btn-primary" type="button">Pemesanan Cepat</button>
		</div>
		---->
	</div>
	<div class="detail-content">

		<div class="top-artisan"><h1><?php echo  $objek->post_title;?></h1></div>
		<div class="trip-info">
			<div class="trip-details"><i class="icon-map-marker"></i> Malang, Indonesia</div>
			<div class="trip-details"><i class="icon-time"></i>1 Hari</div>
			<div class="trip-details"><i class="icon-tags"></i> Kegiatan Outdoor</div>
			<div class="trip-details"><i class="icon-heart"></i> 120 Komentar</div>
		</div>
		<div class="image-slider"></div>
	</div>

	<div class="detail-content-bottom">
		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a href="#home">Rincian Perjalanan</a></li>
			<li><a href="#profile">Itenerary</a></li>
			<li><a href="#messages">Rincian harga</a></li>
		
		</ul>
		<div class="tab-content">
  <div class="tab-pane active" id="home"><p><?php echo  $objek->content_1; ?></p></div>
  <div class="tab-pane" id="profile"><p><?php echo  $objek->content_2; ?></p></div>
  <div class="tab-pane" id="messages"><p><?php echo  $objek->content_3; ?></p></div>
  
</div>
	</div>


</div>

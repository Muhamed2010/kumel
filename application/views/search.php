<div class="container result">
	<div class="result-list">
		<?php foreach($objeks as $objek): ?>
		<div >
			<h1><?php echo $objek->post_title?></h1>
			<div><?php echo $objek->post_content?></div>
			<div><?php echo $objek->total_day?></div>
		</div>
	<?php endforeach; ?>
</div>
</div>
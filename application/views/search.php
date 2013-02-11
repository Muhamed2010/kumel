<div>
<?php foreach($objeks as $objek): ?>
	<div>
		<h1><?php echo $objek->post_title?></h1>
		<div><?php echo $objek->post_content?></div>
	</div>
<?php endforeach; ?>
</div>
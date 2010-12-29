<div class="padder">
	<h1>Előadások képei:</h1>
	<ul id="gal_list">
		<?php foreach ($plays as $play): ?>
		<li><a class="bigger" href="<?= base_url() ?>index.php/galeria/eloadas/<?= $play->ID ?>"><?= $play->author ?>: <?= $play->title ?></a></li>
		<?php endforeach ?>
	</ul>
</div>

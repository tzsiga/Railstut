<div class="padder">
	<h1>Előadások</h1>
	<ul id="ea_list">
		<?php foreach ($plays as $play): ?>
		<li>
			<img class="ea_thumb" src="<?= base_url() ?>application/views/img/slider/<?php print($thumbnails[$play->ID]); ?>" alt="" height="100" />
			<div class="ea_list_text">
				<div class="bigger"><a href="<?= base_url() ?>index.php/eloadas/index/<?= $play->ID ?>"><?= $play->author ?>: <?= $play->title ?></a></div>
				<div class="ea_text"><a href="<?= base_url() ?>index.php/eloadas/index/<?= $play->ID ?>"><?= substr($play->comment, 0, 350); ?>...</a></div>
			</div>
		</li>
		<?php endforeach ?>
	</ul>
</div>

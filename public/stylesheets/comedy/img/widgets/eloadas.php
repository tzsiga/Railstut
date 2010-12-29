<?php foreach ($plays as $play): ?>
<div class="padder">
	<h1><?= $play->author; ?>: <?= $play->title; ?> </h1>
	<img src="<?= base_url() ?>application/views/img/ea/<?= $pictures[0]->fileName ?>" id="ea_pic" />
	<a id="ea_pic_lnk" href="<?= base_url() ?>index.php/galeria/eloadas/<?= $play->ID ?>">További képek az előadásról</a>
	<div class="ea_text">	
		<?= $play->comment; ?>
	</div>
</div>
<div class="padder">
	<div class="ea_info">
		<p>Szereposztás:</p>
		<table>
			<?php foreach ($actings as $acting): ?>
			<tr><td><?= $acting->role; ?>:</td><td><?= $acting->actorName; ?></td></tr>
			<?php endforeach ?>
		</table>
	</div>
	<div class="ea_info" id="ea_table_left">
		<p>Időpontok:</p>
		<table>
			<?php foreach ($shows as $show): ?>
				<tr><td><?= strftime('%Y. %m. %d.', strtotime($show->dateTime)) ?> (<?= $show->day ?>) <?= strftime('%H:%M', strtotime($show->dateTime)) ?></td></tr>
			<?php endforeach ?>
		</table>
	</div>
</div>								
<?php endforeach ?>

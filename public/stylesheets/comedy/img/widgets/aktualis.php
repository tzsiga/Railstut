<div class="padder">
	<h1>Aktuális</h1>
	<div class="padder">
	<span class="bigger"><?=strftime('%Y', $now).'. '.$honapok[strftime('%m', $now) - 1] ?> havi műsor</span>
		<ul class="list">
				<?php foreach ($shows as $show): ?>
				<li><?= strftime('%Y. %m. %d.', strtotime($show->dateTime)) ?> (<?= $show->day ?>) <?= strftime('%H:%M', strtotime($show->dateTime)) ?> - <?= $titles[$show->playID] ?>
					<a class="right" href="<?= base_url() ?>index.php/eloadas/index/<?= $show->playID ?>">leírás</a></li>
				<?php endforeach ?>
		</ul>
		<br />
		<p>
			<a href="<?= base_url() ?>index.php/musor">Bővebben</a>
			<a class="right" href="<?= base_url() ?>index.php/oldal/jegyinformacio">Jegyinformáció</a>
		</p>
	</div>
</div>

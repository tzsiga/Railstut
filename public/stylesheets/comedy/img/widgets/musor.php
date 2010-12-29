<div class="padder">
	<h1>Műsor</h1>
	<div id="foobar2">
		<span class="date">
			<span class="previous2"> &lsaquo; Előző hónap </span> | <span class="next2"> Következő hónap &rsaquo; </span>
		</span>
		<div class="viewer2">
			<div class="reel2">
				<?php foreach ($shows as $month): ?>
					<div class="slide2">
						<span class="bigger"><?= strftime('%Y.', strtotime($month[0]->dateTime)) ?> <?= $honapok[strftime('%m', strtotime($month[0]->dateTime)) - 1] ?> havi műsor</span>
						<br />
						<ul class="list">
							<?php foreach ($month as $show): ?>
							<li><?= strftime('%Y. %m. %d.', strtotime($show->dateTime)) ?> (<?= $show->day ?>) <?= strftime('%H:%M', strtotime($show->dateTime)) ?> - <?= $titles[$show->playID] ?>
								<a class="right" href="<?= base_url() ?>index.php/eloadas/index/<?= $show->playID ?>">leírás</a></li>
							<?php endforeach ?>
						</ul>
						<br />
					</div>
				<?php endforeach ?>
			</div>
		</div>
		<p>
			<a class="right" href="<?= base_url() ?>index.php/oldal/jegyinformacio">Jegyinformáció</a>
		</p>
	</div>
	<script type="text/javascript">
		$('#foobar2').slidertron({
			speed:					'slow',
			viewerSelector:			'.viewer2',
			reelSelector:			'.viewer2 .reel2',
			slidesSelector:			'.viewer2 .reel2 .slide2',
			navPreviousSelector:	'.previous2',
			navNextSelector:		'.next2',
			advanceDelay:			'0',
			advanceResume:			'0',
		});						
	</script>
</div>

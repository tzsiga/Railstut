<div class="padder">
	<h1>Ajánló</h1>
</div>
<hr />
<div id="wrapper">
			<div id="foobar">
				<div class="previous"><img src="application/views/img/slider_left_btn.png" alt="" /></div> 
				<div class="viewer">
					<div class="reel">
						<?php foreach ($plays as $play): ?>
						<div class="slide"> <img src="application/views/img/slider/<?php print($thumbnails[$play->ID]); ?>" alt="" /> <div class="description"><div class="slider_title"><a href="<?= base_url() ?>index.php/eloadas/index/<?= $play->ID ?>"><?= $play->title ?></a></div><div class="slider_text"><?= substr($play->comment, 0, 410); ?>...</div></div></div>
						<?php endforeach ?>
					</div>
				</div>
				<div class="next"><img src="application/views/img/slider_right_btn.png" alt="" /></div>
			</div>
			<script type="text/javascript">
						$('#foobar').slidertron({
							speed:					'slow',
							viewerSelector:			'.viewer',
							reelSelector:			'.viewer .reel',
							slidesSelector:			'.viewer .reel .slide',
							navPreviousSelector:	'.previous',
							navNextSelector:		'.next',
							advanceDelay:			'8000',
							advanceResume:			'10000',
						});						
			</script>
</div>

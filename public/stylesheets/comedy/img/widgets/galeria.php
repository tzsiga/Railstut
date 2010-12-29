<div class="padder">
	<h1><?= $play->author ?>: <?= $play->title ?> című előadás képei</h1>
</div>
<div id="galery_page">
	<div id="container">
		<div id="gallery" class="content">
			<div id="controls" class="controls"></div>
			<div class="slideshow-container">
				<div id="loading" class="loader"></div>
				<div id="slideshow" class="slideshow"></div>
			</div>
			<div id="caption" class="caption-container"></div>
		</div>
		<div id="thumbs" class="navigation">
			<ul class="thumbs noscript">
				<?php foreach ($pictures as $pic): ?>
				<li>
					<a class="thumb" name="vmi" href="<?= base_url() ?>application/views/img/ea/small/<?= $pic->fileName ?>" title="">
						<img src="<?= base_url() ?>application/views/img/ea/small/<?= $pic->fileName ?>" alt="" />
					</a>
					<div class="caption">
						<div class="download">
							<a href="<?= base_url() ?>application/views/img/ea/<?= $pic->fileName ?>">Nagyítás</a>
						</div>
						<div class="image-title"><?= $pic->title ?></div>
					</div>
				</li>
				<?php endforeach ?>
			</ul>
		</div>
		<div style="clear: both;"></div>
	</div>
</div>
<div class="padder">
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			// We only want these styles applied when javascript is enabled
			$('div.navigation').css({'width' : '100px', 'float' : 'left'});
			$('div.content').css('display', 'block');

			// Initially set opacity on thumbs and add
			// additional styling for hover effect on thumbs
			var onMouseOutOpacity = 0.5;
			$('#thumbs ul.thumbs li').opacityrollover({
				mouseOutOpacity:   onMouseOutOpacity,
				mouseOverOpacity:  1.0,
				fadeSpeed:         'fast',
				exemptionSelector: '.selected'
			});
			
			// Initialize Advanced Galleriffic Gallery
			var gallery = $('#thumbs').galleriffic({
				delay:                     2500,
				numThumbs:                 10,
				preloadAhead:              10,
				enableTopPager:            true,
				enableBottomPager:         true,
				maxPagesToShow:            7,
				imageContainerSel:         '#slideshow',
				controlsContainerSel:      '#controls',
				captionContainerSel:       '#caption',
				loadingContainerSel:       '#loading',
				renderSSControls:          true,
				renderNavControls:         true,
				playLinkText:              'Diavetítés indítása',
				pauseLinkText:             'Diavetítés megállítása',
				prevLinkText:              '&lsaquo; Előző kép',
				nextLinkText:              'Következő kép &rsaquo;',
				nextPageLinkText:          '&rsaquo;',
				prevPageLinkText:          '&lsaquo;',
				enableHistory:             false,
				autoStart:                 false,
				syncTransitions:           true,
				defaultTransitionDuration: 900,
				onSlideChange:             function(prevIndex, nextIndex) {
					// 'this' refers to the gallery, which is an extension of $('#thumbs')
					this.find('ul.thumbs').children()
						.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
						.eq(nextIndex).fadeTo('fast', 1.0);
				},
				onPageTransitionOut:       function(callback) {
					this.fadeTo('fast', 0.0, callback);
				},
				onPageTransitionIn:        function() {
					this.fadeTo('fast', 1.0);
				}
			});
		});
	</script>
</div>

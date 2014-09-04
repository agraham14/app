<?php
	/* @var $wikiData WikiDataModel */
?>

<header id="MainPageHero" class="MainPageHero">
	<picture>
		<div class="upload">
			<img class="hero-image" src="<?=$wikiData->imagePath ?>" alt="<?= $wikiData->title ?>" >
			<input type="file" hidden="true">
		</div>
	</picture>
	<h1 contenteditable="true" class="hero-title" ><?= $wikiData->title ?></h1>
	<span contenteditable="true" class="hero-description"><?= $wikiData->description ?></span>
	<section id="WikiaSearchHeader" class="WikiaSearchHeader">
		<?=  F::app()->renderView('Search', 'Index', array('searchFormId' => 'WikiaSearch')) ?>
	</section>
</header>
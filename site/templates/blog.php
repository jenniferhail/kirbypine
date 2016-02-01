<?php snippet('header') ?>

<main class="main" role="main">

	<section>
		
		<?php foreach($page->children()->visible()->flip() as $article): ?>
			<h1><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h1>
			<time datetime="<?php echo $article->date('c') ?>" pubdate="pubdate" style="display: none;"><?php echo $article->date('F d, Y') ?></time>
		<?php endforeach ?>
		
	</section>

</main>

<?php snippet('footer') ?>
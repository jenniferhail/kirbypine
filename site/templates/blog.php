<?php snippet('header') ?>

<main class="main" role="main">

	<?php foreach($page->children()->visible()->flip() as $article): ?>

		<article>
			<h1><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h1>
			<p><?php echo $article->textOne()->excerpt(300, 'words') ?></p>
			<time datetime="<?php echo $article->date('c') ?>" pubdate="pubdate" style="display: none;"><?php echo $article->date('F d, Y') ?></time>

			<span class="readmore"><a href="<?php echo $article->url() ?>">Read More</a></span>
		</article>

	<?php endforeach ?>

</main>

<?php snippet('footer') ?>
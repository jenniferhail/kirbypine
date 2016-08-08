<?php snippet('header') ?>

<main class="main blog" role="main">

    <section class="project-details">
      <h1><?php echo date('Y') ?></h1>
	</section>

	<section>
		
		<?php foreach($page->children()->filterBy('year', '2016')->visible()->flip() as $article): ?>
			<h1><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h1>
			<time datetime="<?php echo $article->date('c') ?>" pubdate="pubdate"><?php echo $article->date('F jS') ?></time>
		<?php endforeach ?>
		
	</section>

</main>

<?php snippet('footer') ?>
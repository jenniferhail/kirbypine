<?php snippet('header') ?>

<main class="main blog" role="main">

	<article>

		<?php if(param('category')): // show category results ?>

		    <?php $category = urldecode(param('category'));
		    	  $articles = $pages->find('blog')
		                            ->children()
		                            ->visible()
		                            ->filterBy('category', $category, ',')
		                            ->filterBy('date', '<=', time())
		                            ->paginate(10);

		           echo '<section class="blog-category">' , $category , ' Posts</section>';
		    ?>

		    <?php foreach ($articles as $article): ?>

		    	<?php $category = $article->category()->html(); ?>
		      
				<!-- Display post content -->
				<section class="category-list">
					<h1 class="title"><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h1>
				</section>

		    <?php endforeach ?>

		<?php else: // show latest articles ?>

		    <?php $articles = $pages->find('blog')
		                            ->children()
		                            ->visible()
		                            ->filterBy('date', '<=', time())
		                            ->paginate(10);
		    ?>

		    <?php foreach ($articles as $article): ?>

		    	<?php $category = $article->category()->html(); ?>
		      
				<!-- Display post content -->
				<section class="blog-post text">
					<h1 class="title"><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h1>
					<span class="category"><a href="<?php echo url('blog/' . 'category:' . urlencode($category)) ?>"><?php echo $category ?></a></span>
					<?= $article->text()->excerpt(300) ?>
				</section>

		    <?php endforeach ?>

		<?php endif ?>

	</article>

</main>

<?php snippet('footer') ?>
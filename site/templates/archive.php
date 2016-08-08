<?php snippet( 'header') ?>

<main class="main blog" role="main">

  <article>

    <?php $allPosts = $pages->get('posts')
      ->children()
      ->visible()
      ->filter(function($child) {
         return $child->date('Y') === date('Y');
      })->flip() ?>

    <section class="project-details">
      <h1><?php echo date('Y') ?></h1>
    </section>

    <?php foreach ($allPosts as $post): ?>
      
      <!-- Display post content -->
      <section>
        <h1><a href="<?php echo $post->url() ?>"><?php echo $post->title()->html() ?></a></h1>
        <time datetime="<?php echo $post->date('c') ?>" pubdate="pubdate"><?php echo $post->date('F jS') ?></time>
      </section>

    <?php endforeach ?>

  </article>

</main>

<?php snippet( 'footer') ?>

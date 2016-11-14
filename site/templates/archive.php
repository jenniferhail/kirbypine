<?php snippet( 'header') ?>

<main class="main blog" role="main">

  <article>

    <?php $allPosts = $pages->get('posts')
      ->children()
      ->visible()
      ->flip() ?>

<!--     <section class="project-details">
      <h1><a href="">View Archive</a></h1>
    </section> -->

    <?php foreach ($allPosts as $post): ?>
      
      <!-- Display post content -->
      <section class="blog-post text">
        <h1><a href="<?php echo $post->url() ?>"><?php echo $post->title()->html() ?></a></h1>
        <time datetime="<?php echo $post->date('c') ?>" pubdate="pubdate"><?php echo $post->date('F jS, Y') ?></time>
        <?= $post->text()->kirbytext() ?>
      </section>

    <?php endforeach ?>

  </article>

</main>

<?php snippet( 'footer') ?>

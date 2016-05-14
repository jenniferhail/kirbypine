<div class="portfolio">
  <?php foreach(page('home')->children()->visible() as $project): ?>
  <div class="project">
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
      <caption><?php echo $project->title()->html() ?></caption>
      <a href="<?php echo $project->url() ?>"></a>
    <?php endif ?>
  </div>
  <?php endforeach ?>
</div>
<script type="text/javascript">
  var w_width = $(document).width();
  var projects_height = $(".portfolio").height();
  if (w_width >= 768) {
    $(".portfolio-ctn").css("min-height" , projects_height);
  }
</script>

<div class="portfolio">
  <?php foreach(page('home')->children()->visible() as $project): ?>
  <div class="project">
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
      <a href="<?php echo $project->url() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>"></a>
      <div class="caption"><p><?php echo $project->Tags() ?></p></caption></div>
      <div class="projectTitle"><a class="hvr-underline-from-left" href="<?php echo $project->url() ?>"><h1><?php echo $project->title()->html() ?></h1></a></div>
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

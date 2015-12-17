<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/style.css') ?>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script type="text/javascript"> 
     $(document).ready(function() {
        $('#menubtn').click(function(m) {
          m.preventDefault();
          m.stopPropagation();
          $('#menuopen').fadeToggle();
          return false;
         });
        $('#menuopen').click(function(m) {
          m.stopPropagation();
        });
     }); 
  </script>

</head>
<body>

<div class="wrap">
  <div id="fixed-left-text">
    <div class="fixed-left-text">
      <a href="#" id="menubtn"><span>Menu —</span></a>
    </div>
  </div>
  <header id="menuopen" class="header cf" role="banner" style="display: none;">
    <div>
      <?php snippet('menu') ?>
    </div>
  </header>
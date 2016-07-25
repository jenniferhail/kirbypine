<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/style.css') ?>

  <!-- custom css -->
  <?php foreach($page->files()->filterBy('extension', 'css') as $css): ?>
  <?php echo css($css->url()) ?>
  <?php endforeach ?>

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script type="text/javascript"> 

    $(document).ready(function(){
      //Loading
      $(".main").hide(0).delay(200).fadeIn(500);
      $("#fixed-left-text").hide(0).delay(500).fadeIn(500);
    });

     $(document).ready(function() {
        //Menu
        $('#menubtn, .white-overlay').click(function(m) {
          m.preventDefault();
          m.stopPropagation();
          $('#menuopen').fadeToggle("slow");
          $(".white-overlay").fadeToggle("slow");
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
  <header id="menuopen" class="header cf" role="banner">
    <?php snippet('menu') ?>
  </header>
  <div id="fixed-left-text">
    <div class="fixed-left-text">
      <a href="#" id="menubtn"><span>—</span></a>
    </div>
  </div>
  <div class="white-overlay"></div>
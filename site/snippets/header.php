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
          $('header').addClass('full-height');
          return false;
         });
        $('#menuopen').click(function(m) {
          m.stopPropagation();
        });
        // $(document).click(function() {
        //   $('#menuopen').fadeToggle();
        //   $('.main').toggleClass('fade');
        // }); 
     });
  </script>

</head>
<body>

<div class="wrap">

  <header class="header cf" role="banner">
    <div id="fixed-left-text">
      <div class="fixed-left-text">
        <a href="#" id="menubtn"><span>Menu —</span></a>
      </div>
    </div>
    <div id="menuopen" class="fade" style="display: none;">
      <?php snippet('menu') ?>
    </div>
<!--     <a class="logo left" href="<?php echo url() ?>">
      <img src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
    </a> -->
  </header>
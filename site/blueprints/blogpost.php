<?php if(!defined('KIRBY')) exit ?>

title: Blog Post
pages: false
files: true
fields:
  title:
    label: Post Title
    type:  text
  category:
    label: Category
    type:  tags  
  text:
    label: Content
    type: textarea
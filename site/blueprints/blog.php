<?php if(!defined('KIRBY')) exit ?>

title: Blog
pages:
	template: 
		- article-default
		- article-wide
		- article-video
files: false
fields:
  title:
    label: Title
    type:  text
  description:
    label: Page Description
    type:  text 
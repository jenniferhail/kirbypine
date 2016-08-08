<?php if(!defined('KIRBY')) exit ?>

title: Post
pages:false
files:
  sortable:true
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type: date
    default: today
    width: 1/2
  author:
    label: Author
    type: user
    width: 1/2
  coverimage:
    label: Cover Image
    type: select
    options: images
    width: 1/2
  category:
    label: Category
    type: select
    width: 1/2
    options:
      design: Design
      business: Business
      inspiration: Inspiration
      travel: Travel
      adventure: Adventure
  tags:
    label: Tags
    type: tags
    lowercase: true
  text:
    label: Text
    type: textarea
    requiered: true



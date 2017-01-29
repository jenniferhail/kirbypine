<?php if(!defined('KIRBY')) exit ?>

title: Wide Post
pages: false
files:
  sortable: true
options:
  template: true
fields:
  title:
    label: Title
    type:  text
  description:
    label: Description
    type: text
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
      Design: Design
      Studio: Studio
      Business: Business
      Clarity: Clarity
      Travel: Travel
  text:
    label: Text
    type: textarea
    requiered: true



<?php if(!defined('KIRBY')) exit ?>

title: Video Post
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
  link:
    label: Video Url
    type: text
  text:
    label: Text
    type: textarea
    requiered: true
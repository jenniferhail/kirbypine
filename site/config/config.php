<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', '99e1a3f47728dc66f93cae7375868dca');
c::set('license-shopkit', ''); // put your Shopkit license key here

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('markdown.extra', true);

/*
---------------------------------------
Languages
--------------------------------------

*/

c::set('language.detect', true);
c::set('languages', array(
   array(
      'code'    => 'en',
      'name'    => 'English',
      'locale'  => 'en_US',
      'default' => true,
      'url'     => '/'
   )
));

/*
---------------------------------------
User roles
--------------------------------------

*/

c::set('roles', array(
  array(
    'id'      => 'admin',
    'name'    => 'Admin',
    'default' => true,
    'panel'   => true
  ),
  array(
    'id'      => 'editor',
    'name'    => 'Editor',
    'panel'   => true
  ),
  array(
    'id'      => 'client',
    'name'    => 'Client',
    'panel'   => false
  ),
  array(
    'id'      => 'customer',
    'name'    => 'Customer',
    'default' => true,
    'panel'   => false
  )
));

/*

---------------------------------------
Routes
--------------------------------------

*/

c::set('routes', array(
  array(
    'pattern' => 'login',
    'method' => 'POST',
    'action'  => function() {
      if($user = site()->users()->findBy('email',get('email')) and $user->login(get('password'))) {
        return go('/');
      } else {
        return go('/?login=failed');
      }
    }
  ),
  array(
    'pattern' => 'logout',
    'action'  => function() {
      if($user = site()->user()) {
        s::start();
        s::set('cart', array()); // Empty the cart
        $user->logout();
      }
      return go('/');
    }
  ),
  array(
    'pattern' => 'shop/cart/empty',
    'action' => function() {
      s::start();
      s::set('cart', array()); // Empty the cart
      // Send along a status message
      return go('shop/cart');
    }
  ),
  array(
    'pattern' => 'shop/cart/process',
    'method' => 'POST',
    'action' => function() {
      snippet('cart.process.post');
    }
  ),
  array(
    'pattern' => 'shop/cart/process',
    'method' => 'GET',
    'action' => function() {
      snippet('cart.process.get');
    }
  ),
  array(
    'pattern' => 'shop/cart/notify',
    'method' => 'POST',
    'action' => function() {
      snippet('payment.success.paypal');
      return true;
    }
  ),
  array(
    'pattern' => 'shop/cart/return',
    'method' => 'POST',
    'action' => function() {
      $cart = Cart::getCart();
      $cart->emptyItems();
      return go('shop/orders?txn_id='.get('custom'));
    }
  ),
  array(
    'pattern' => '(:all)/shop/orders/pdf',
    'method' => 'POST',
    'action' => function($lang) {
      snippet('orders.pdf', ['lang' => $lang]);
      return true;
    }
  ),
  array(
    // Multilang slideshow
    'pattern' => '(:any)/shop/(:all)/(:any)/slide',
    'action' => function($lang,$category,$slug) {
      site()->visit($category, $lang);
      return array('shop/'.$category, array('slidePath' => 'shop/'.$category.'/'.$slug));
    }
  ),
  array(
    // Default lang slideshow
    'pattern' => 'shop/(:all)/(:any)/slide',
    'action' => function($category,$slug) {
      site()->visit($category, 'en');
      return array('shop/'.$category, array('slidePath' => 'shop/'.$category.'/'.$slug));
    }
  ),
));
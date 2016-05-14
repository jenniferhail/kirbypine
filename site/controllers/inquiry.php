<?php
return function($site, $pages, $page) {
  $alert = null;
  if(get('submit')) {
    $data = array(
      'fname'  => get('fname'),
      'lname'  => get('lname'),
      'email' => get('email'),
      'website'  => get('website'),
      'instagram'  => get('instagram'),
      'budget' => get('budget'),
      'message'  => get('message')
    );
    $rules = array(
      'fname'  => array('required'),
      'lname'  => array('required'),
      'email' => array('required', 'email'),
      'website'  => array('required'),
      'budget'  => array('required'),
      'message'  => array('required', 'min' => 3, 'max' => 5000),
    );
    $messages = array(
      'fname'  => 'Please enter a valid first name',
      'lname'  => 'Please enter a valid last name',
      'email' => 'Please enter a valid email address',
      'website'  => 'Please enter a website url',
      'budget'  => 'Please enter your budget',
      'message'  => 'Please enter a message between 3 and 5000 characters'
    );
    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    // the data is fine, let's send the email
    } else {
      // create the body from a simple snippet
      $body  = snippet('inquirymail', $data, true);
      // build the email
      $email = new Inquiry(array(
        'to'      => 'jennifer.hail08@gmail.com',
        'from'    => 'admin@bypine.co',
        'subject' => 'New Inquiry',
        'replyTo' => $data['email'],
        'body'    => $body
      ));
      // try to send it and redirect to the
      // thank you page if it worked
      if($email->send()) {
        go('project-planner/thank-you');
      // add the error to the alert list if it failed
      } else {
        $alert = array($email->error());
      }
    }
  }
  return compact('alert');
};
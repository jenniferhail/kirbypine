<?php
return function($site, $pages, $page) {
  $alert = null;
  if(get('submit')) {
    $data = array(
      'fname'  => get('fname'),
      'lname' => get('lname'),
      'businessname' => get('businessname'),
      'businessurl'  => get('businessurl'),
      'telephone'  => get('telephone'),
      'email'  => get('email'),
      'timeline'  => get('timeline'),
      'referral'  => get('referral'),
      'message'  => get('message'),
      'logo'  => get('logo'),
      'collateral'  => get('collateral'),
      'webdesign'  => get('webdesign'),
      'webdev'  => get('webdev'),
      'artdirection'  => get('artdirection'),
      'marketing'  => get('marketing'),
      'coffee'  => get('coffee'),
      'checklists'  => get('checklists'),
      'idealday'  => get('idealday')
    );
    $rules = array(
      'fname'  => array('required'),
      'lname'  => array('required'),
      'businessname'  => array('required'),
      'businessurl'  => array('required'),
      'email' => array('required', 'email'),
      'timeline'  => array('required'),
      'referral'  => array('required'),
      'message'  => array('required', 'min' => 3, 'max' => 3000),
    );
    $messages = array(
      'fname'  => 'Please enter a valid first name.',
      'lname'  => 'Please enter a valid last name.',
      'businessname'  => 'Please enter a valid business name.',
      'businessurl'  => 'Please enter a valid business website.',
      'email' => 'Please enter a valid email address.',
      'timeline'  => 'Please enter information about your timeline.',
      'referral'  => 'Please select a referral option.',
      'message'  => 'Please enter a message between 3 and 3000 characters'
    );
    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    // the data is fine, let's send the email
    } else {
      // create the body from a simple snippet
      $body  = snippet('contactmail', $data, true);
      // build the email
      $email = new Email(array(
        'to'      => 'jennifer.hail08@gmail.com',
        'from'    => 'admin@bypine.co',
        'subject' => 'New Project Inquiry from ['name']',
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
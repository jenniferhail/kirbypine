<?php

return function($site, $pages, $page) {

    $form = uniform('contact-form', [
        'required' => [
            'fname'  => '',
            'lname'  => '',
            '_from' => 'email'
        ],
        'actions' => [
            [
                '_action' => 'email',
                'to'      => 'hello@bypine.co',
                'sender'  => 'admin@bypine.co',
                'subject' => 'New Inquiry!'
            ]
        ]
    ]);

    if ($form->successful()) go('contact/thank-you');

    return compact('form');
};
<?php

return function($site, $pages, $page) {

    $form = uniform('forest-form', [
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
                'subject' => 'New Forest Member Application!'
            ]
        ]
    ]);

    if ($form->successful()) go('the-forest/apply/thank-you');

    return compact('form');
};
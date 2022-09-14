<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Subscription',
    'email_message' => 'Thank you for your subscription.',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'feedback@mythbuster.com',
    'to' => 'maliktushar3316@gmail.com'
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'email',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'email\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>
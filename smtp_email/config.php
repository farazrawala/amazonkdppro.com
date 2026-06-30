<?php

/**
 * SMTP Configuration for Amazon Publishers
 * 
 * This file contains all SMTP settings for the email functionality.
 * Update these values as needed for your environment.
 */

return [
    'smtp' => [
        'host' => 'mail.amazon-publishers.co',
        'username' => 'leads@amazon-publishers.co',
        'password' => 'leads@amazon-publishers.co',
        'port' => 465,
        'encryption' => 'ssl', // 'ssl' for port 465, 'tls' for port 587
        'timeout' => 30,
        'debug' => false // Set to true for debugging
    ],
    'from' => [
        'email' => 'leads@amazon-publishers.co',
        'name' => 'Amazon Publishers'
    ],
    'defaults' => [
        'is_html' => true,
        'charset' => 'UTF-8'
    ]
];

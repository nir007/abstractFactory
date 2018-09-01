<?php
include 'bootstrap.php';

use kernel\factories\ProduceFactory;

$modelUser = ProduceFactory::get('Model_Order');
$serviceMail = ProduceFactory::get('Service_Mail');

var_dump($modelUser->findAll());
var_dump($serviceMail->send());
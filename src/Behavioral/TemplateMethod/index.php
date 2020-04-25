<?php

declare(strict_types = 1);

namespace app\Behavioral\State;

use app\Behavioral\TemplateMethod\Classes\Facebook;
use app\Behavioral\TemplateMethod\Classes\Twitter;

require '../../../vendor/autoload.php';

$network = new Facebook('test_username', 'test_password');
$network->post('Test message');

$network = new Twitter('test_username', 'test_password');
$network->post('Test message');
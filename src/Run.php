<?php

namespace App;

require dirname(__DIR__) . '/vendor/autoload.php';

$contest = new Contest();
print_r($contest->getUserMaxPointByUserIdAndMonth(new \DateTime('2023-01'), 'user_1'));
print_r($contest->getUsersMaxPointsByMonth(new \DateTime('2023-01')));
print_r($contest->getUsersMaxPointsByMonth(new \DateTime('2023-02')));
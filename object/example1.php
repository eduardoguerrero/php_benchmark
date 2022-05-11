<?php

include_once __DIR__ . '/../timeExecution.php';
$timeStart = timeExecution::start();

include_once "User.php";

$users = [];
for ($i = 0; $i < 1000000; $i++) {
    $user = new User();
    $user
        ->setFirstname('name' . $i)
        ->setLastname('lastname' . $i)
        ->setAge($i);
    $users[] = $user;
}

// Do something with $users variable
foreach ($users as $user) {
    if ($user->getAge() === 1000) {
        break;
    }
}

timeExecution::end($timeStart);

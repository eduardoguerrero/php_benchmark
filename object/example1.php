<?php

include_once __DIR__ . '/../timeExecution.php';
$timeStart = timeExecution::start();
include_once "User.php";

function getUser()
{
    $users = [];
    for ($i = 0; $i < 1000000; $i++) {
        $user = new User();
        $user
            ->setFirstname('name' . $i)
            ->setLastname('lastname' . $i)
            ->setAge($i);
        $users[] = $user;
    }

    return $users;
}

// To do something with $users variable
$users = getUser();
foreach ($users as $user) {
    if ($user->getAge() === 1000000) {
        break;
    }
}

timeExecution::end($timeStart);

<?php

include_once __DIR__ . '/../timeExecution.php';
$timeStart = timeExecution::start();

// Creates on-the-fly anonymous class
$userModel = new class {
    /** @var string */
    private $firstname;

    /** @var string */
    private $lastname;

    /** @var string */
    private $age;

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }
};

function getUser($userModel)
{
    $users = [];
    for ($i = 0; $i < 1000000; $i++) {
        $userModel
            ->setFirstname('name' . $i)
            ->setLastname('lastname' . $i)
            ->setAge($i);
        $users[] = $userModel;
    }

    return $users;
}

$users = getUser($userModel);
// To do something with $users variable
foreach ($users as $user) {
    if ($user->getAge() >= 1000000) {
        break;
    }
}

timeExecution::end($timeStart);

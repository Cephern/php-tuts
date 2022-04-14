<?php

class User
{
    private $email;
    private $name;

    public function __constructor($name, $email)
    {
        $this->email = $email;
        $this->name = $name;
    }

    public function login()
    {
        echo $this->name . ' logged in';
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (is_string($name) && strlen($name) > 1) {
            $this->name = $name;
            return "name has been updated to $this->name";
        } else {
            return 'not a valid name';
        }
    }
}

$user = new User('Max', 'max@gmail.com');

echo $user->getName();

echo $user->setName('Maks') . '<br>';

echo $user->getName();

<?php

require_once "Validations.php";
require_once "User.php";
$errors = []; 


$user = new User("Omar Hashem", "oamrhashem20051310@gmail.com", "123456789", 123, "123 Main St");



if ($user->requireVal($user->getName())) {
    $errors[] = "Name is required.";
}

if ($user->minLength($user->getName(), 3)) {
    $errors[] = "Name must be at least 3 characters long.";
}

if ($user->maxLength($user->getName(), 50)) {
    $errors[] = "Name must be less than 50 characters long.";
}

if (!$user->email($user->getEmail())) {
    $errors[] = "Invalid email address.";
}

if ($user->minLength($user->getPassword(), 8)) {
    $errors[] = "Password must be at least 8 characters long.";
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
}else{
    echo $user->getName() . "<br>";
    echo $user->getEmail() . "<br>";
    echo $user->getPassword() . "<br>";
}


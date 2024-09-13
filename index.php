<?php

require_once "Product.php";
require_once "Book.php";
require_once "Baby_car.php";
require_once "Gift.php";

$book = new Book("PHP for Beginners", 80, "A guide to PHP.", "php.jpg", ["Penguin", "HarperCollins"], "John Doe", "Blue", "Omar");
echo $book->uploadImage();
echo $book->choosePublisher("Penguin");

echo "<hr>";

$babyCar = new Baby_car("Kids Racing Car", 50, "A racing car for kids.", "car.jpg", "2-5 years", 10, ["Plastic", "Metal"]);
echo $babyCar->uploadImage();

echo "<hr>";

$gift = new Gift("Watch", 150, "A premium wrist watch", "watch.jpg", "Birthday", "Friend", "Accessories");
echo $gift->uploadImage(); 
echo $gift->calcPrice(); 
echo $gift->chooseRecipient("Friend");
echo $gift->displayCategory();
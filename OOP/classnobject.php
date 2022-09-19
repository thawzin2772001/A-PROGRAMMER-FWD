<?php

class Drinks
{
    var $name = 'shark';
    var $price = 100;

    function setPrice($price){
        $this->price = $price;
    }

    function getPrice(){
        echo $this->price."<br/>";
    }

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        echo $this->name."<br/>";
    }
}

$somedrink = new Drinks();
// $somedrink->setName('coke');
// $somedrink->setPrice(100);

// $somedrink->getPrice();
echo $somedrink->price;
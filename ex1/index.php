<?php
    class Books {
        /* Member variables */
        var $price;
        var $title;
        /* Constructor */
        function __construct($_title, $_price) {
            $this->title = $_title;
            $this->price = $_price;
        }
        function getPrice(){
            echo $this->price ."<br/>";
        }
        function getTitle(){
            echo $this->title ." <br/>";
        }
        function sayHello(){
            echo "Hello<br>";
        }
    }
    $java = new Books("OOP with Java", 10);
    $ios = new Books("Advanced iOS Programming", 15);
    $game = new Books("Game Programming", 7);
    /* Get those set values */
    $java->getTitle();
    $java->getPrice();
    $ios->getTitle();
    $ios->getPrice();
    $game->getTitle();
    $game->getPrice();
    $game->sayHello();
?>
<?php


class Controller
{
    private $_f3;
    private $_db;

    // private $_db;

    function __construct($f3, $db)
    {
        $this->_f3 = $f3;
        $this->_db = $db;
    }

    function homePage()
    {
        $this->_f3->set("x", 15);

        $this->_f3->set("arr", array(1,2,3));

        $this->_f3->set("foodTypes", $this->_db->getAllFoodTypes());

        var_dump($this->_db->getAllFoodTypes());

        $view = new Template();
        echo $view->render("views/home.html");
    }

    function page23()
    {
        $view = new Template();
        echo $view->render("views/page23.html");
    }
}
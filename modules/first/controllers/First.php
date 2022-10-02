<?php
require_once('../modules/welcome/controllers/Welcome.php');

class First extends Welcome
{

    function test()
    {
        $welcome = new Welcome;
        $welcome->_send_payment(9);
    }


    function test2()
    {
        
        $this->view('test');
    }


    function greeting()
    {
        echo '<h1>Hello, world!</h1>';
    }

    function cost()
    {
        $price = 100;
        echo '<h1>The item price is ' . $price . '</h1>';

        //calculate the tax by calling the 'second' module
        $this->module('second');
        $tax = $this->second->_calc_tax($price);
        echo '<h2>The tax for this item is ' . $tax . '</h2>';

        //finally, let's calculate the total cost
        $total_cost = $price + $tax;
        echo '<h2>The total cost is ' . $total_cost . '</h2>';
    }

}

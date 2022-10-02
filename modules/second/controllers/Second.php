<?php
class Second extends Trongate
{
    /*function index () {
        $data['view_module'] = 'second';
        $this->view('second', $data);*/
    /* Uncomment the lines below, 
         * Change the template method name, 
         * Remove lines above, if you want to load to the template
         */
    //$data['view_module'] = 'second';
    //$data['view_file'] = 'second';
    //$this->template('template method here', $data);
    /*  }*/


    function index()
    {
        echo '<h1>The second module totally works!</h1>';
    }


    function _calc_tax(float $price): float
    {
        $tax = $price * 0.2;
        return round($tax, 2);
    }

    function display_cities(string $first_name)
    {
        $data['first_name'] = $first_name;
        $data['cities'] = array('Glasgow', 'Szeged', 'Paris', 'London', 'New York');
        $this->view('cities', $data);
    }
}

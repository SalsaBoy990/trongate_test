<?php
class Third extends Trongate
{
    function __construct()
    {
        parent::__construct();
        $this->parent_module = 'first';
        $this->child_module = 'third';
    }

    function hello()
    {
        echo '<h1>Hello from the third module!</h1>';
    }


    function __destruct()
    {
        $this->parent_module = '';
        $this->child_module = '';
    }
}

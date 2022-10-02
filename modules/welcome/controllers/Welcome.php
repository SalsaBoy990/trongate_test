<?php
class Welcome extends Trongate {

    public function index() {
        /*echo BASE_URL;
        echo segment(1);
        $this->view('welcome');*/

        $data['source_url'] = 'https://en.wikipedia.org/wiki/Rock_music';
        $data['page_headline'] = 'Rock Music';
        //$this->view('rock', $data);

      $output = $this->view('rock', $data, true);
        $output = str_replace('Rock Music', 'Rock and Roll Music', $output);
        //echo $output;
        echo htmlentities($output);

        /*echo 'hello world';
        die();*/
    }

    function greetingFirst($name) {
        // $name = segment(3);
        echo 'hello '. urldecode($name);
    }

    //private function send_payment($user_id) {
    //protected function send_payment($user_id) {
    protected function _send_payment($user_id) {
        settype($user_id, 'int');

        if ($user_id > 0) {
            echo 'now sending payment to '.$user_id;
        }
    }

    function test() {
        $user_id = 7;
        //$this->send_payment($user_id);
        $this->_send_payment($user_id);
    }


    function rock()
    {
        $data['page_headline'] = 'Rock Music';
        $data['source_url'] = 'https://en.wikipedia.org/wiki/Rock_music';

        $data['view_module'] = 'welcome';
        $data['view_file'] = 'rock';
        $this->template('public', $data);
    }

    function classical()
    {
        $data['page_headline'] = 'Classical Music';
        $data['source_url'] = 'https://en.wikipedia.org/wiki/Classical_music';

        $data['view_module'] = 'welcome';
        $data['view_file'] = 'classical';
        $this->template('public', $data);
    }

    function jazz()
    {
        $data['page_headline'] = 'Jazz Music';
        $data['source_url'] = 'https://en.wikipedia.org/wiki/Jazz';

        $data['view_module'] = 'welcome';
        $data['view_file'] = 'jazz';
        $this->template('public', $data);
    }



    function custom()
    {
        $data['page_headline'] = 'Rock Music';
        $data['source_url'] = 'https://en.wikipedia.org/wiki/Rock_music';
        $data['view_module'] = 'welcome';
        $data['view_file'] = 'rock';
        $this->template('custom', $data);
    }

}
<?php
class Guitar extends Trongate {

    function information()
    {
        $data['page_title'] = 'Guitars';
        $data['guitar_title'] = 'Fender Telecaster';
        $data['view_module'] = 'guitar';
        $data['view_file'] = 'information';
        $this->template('public', $data);
    }

}
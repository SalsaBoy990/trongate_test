<?php
class Tasks extends Trongate
{

    function manage()
    {
        $data['view_module'] = 'tasks';
        $data['view_file'] = 'manage';
        $data['tasks'] = $this->model->get('id');

        $this->template('custom', $data);
    }


    function create()
    {
        
        $update_id = segment(3);
        settype($update_id, 'int');
        
        $submit = post('submit');
        
        if ($update_id > 0 && $submit === '') {
            $data = $this->_get_data_from_db($update_id);
        } else {
            $data = $this->_get_data_from_post();
        }
        
        $data['form_location'] = str_replace('/create', '/submit', current_url());
        $data['page_headline'] = ($update_id > 0) ? 'Update Task' : 'Create New Task';
        $data['view_file'] = 'create';

        $this->template('custom', $data);
    }


    function submit()
    {
        $this->validation_helper->set_rules('task_title', 'task title', 'required|min_length[3]');
        $result = $this->validation_helper->run();

        if ($result == true) {

            $update_id = segment(3);
            settype($update_id, 'int');

            // PHP's strip_tags() function removes (less than and greater than) tags along with any characters that
            // appear inside tags. Using strip_tags() makes it impossible for users to inject javascript code into your webpages.
            $data['task_title'] = post('task_title', true);

            if ($update_id > 0) {
                $this->model->update($update_id, $data, 'tasks');
                set_flashdata('The task was successfully updated');
            } else {
                $this->model->insert($data, 'tasks');
                set_flashdata('The new task was successfully created');
            }

            redirect('tasks/manage');
        } else {
            //validation_errors();
            $this->create();
        }
    }

    function _get_data_from_db($update_id)
    {
        $record_obj = $this->model->get_where($update_id, 'tasks');
        $data = (array) $record_obj;
        return $data;
    }

    function _get_data_from_post()
    {
        $data['task_title'] = post('task_title', true);
        return $data;
    }
}

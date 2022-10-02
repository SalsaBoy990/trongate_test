<?php
class Students extends Trongate
{


    function index()
    {
        $students = $this->model->get();
        json($students);
    }

    function show(int $id)
    {
        $id = settype($id, 'int');

        $student = $this->model->get_where(6);
        json($student);
    }


    function create()
    {
        $data['first_name'] = 'Polly';
        $data['last_name'] = 'Stevenson';
        $data['email_address'] = '[email protected]';

        $student_id = $this->model->insert($data, 'students');
        echo $student_id;
    }

    function update($id)
    {
        $id = settype($id, 'int');
        $data['first_name'] = 'Tiesto';

        $this->model->update(4, $data, 'students');
    }

    function delete($id)
    {
        settype($id, 'int');

        $this->model->delete($id, 'students');
    }

    /*
     Custom queries

     $params['last_name'] = 'Jones';
Then, declare an SQL query string, as normal, but with the placeholder of :first_name where you would normally have a varable. For example,

$sql = 'select * from students where last_name = :last_name';
Finally, load up the model and invoke the 'query_bind' method.

$rows = $this->model->query_bind($sql, $params, 'object');
    */
}

<h1><?= $page_headline ?></h1>

<?php
validation_errors();


//echo form_open('tasks/submit');
echo form_open($form_location);

echo form_label('Task Title');
echo '<br>';
echo form_input('task_title', $task_title);
echo '<br><br>';
echo form_submit('submit', 'Submit');

echo form_close();
?>
<h1>Manage Tasks</h1>

<?= flashdata() ?>
<p><?= anchor('tasks/create', 'Create New Task') ?></p>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Task Title</th>
    </tr>
    <?php foreach ($tasks as $task) { ?>
        <tr>
            <td><?= $task->id ?></td>
            <td><?= anchor('tasks/create/' . $task->id, $task->task_title) ?></td>
        </tr>
    <?php } ?>
</table>





<style>
    /* Link to the tasks/assets/css/custom.css */
    @import url('<?= BASE_URL ?>tasks_module/css/custom.css');

    body {
        background-color: rgb(251, 178, 165);
    }
</style>

<!-- Link to the assets/js/custom.js -->
<script src="<?= BASE_URL ?>tasks_module/js/custom.js"></script>
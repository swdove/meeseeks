<div class="col-xs-9">
<h1><?php echo $task->task_name; ?></h1>
<p><b>Project: </b><?php echo $project_name; ?></p>
<p><b>Created: </b><?php echo $task->date_created;  ?></p>
<p><b>Due: </b><?php echo $task->due_date;  ?></p>
<div style="background-color: #fff; padding: 20px; border-radius: 6px; box-shadow: 0px 0px 3px 1px;"><?php echo $task->task_body ?></div>

<!-- <table class="table table-hover">
  <thead>
    <tr>
      <th>
        Task Name
      </th>
      <th>
        Description
      </th>
      <th>
        Date Created
      </th>
      <?php  if($task->status == 0): ?>
        <th class="text-center">Mark Complete</th>
      <?php else: ?>
        <th class="text-center">Mark Incomplete</th>
      <?php endif; ?>
    </tr>
  </thead>
  <tbody>
      <tr>
        <td>
          <div class="task-name">
            <?php echo $task->task_name; ?>
          </div>
          <div class="task-actions">
            <a href="<?php echo base_url(); ?>tasks/edit/<?php echo $task->id; ?>">Edit</a> |
            <a href="<?php echo base_url(); ?>tasks/delete/<?php echo $task->project_id; ?>/<?php echo $task->id; ?>">Delete</a>
          </div>
        </td>
        <td><?php echo $task->task_body; ?></td>
        <td><?php echo $task->date_created; ?></td>
        <?php  if($task->status == 0): ?>
              <td class="text-center"><a href="<?php echo base_url(); ?>tasks/mark_complete/<?php echo $task->id; ?>"><span class="glyphicon glyphicon-ok"></a></td>
        <?php else: ?>
              <td class="text-center"><a href="<?php echo base_url(); ?>tasks/mark_incomplete/<?php echo $task->id; ?>"><span class="glyphicon glyphicon-remove"></a></td>
        <?php endif; ?>
      </tr>
  </tbody>
</table> -->
</div>
<div class="col-xs-3 pull-right">
<ul class="list-group">
  <h4>Task Actions</h4>
  <li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/edit/<?php echo $task->id ?>">Edit Task</a></li>
  <li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/delete/<?php echo $task->project_id; ?>/<?php echo $task->id; ?>">Delete Task</a></li>
  <li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/mark_complete/<?php echo $task->id; ?>">Mark Complete</a></li>
  <li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/mark_incomplete/<?php echo $task->id; ?>">Mark Incomplete</a></li>

</ul>
</div>

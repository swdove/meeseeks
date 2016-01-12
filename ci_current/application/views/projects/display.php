<p class="bg-info">
  <?php if($this->session->flashdata('task_created')): ?>
    <?php echo $this->session->flashdata('task_created') ?>
  <?php endif; ?>
  <?php if($this->session->flashdata('task_updated')): ?>
    <?php echo $this->session->flashdata('task_updated') ?>
  <?php endif; ?>
  <?php if($this->session->flashdata('task_deleted')): ?>
    <?php echo $this->session->flashdata('task_deleted') ?>
  <?php endif; ?>
  <?php if($this->session->flashdata('task_completed')): ?>
    <?php echo $this->session->flashdata('task_completed') ?>
  <?php endif; ?>
</p>

<div class="col-xs-9">
  <h1><?php echo $project_data->project_name; ?></h1>
  <p>Date Created: <?php echo $project_data->date_created; ?></p>
  <h3>Description</h3>
  <p><?php echo $project_data->project_body; ?></p>

<h3>Active Tasks</h3>
<ul>
<?php if($active_tasks): ?>
  <?php foreach($active_tasks as $task): ?>
    <li>
    <a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?>">
          <?php echo $task->task_name; ?>
    </a>
  </li>
  <?php endforeach; ?>
<?php else: ?>
  <p>This project has no active tasks.</p>
<?php endif; ?>
</ul>
<h3>Completed Tasks</h3>
<ul>
<?php if($completed_tasks): ?>
  <?php foreach($completed_tasks as $task): ?>
    <li>
    <a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id; ?>">
          <?php echo $task->task_name; ?>
    </a>
  </li>
  <?php endforeach; ?>
<?php else: ?>
  <p>This project has no completed tasks.</p>
<?php endif; ?>
</ul>
</div>
<div class="col-xs-3 pull-right">
<ul class="list-group">
  <h4>Project Actions</h4>
  <li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/create/<?php echo $project_data->id ?>">Create Task</a></li>
  <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/edit/<?php echo $project_data->id ?>">Edit Project</a></li>
  <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/delete/<?php echo $project_data->id ?>">Delete Project</a></li>

</ul>
</div>

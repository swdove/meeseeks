<p class="bg-success">
  <?php if($this->session->flashdata('login_success')): ?>
    <?php echo $this->session->flashdata('login_success') ?>
  <?php endif; ?>
  <?php if($this->session->flashdata('user_registered')): ?>
    <?php echo $this->session->flashdata('user_registered') ?>
  <?php endif; ?>
</p>
<p class="bg-danger">
  <?php if($this->session->flashdata('login_failed')): ?>
    <?php echo $this->session->flashdata('login_failed') ?>
  <?php endif; ?>
  <?php if($this->session->flashdata('no_access')): ?>
    <?php echo $this->session->flashdata('no_access') ?>
  <?php endif; ?>
</p>

<?php if($this->session->userdata('logged_in')): ?>
  <?php if(!empty($projects)): ?>
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3>Projects <span class="badge"><?php echo count($projects); ?></span></h3>
      </div>
      <div class="panel-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th width="30%">
                Project Name
              </th>
              <th width="60%">
                Description
              </th>
              <th width="10%"></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($projects as $project): ?>
              <tr>
                <td><?php echo $project->project_name; ?></td>
                <td><?php echo $project->project_body; ?></td>
                <td><a href="<?php echo base_url();?>projects/display/<?php echo $project->id;?>">View</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
<?php endif; ?>
<?php if(!empty($tasks)): ?>
  <div class="panel panel-primary">
    <div class="panel-heading"><h3>Tasks <span class="badge"><?php echo count($tasks); ?></span></h3></div>
    <div class="panel-body">
      <table class="table table-hover">
        <thead>
          <tr>
            <th width="30%">
              Task Name
            </th>
            <th width="60%">
              Description
            </th>
            <th width="10%"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($tasks as $task): ?>
            <tr>
              <td><?php echo $task->task_name; ?></td>
              <td>
                <?php if(strlen($task->task_body) < 50): ?>
                  <?php echo $task->task_body; ?>
                <?php else: ?>
                  <?php echo substr($task->task_body, 0, 50)."..."; ?>
                <?php endif; ?>
              </td>
              <td><a href="<?php echo base_url();?>tasks/display/<?php echo $task->id;?>">View</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
<?php endif; ?>
<?php else: ?>
  <div class="jumbotron">
    <h2 class="text-center">Welcome to Meeseeks</h2>
    <img style="display: block; margin-left: auto; margin-right: auto;" src='/ci_current/assets/images/meeseeks.png' height="200">
  </div>
<?php endif; ?>

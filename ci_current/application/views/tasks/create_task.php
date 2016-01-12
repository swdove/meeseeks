

  <h2>Create Task</h2>
  <?php $attributes = array('id'=>'create_form', 'class'=>'form_horizontal'); ?>
  <?php echo validation_errors("<p class='bg-danger'>"); ?>
  <?php echo form_open('tasks/create/'.$this->uri->segment(3).'', $attributes);?>

  <div class="form-group">
    <?php echo form_label('Task Name') ?>

    <?php
    $data = array(

      'class' => 'form-control',
      'name' => 'task_name',
      'placeholder' => 'Enter Task Name',
      'value' => set_value('task_name')

    );
     ?>
    <?php echo form_input($data); ?>
  </div>

  <div class="form-group">
    <?php echo form_label('Task Description') ?>

    <?php
    $data = array(

      'class' => 'form-control',
      'name' => 'task_body',
      'placeholder' => 'Enter Task Description',
      'value' => set_value('task_body')

    );
     ?>
    <?php echo form_textarea($data); ?>
  </div>

  <div class="form-group">
    <?php
    $data = array(

      'class' => 'form-control',
      'name' => 'due_date',
      'type' => 'date',
      'value' => set_value('due_date')

    );
     ?>
    <?php echo form_input($data); ?>
  </div>

  <div class="form-group">
    <?php
    $data = array(

      'class' => 'btn btn-primary',
      'name' => 'submit',
      'value' => 'Create'

    );
     ?>
     <?php echo form_submit($data); ?>
  </div>

  <?php echo form_close();?>

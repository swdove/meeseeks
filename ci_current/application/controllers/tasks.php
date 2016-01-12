<?php

class Tasks extends CI_Controller {

  public function display($task_id) {
    $data['project_id'] = $this->task_model->get_task_project_id($task_id);
    $data['project_name'] = $this->task_model->get_project_name($data['project_id']);

    $data['task'] = $this->task_model->get_task($task_id);


    $data['main_view'] = "tasks/display";
    $this->load->view('layouts/main', $data);
  }

  public function create($project_id) {
    $this->form_validation->set_rules('task_name', 'Task Name', 'trim|required');
    $this->form_validation->set_rules('task_body', 'Task Description', 'trim|required');
    $this->form_validation->set_rules('due_date', 'Due Date', 'required');

    if ($this->form_validation->run() == FALSE) {
      $data['main_view'] = 'tasks/create_task';
      $this->load->view('layouts/main', $data);
    } else {
      $data = array(
      //  'project_user_id' => $this->session->userdata('user_id'),
        'task_name' => $this->input->post('task_name'),
        'task_body' => $this->input->post('task_body'),
        'due_date' => $this->input->post('due_date'),
        'project_id' => $project_id
      );

      if($this->task_model->create_task($data)) {
        $this->session->set_flashdata('task_created', "Task created");
        redirect("projects/display/" . $project_id . "");
      }
    }
  }

  public function edit($task_id) {
    $this->form_validation->set_rules('task_name', 'Task Name', 'trim|required');
    $this->form_validation->set_rules('task_body', 'Task Description', 'trim|required');
    $this->form_validation->set_rules('due_date', 'Due Date', 'required');

    if ($this->form_validation->run() == FALSE) {
      $data['project_id'] = $this->task_model->get_task_project_id($task_id);
      $data['project_name'] = $this->task_model->get_project_name($data['project_id']);

      $data['task_data'] = $this->task_model->get_task_info($task_id);

      $data['main_view'] = 'tasks/edit_task';
      $this->load->view('layouts/main', $data);
    } else {
      $project_id = $this->task_model->get_task_project_id($task_id);
      $data = array(
        //'project_user_id' => $this->session->userdata('user_id'),
        'project_id' => $project_id,
        'task_name' => $this->input->post('task_name'),
        'task_body' => $this->input->post('task_body'),
        'due_date' => $this->input->post('due_date')
      );

      if($this->task_model->edit_task($task_id, $data)) {
        $this->session->set_flashdata('task_updated', "Task updated");
        redirect("projects/display/" . $project_id . "");
      }

    }
  }

  public function delete($project_id, $task_id) {
    $this->task_model->delete_task($task_id);

    $this->session->set_flashdata('task_deleted', 'Task deleted');
    redirect("projects/display/" . $project_id . "");
  }

  public function mark_complete ($task_id) {
    if($this->task_model->mark_complete($task_id)) {
      $project_id = $this->task_model->get_task_project_id($task_id);
      $this->session->set_flashdata('task_completed', "Task marked complete");

      redirect("projects/display/" . $project_id . "");
      //redirect("tasks/display/" . $task_id . "");
    }
  }

  public function mark_incomplete ($task_id) {
    if($this->task_model->mark_incomplete($task_id)) {
      $project_id = $this->task_model->get_task_project_id($task_id);
      $this->session->set_flashdata('task_uncompleted', "Task marked incomplete");

      redirect("projects/display/" . $project_id . "");
      //redirect("tasks/display/" . $task_id . "");
    }
  }

}

 ?>

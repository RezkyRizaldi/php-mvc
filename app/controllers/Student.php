<?php

class Student extends Controller
{
  public function index()
  {
    $data["title"] = "Student";
    $data["std"] = $this->model("StudentModel")->getStudents();
    $this->view("templates/header", $data);
    $this->view("student/index", $data);
    $this->view("templates/footer");
  }

  public function detail($id)
  {
    $data["title"] = "Student Detail";
    $data["std"] = $this->model("StudentModel")->getStudentById($id);
    $this->view("templates/header", $data);
    $this->view("student/detail", $data);
    $this->view("templates/footer");
  }

  public function add()
  {
    if ($this->model("StudentModel")->addStudentData($_POST) > 0) {
      Flasher::setFlash("Successfully", "Added", "success");
      header("Location: " . BASE_URL . "/student");
      exit();
    } else {
      Flasher::setFlash("Failed", "to be Added", "danger");
      header("Location: " . BASE_URL . "/student");
      exit();
    }
  }

  public function delete($id)
  {
    if ($this->model("StudentModel")->deleteStudentData($id) > 0) {
      Flasher::setFlash("Successfully", "Deleted", "success");
      header("Location: " . BASE_URL . "/student");
      exit();
    } else {
      Flasher::setFlash("Failed", "to Delete", "danger");
      header("Location: " . BASE_URL . "/student");
      exit();
    }
  }

  public function getStudentEditable()
  {
    echo json_encode($this->model("StudentModel")->getStudentById($_POST["id"]));
  }

  public function edit()
  {
    if ($this->model("StudentModel")->editStudentData($_POST) > 0) {
      Flasher::setFlash("Successfully", "Edited", "success");
      header("Location: " . BASE_URL . "/student");
      exit();
    } else {
      Flasher::setFlash("Failed", "to Edit", "danger");
      header("Location: " . BASE_URL . "/student");
      exit();
    }
  }

  public function search()
  {
    $data["title"] = "Student";
    $data["std"] = $this->model("StudentModel")->searchStudent();
    $this->view("templates/header", $data);
    $this->view("student/index", $data);
    $this->view("templates/footer");
  }
}
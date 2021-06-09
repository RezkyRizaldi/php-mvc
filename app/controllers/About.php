<?php

class About extends Controller
{
  public function index($name = "World", $time = "Morning")
  {
    $data["title"] = "About";
    $data["name"] = $name;
    $data["time"] = $time;
    $this->view("templates/header", $data);
    $this->view("about/index", $data);
    $this->view("templates/footer");
  }

  public function page()
  {
    $this->view("templates/header");
    $this->view("about/page");
    $this->view("templates/footer");
  }
}
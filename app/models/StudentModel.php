<?php

class StudentModel
{
  private $table = "students";
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getStudents()
  {
    $this->db->query("SELECT * FROM " . $this->$table);
    return $this->db->resultSet();
  }

  public function getStudentById($id)
  {
    $this->db->query("SELECT * FROM " . $this->$table . " WHERE id = :id");
    $this->db->bind("id", $id);
    return $this->db->single();
  }

  public function addStudentData($data)
  {
    $query = "INSERT INTO " . $this->$table . " VALUES ('', :name, :nis, :email, :major)";
    $this->db->query($query);
    $this->db->bind("name", $data["name"]);
    $this->db->bind("nis", $data["nis"]);
    $this->db->bind("email", $data["email"]);
    $this->db->bind("major", $data["major"]);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function deleteStudentData($id)
  {
    $query - "DELETE FROM " . $this->$table . " WHERE id = :id";
    $this->db->query($query);
    $this->db->bind("id", $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function editStudentData($data)
  {
    $query = "UPDATE " . $this->$table . " SET name = :name, nis = :nis, email = :email, major = :major WHERE id = :id";
    $this->db->query($query);
    $this->db->bind("id", $data["id"]);
    $this->db->bind("name", $data["name"]);
    $this->db->bind("nis", $data["nis"]);
    $this->db->bind("email", $data["email"]);
    $this->db->bind("major", $data["major"]);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function searchStudent()
  {
    $keyword = $_POST["keyword"];
    $query = "SELECT * FROM " . $this->$table . " WHERE name LIKE :keyword";
    $this->db->query($query);
    $this->db->bind("keyword", "%$keyword%");

    return $this->db->resultSet();
  }
}
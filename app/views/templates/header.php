<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data["title"] ?> Page</title>

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/bootstrap/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" />

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/bootstrap/bootstrap-icons-1.4.1/bootstrap-icons.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a href="<?= BASE_URL ?>" class="navbar-brand">PHP MVC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a href="<?= BASE_URL ?>" class="nav-link active" aria-current="page">Home</a>
          <a href="<?= BASE_URL ?>/about" class="nav-link">About</a>
          <a href="<?= BASE_URL ?>/student" class="nav-link">Student</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
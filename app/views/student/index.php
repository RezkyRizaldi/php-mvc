<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flash(); ?>
  </div>
</div>
<div class="row mb-3">
  <div class="col-lg-6">
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
      Add Student Data
    </button>
  </div>
</div>
<div class="row mb-3">
  <div class="col-lg-6">
    <form action="<?= BASE_URL ?>/students/search" method="POST">
      <div class="input-group">
        <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Search student..."
          aria-label="Search student" aria-describedby="button-addon" autocomplete="off">
        <button class="btn btn-primary" type="submit" id="search">Search</button>
      </div>
    </form>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <h3><?= $data["title"] ?> List</h3>
    <ul class="list-group">
      <?php foreach ($data["std"] as $std): ?>
      <li class="list-group-item">
        <?= $std["name"] ?>
        <a href="<?= BASE_URL ?>/student/delete/<?= $std["id"] ?>"
          class="badge rounded-pill float-end ms-1 bg-danger show_modal_add"
          onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
        <a href="<?= BASE_URL ?>/student/edit/<?= $std["id"] ?>"
          class="badge rounded-pill float-end ms-1 bg-primary show_modal_edit" data-bs-toggle="modal"
          data-bs-target="#formModal" data-id="<?= $std["id"] ?>">Edit</a>
        <a href="<?= BASE_URL ?>/student/detail/<?= $std["id"] ?>"
          class="badge rounded-pill float-end ms-1 bg-info">Detail</a>
      </li>
      <li class="list-group-item"><?= $std["nis"] ?></li>
      <li class="list-group-item"><?= $std["email"] ?></li>
      <li class="list-group-item"><?= $std["major"] ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Add Student Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= BASE_URL ?>/student/add" method="POST">
        <input type="hidden" name="id" id="id">
        <div class="modal-body">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Input Name">
          </div>
          <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="number" class="form-control" id="nis" name="nis" placeholder="Input NIS">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Input Email">
          </div>
          <div class="mb-3">
            <label for="major" class="form-label">Major</label>
            <select name="major" id="major" class="form-select" aria-label="Major select">
              <option class="selected" selected>Choose Major</option>
              <option value="Technical Information">Technical Information</option>
              <option value="Mechanical Engineering">Mechanical Engineering</option>
              <option value="Industrial Engineering">Industrial Engineering</option>
              <option value="Food Engineering">Food Engineering</option>
              <option value="Planological Engineering">Planological Engineering</option>
              <option value="Enviromental Engineering">Enviromental Engineering</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
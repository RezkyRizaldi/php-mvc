<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data["std"]["name"] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data["std"]["nis"] ?></h6>
    <p class="card-text"><?= $data["std"]["email"] ?></p>
    <p class="card-text"><?= $data["std"]["major"] ?></p>
    <a href="<?= BASE_URL ?>/student" class="card-link">Back</a>
  </div>
</div>
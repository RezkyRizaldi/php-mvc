<!-- MVC (Model-View-Controller) -->
<!-- Pola arsitektur pada perancangan perangkat lunak yang berorientasi obejk. -->
<!-- Memisahkan tampilan (View), data (Model), dan proses (Controller) -->

<?php
if (!session_id()) {
  session_start();
}

require_once "../app/init.php";

$app = new App();
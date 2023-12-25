<?php
    echo '<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/Notes/" class="text-dark fs-3 fw-medium me-3 link-underline link-underline-opacity-0">My Notes</a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center align-items-center mt-1 mb-md-0">
          <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 link-body-emphasis">Services</a></li>
          <li><a href="#" class="nav-link px-2 link-body-emphasis">About</a></li>
          <li><a href="#" class="nav-link px-2 link-body-emphasis">Contact</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
          <li><a class="dropdown-item" href="./profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="./_logout.php">Log out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>';
?>
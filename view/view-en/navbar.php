<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Artist</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="events.php">Activities</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link workshop-title" href="workshop.php">CREATIVE BURROW</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>

        <?php if (isset($_SESSION['ses'])) { ?>

          <li class="nav-item">
            <a class="nav-link" href="../view/view-sr/CRUDgalery.php">INSERT/EDIT/DELETE</a>
          </li>

        <?php } ?>

        <?php if (isset($_SESSION['ses'])) { ?>

          <li class="nav-item">
            <a class="nav-link" href="../controller/logout.php">LOGOUT</a>
          </li>

        <?php } ?>

        <li class="nav-item eng">
          <a class="nav-link" href="../../view/view-sr/index.php"> srb </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
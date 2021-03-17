<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="?page=index"><img src="./assets/images/logo.jpg" alt="QueenChess" height="40"></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="?page=index">Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=play">Jouer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=friends">Amis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=profile">Profil</a>
      </li>
    </ul>
    <?php
    // If the user is logged in
    if ((!isset($_SESSION['logged']) || $_SESSION['logged'] == false)) {
      echo '<button class="btn btn-success my-2 my-sm-0" id="btn-login">Se connecter</button>';
    }
    ?>
  </div>
</nav>
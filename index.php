<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QueenChess</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <!-- Load JQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Load autoload js -->
    <script src="./assets/scripts/autoload.js"></script>
</head>

<body>
    <?php
    // Start session
    session_start();
    // Import navbar
    require_once('pages/header.php');

    // If page provided
    if (isset($_GET['page'])) {
        // Show the provided page
        switch ($_GET['page']) {
            case 'index':
                require('pages/index-content.php');
                break;
            case 'play':
                require('pages/game.php');
                break;
            case 'login':
                require('pages/login.php');
                break;
            case 'register':
                require('pages/register.php');
                break;
            case 'friends':
                require('pages/friends.php');
                break;
            case 'profile':
                require('pages/profile.php');
                break;

            default:
                require('pages/404.php');
                break;
        }
    } else {
        require('pages/index-content.php');
    }
    ?>
</body>

</html>
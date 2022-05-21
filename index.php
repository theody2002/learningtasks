<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html>

<head>
    <title>index</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div id="nav">
            <div class="logo">
                <h3>TB</h3>
            </div>
            <a href="index.php?page=About">About Me</a>
            <a href="index.php?page=Works">My Works</a>
            <a href="index.php">Home</a>

            <?php
            switch ($page) {
                case "About":
                    include "About.php";
                    break;
                case "Works":
                    include "Works.php";
                    break;
                default:
                    include "default.php";
            }
            ?>
    </header>

</body>

</html>

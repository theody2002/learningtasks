<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Works</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body>
    <div class="intro">
        <h1>These are my</h1>
        <h1 class="typing"></h1>
    </div>
    <section>
        <div class="wrapper-wrk">
            <a href="Html files/CLE1MT/index.html" target="_blank">MIDTERM EXAM</a>
            <a href="Html files/LT5/index.html" target="_blank">LEARNING TASK 5</a>
            <a href="Html files/LT4/index.html" target="_blank">LEARNING TASK 4</a>
            <a href="Html files/LT3/index.html" target="_blank">LEARNING TASK 3</a>
            <a href="Html files/LT2/index.html" target="_blank">LEARNING TASK 2</a>
        </div>
    </section>
    <script src="script.js"></script>



</body>

</html>
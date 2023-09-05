<?php

session_start();

// isset prüft, ob eine Variable oder ein Array-Key vorhanden ist
if(isset($_POST['user'])) {
    $_SESSION['user'] = $_POST['user']; // Überträgt den Namen des Users aus dem POST in die Session
}

if(isset($_SESSION['user'])) {
    echo 'Hallo '.$_SESSION['user'];
}
else {
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="bootstrap-5.3.1/css/bootstrap.min.css">
    </head>
    <body>
        
        <form action="session2.php" method="post">

            <div class="mb-3">
                <label for="vorname" class="form-label">Vorname:</label>
                <input type="text" name="vorname" id="vorname">
            </div>

            <div class="mb-3">
                <label for="nachname" class="form-label">Nachname:</label>
                <input type="text" name="nachname" id="nachname">
            </div>

            <button>Senden</button>
        </form>

        <script src="bootstrap-5.3.1/js/bootstrap.min.js"></script>

    </body>
    </html>


    <?php
}
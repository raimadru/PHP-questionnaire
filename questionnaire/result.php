<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Question</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
    </head>
    <body>
        <?php
        session_start();

        $_SESSION['question15'] = $_POST['question15'];
        
        echo "Thank you for your answers!";
        echo "<br>";
        echo "session id: ";
        echo session_id();
        ?>

    </body>
</html>

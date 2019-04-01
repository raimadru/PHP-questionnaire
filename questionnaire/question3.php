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

        $_SESSION['country'] = $_POST['country'];
        ?>

        <form action="question4.php" method="POST">
            <div>City you live in: </div><br>
            
            <input type="radio" name="city" value="Capital">Capital<br>
            <input type="radio" name="city" value="One of the biggest cities">One of the biggest cities<br>
            <input type="radio" name="city" value="One of the smallest cities">One of the smallest cities<br>
            <input type="radio" name="city" value="Countryside">Countryside<br>
            <input type="radio" name="city" value="Other">Other<br>
            
            <input type="submit" name="submit" value="submit">
        </form>


    </body>
</html>




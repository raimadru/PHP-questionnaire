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

        $_SESSION['question12'] = $_POST['question12'];
        ?>

        <form action="question14.php" method="POST">
            <div>What do you think about supermarket products packaging? </div><br>
            
            <input type="radio" name="question13" value="Food do not need packaging">Food do not need packaging<br>
            <input type="radio" name="question13" value="Too much plastic">Too much plastic<br>
            <input type="radio" name="question13" value="I wish there could be more plastic">I wish there could be more plastic<br>
            <input type="radio" name="question13" value="I like paper packaging">I like paper packaging<br>
            <input type="radio" name="question13" value="I do not like packaging">I do not like packaging<br>
            
            <input type="submit" name="submit" value="submit">
        </form>

    </body>
</html>

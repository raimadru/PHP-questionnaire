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

        $_SESSION['city'] = $_POST['city'];
        ?>

        <form action="question5.php" method="POST">
            <div>How often you buy groceries? </div><br>
            
            <input type="radio" name="question4" value="Everyday">Everyday<br>
            <input type="radio" name="question4" value="4-5 times per week">4-5 times per week<br>
            <input type="radio" name="question4" value="Few timer per week">Few timer per week<br>
            <input type="radio" name="question4" value="Once a week">Once a week<br>
            
            <input type="submit" name="submit" value="submit">
        </form>

    </body>
</html>



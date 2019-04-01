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

        $_SESSION['question7'] = $_POST['question7'];
        ?>

        <form action="question9.php" method="POST">
            <div>Do you use dairy products? </div><br>
            
            <input type="radio" name="question8" value="Yes">Yes<br>
            <input type="radio" name="question8" value="No">No<br>
            <input type="radio" name="question8" value="Sometimes">Sometimes<br>
            
            <input type="submit" name="submit" value="submit">
        </form>

    </body>
</html>

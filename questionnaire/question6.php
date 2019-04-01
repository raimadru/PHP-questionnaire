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

        $_SESSION['question5'] = $_POST['question5'];
        ?>

        <form action="question7.php" method="POST">
            <div>Do you eat fruits and vegetables? </div><br>
            
            <input type="radio" name="question6" value="Yes">Yes<br>
            <input type="radio" name="question6" value="No">No<br>
            <input type="radio" name="question6" value="Sometimes">Sometimes<br>
            
            <input type="submit" name="submit" value="submit">
        </form>

    </body>
</html>

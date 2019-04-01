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

        $_SESSION['question9'] = $_POST['question9'];
        ?>

        <form action="question11.php" method="POST">
            <div>How often you buy them? </div><br>
            <input type="text" name="question10" required><br>
            <input type="submit" name="submit" value="submit">
        </form>

    </body>
</html>

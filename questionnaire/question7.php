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

        $_SESSION['question6'] = $_POST['question6'];
        ?>

        <form action="question8.php" method="POST">
            <div>How often you eat fruits and vegetables? </div><br>
            
            <input type="radio" name="question7" value="Never">Never<br>
            <input type="radio" name="question7" value="1-3 times per week">1-3 times per week<br>
            <input type="radio" name="question7" value="More than 4 times a week">More than 4 times a week<br>
            
            <input type="submit" name="submit" value="submit">
        </form>

    </body>
</html>

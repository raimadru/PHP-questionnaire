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

        $_SESSION['question13'] = $_POST['question13'];
        ?>

        <form action="question15.php" method="POST">
            <div>Do you recycle? </div><br>
            
            <input type="radio" name="question14" value="Yes">Yes<br>
            <input type="radio" name="question14" value="No">No<br>
            <input type="radio" name="question14" value="I try to, but it's hard">I try to, but it's hard<br>
            <input type="radio" name="question14" value="Only some materials">Only some materials<br>
            
            <input type="submit" name="submit" value="submit">
        </form>

    </body>
</html>

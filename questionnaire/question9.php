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

        $_SESSION['question8'] = $_POST['question8'];
        ?>

        <form action="question10.php" method="POST">
            <div>Do you buy special cleaning products at the store? </div><br>
            
            <input type="radio" name="question9" value="Yes">Yes<br>
            <input type="radio" name="question9" value="No">No<br>
            <input type="radio" name="question9" value="Sometimes">Sometimes<br>
            
            <input type="submit" name="submit" value="submit">
        </form>

    </body>
</html>

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

        $_SESSION['question14'] = $_POST['question14'];
        ?>

        <form action="result.php" method="POST">
            <div>Is it easy to find the information about effective recycling and how to make your own products online? </div><br>
            
            <input type="radio" name="question15" value="Difficult">Difficult<br>
            <input type="radio" name="question15" value="Easy">Easy<br>
            <input type="radio" name="question15" value="I never searched for it">I never searched for it<br>
            
            <input type="submit" name="submit" value="submit">
        </form>

    </body>
</html>

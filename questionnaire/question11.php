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

        $_SESSION['question10'] = $_POST['question10'];
        ?>

        <form action="question12.php" method="POST">
            <div>How much money a month you spend on the expenses such as groceries, cleaning and hygiene products? </div><br>
            
            <input type="radio" name="question11" value="<100 eur"><100 eur<br>
            <input type="radio" name="question11" value="~250 eur">~250 eur<br>
            <input type="radio" name="question11" value="250 eur <">250 eur<br>
            
            <input type="submit" name="submit" value="submit">
        </form>

    </body>
</html>
